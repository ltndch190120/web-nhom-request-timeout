<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>Document</title>
</head>





<?php
require_once 'connect.php';
include 'Header.php';
//session_start();
//session_destroy();
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
   // var_dump($temp);
    updateTTKH($row['id'],$NameAccout,$sdt,$diachi,$gender);
   // header('location: TTHK.php');
} 
   echo "<div style=' display: flex;justify-content: center;align-items: center;'>";
   echo "     <div style=' display: flex;flex-direction: column; justify-content: center;width: 600px;border-style: solid;border-width: 1px;border-color: gray;'>";
     echo "       <p style='font-size: 30px;height: 30px;padding: 5 0 0 20;margin: 0 0 0 0;'>ĐƠN HÀNG </p>";
    echo "        <p style='margin:  5 0 5 20;'><span style='color: red;margin: 0 5 0 0;' class='fas fa-gift'></span> Tặng cường lực + ốp lưng</p>";
    echo "        <p style='margin:  5 0 5 20;'> <span style='color: red;margin: 0 5 0 0;' class='fas fa-gift'></span> Tặng kèm bộ cốc - cáp</p>";
      echo "      <hr style='border-style: solid;border-width: 0;height: 1px;background-color: gray;margin: 0 0 0 0;'>";
    echo "        <p style='margin:  5 0 5 20;'> <span style='color: green;margin: 0 5 0 0;' class='far fa-check-circle'></span> Tên :" . $row[ "NameAccout"] . "</p>";
     echo "       <p style='margin:  5 0 5 20;'> <span style='color: green;margin: 0 5 0 0;' class='far fa-check-circle'></span> SĐT :" . $row[ "sdt"] . "</p>";
      echo "      <p style='margin:  5 0 5 20;'> <span style='color: green;margin: 0 5 0 0;' class='far fa-check-circle'></span> Địa chỉ giao hàng :" . $row[ "diachi"] . "</p>";
      echo "      <p style='margin:  5 0 5 20;'> <span style='color: green;margin: 0 5 0 0;' class='far fa-check-circle'></span> FREE ship</p>";
      echo "      <hr style='border-style: solid;border-width: 0;height: 1px;background-color: gray;margin: 0 0 0 0;'>";

       echo "     <p style='margin: 0 0 10 5;font-size: 13px;'> <span style='color: red;'> (*)</span> Áp dụng toàn quốc nhưng không áp dụng khi mua trả góp 0%</p>'; </div>";
  echo "  </div>";



?>
