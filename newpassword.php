<?php
  require_once 'init.php';
  $title='Đổi Mật Khẩu';
if(isset($_POST['email']) && isset($_POST['password']))
{
    $email=$_POST['email'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$user=findUserByEmail($email);
	if(!$user)
	{
		header('Location: newpassword.html');
	}
	else
	{
		if($repassword!= $password)
		{
			header('Location: newpassword.html');
		}
		 else
   		{
    	  		$user=createUserUpdate($email,password_hash($password,PASSWORD_DEFAULT));
		 		 header('Location: Login.html');
		 		 exit();	
    	}
	}
				 	   		
}
?>
<?php include 'Header.php';?>