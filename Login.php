<?php
  require_once 'init.php';
  $title='Đăng nhập';
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
			if($user['username']=="admin")
			{
				$_SESSION['userID']=$user['id'];
				header('location: index2.php?page_layout=danhsach');
				exit();
			}
			$_SESSION['userID']=$user['id'];
			header('Location: index.php');
			exit();
		}
	}
	
   }
?>	
<?php include 'Header.php';?> 
