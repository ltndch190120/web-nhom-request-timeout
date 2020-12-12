<?php
  require_once 'init.php';
if(isset($_POST['email']) && isset($_POST['password']))
{
    $email=$_POST['email'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$user=findUserByEmail($email);
	if(!$user)
	{
		$error='Email nhập lại không hợp lệ';
	}
	else
	{
		if($repassword!= $password)
		{
			$error='Mật khẩu không hợp lệ';
		}
		 else
   		{
    	  		$user=createUserUpdate($email,password_hash($password,PASSWORD_DEFAULT));
    	  		sendEmail($email,'Kích hoạt tài khoản','Vui lòng click vào link <a href="http://localhost/DACK/activate.php?id=' .$user['id'] .'&code=' .$user['code'] . '">kích hoạt tài khoản</a>');
		 		 header('Location: Login.html');
		 		 exit();	
    	}
	}
				 	   		
}
?>
<?php include 'Header.html';?>