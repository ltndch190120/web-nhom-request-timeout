<?php
  require_once 'init.php';
  global $db;
  $sql="SELECT * FROM taikhoan";
  $result=$db->query($sql);
  $row=$result->fetch(PDO::FETCH_ASSOC);
if(isset($_FILES['avatar']))
{
    
    $file=$_FILES['avatar'];
    $sdt=$_POST['sdt'];
    $NameAccout=$_POST['NameAccout']; 
    $diachi=$_POST['diachi'];
    $email=$_POST['email'];
    $avatar=file_get_contents($file['tmp_name']);
    updateAvatar($row['id'],$avatar,$NameAccout,$sdt,$email,$diachi);

}
?>	


