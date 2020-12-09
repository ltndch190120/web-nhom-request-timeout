<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $NameAccout = $_POST['NameAccout'];
    $error = array();
    $conn = mysqli_connect("localhost","root","");

    mysqli_select_db($conn,"test") or die('khong connect duoc');

    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $NameAccout = mysqli_real_escape_string($conn, $_POST['NameAccout']);
        
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if(empty($NameAccout)) {array_push($error,"Name accout is required"); }
        if(empty($password)) {array_push($error,"password is required");}

        $user_check_query = "select * from taikhoan where username = '$username' or email ='$email'" or die('Khong ket noi');
        $result = mysqli_query($conn,$user_check_query);
        
        $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
            if ($user['username'] === $username) {
              array_push($errors, "Username already exists");
            }
        
            if ($user['email'] === $email) {
              array_push($errors, "email already exists");
            }
        }
        if(count($error) == 0){
            $password1 = md5($password);
            $date = getdate();
            $query = "INSERT INTO taikhoan (username,NameAccout,password,email) 
                VALUES('$username','$NameAccout' ,'$password1' ,'$email')";
            mysqli_query($conn, $query);
            header('location: Login.html');
        }

    }

?>