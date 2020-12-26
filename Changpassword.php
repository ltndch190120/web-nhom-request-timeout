<?php
require_once 'init.php';
$title='Quên Mật Khẩu';
if(isset($_POST['email']))
{
	$email=$_POST['email'];
	$user=findUserByEmail($email);
	if($user)
	{				
			sendEmail($email,'Kích hoạt tài khoản','Vui lòng click vào link <a href="http://localhost/DACK/newpassword.html?id=' .$user['id'] .'&code=' .$code . '">Thay đổi mật khẩu</a>');
			header('Location: login.html');
			exit();
	}
	else
	{
		$error='Email không tồn tại';
	}
}
?>
<?php include 'Header.php';?>