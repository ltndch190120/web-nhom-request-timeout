<?php
    require_once 'init.php';
    $title='Đăng Ký';
    if(isset($_POST['email'])&& isset($_POST['password'])  )
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $NameAccout = $_POST['NameAccout'];
        $repassword=$_POST['repassword'];
        $user=findUserByEmail($email);
        if($user)
        {
		
		    $error=' Tài khoản đã có trong hệ thống';
	    }
	    else
	    {
		if($password!=$repassword)
            {
                $error='Mật khẩu không chính xác';
            }
            else
            {
                $code=strtoupper(bin2hex(random_bytes(4)));
                $user=createUser($username,$email,password_hash($password,PASSWORD_DEFAULT),$code,$NameAccout);
                sendEmail($email,'Kích hoạt tài khoản','Vui lòng click vào link <a href="http://localhost/DACK/activate.php?id=' .$user['id'] .'&code=' .$code . '">kích hoạt tài khoản</a>');
                header('Location: Login.html');
                exit();
            }         
        }
    }
?>
<?php include 'Header.php';?>

