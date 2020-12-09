<?php
   $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"test") or die('khong connect duoc');

   if(isset($_POST['username']))
   {
       $username = $_POST['username'];
       $password = $_POST['password'];
       $password = md5($password);
       $select = "select * from taikhoan where username ='$username' and password ='$password' limit 1" or die('khogn ket noi');
       $result = mysqli_query($conn,$select);

       if(mysqli_num_rows($result)== 1){
           header('Location: Header.html');
           exit();
       }
       else{
           header('Location: Login.html');
           echo "sai tai khoang hoac mat khau";
       }
   }
?>