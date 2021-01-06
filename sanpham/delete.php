<?php
    $connect=mysqli_connect('localhost','root','','dack');
    if($connect)
    {
        mysqli_query($connect,"SET NAMES 'UTF8'");
    }
   $id=$_GET['id'];
   $sql="DELETE FROM sanpham where masp=$id";
   $query=mysqli_query($connect,$sql);
   header('location: index2.php?page_layout=danhsach');
?>