<?php
  require_once 'init.php';
	$username1 = $_POST['username'];
   if(isset($_POST['username']) && isset($_POST['password']))
   {
    $username=$_POST['username'];
	$password=$_POST['password'];
	$user=findUserByUsername($username);
	if(!$user)
	{
		$error='Quý khách vui lòng kiểm tra lại';
	}
	else
	{
		if(!password_verify($password,$user['password']))
		{
			$error='Mật khẩu không chính xác';
		}
		else
		{
			$_SESSION['userID']=$user['id'];
			header('Location: Header.html');
			exit();
		}
	}
   }
?>
<?php include 'Header.php';?>