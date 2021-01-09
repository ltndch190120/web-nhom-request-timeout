<?php
require_once 'connect.php';
// session_start();
// session_destroy();
// //die();
// header('Location: index.php');

require_once 'init.php';
global $db;
$sql = "SELECT * FROM taikhoan";
$result = $db->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
if(isset($_POST['submit']))
{
 
    $sdt=$_POST['sdt'];
    $NameAccout=$_POST['NameAccout']; 
    $diachi=$_POST['diachi'];
    $gender = $_POST['gender'];
    var_dump($NameAccout);
    updateTTKH($row['id'],$NameAccout,$sdt,$diachi,$gender);
    header('location: profile.php');
}
?>
