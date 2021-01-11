<?php
require_once 'init.php';
$title='Kích hoạt tài khoản';
$code=$_GET['code'];
$id=$_GET['id'];
$user=findUserById($id);
if($user)
{
   if($user['code'])
   {
      if($user['code']==$code)
      {
         activateUser($id);
         $_SESSION['userID']=$id;
		 header('Location: index.php');
      }else
      {
      	$error='Mã kích hoạt không hợp lệ';
      }
   }else
   {
   	$error='Tài khoản đã kích hoạt';
   }
}else
{
	$error='Tài khoản không tồn tại';
}


?>
<?php include 'Header.php';?>
<div class="alert alert-danger" role="alert">
 <?php echo $error; ?>
</div>
