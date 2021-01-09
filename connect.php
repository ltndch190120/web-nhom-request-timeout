<?php
$connect=mysqli_connect('localhost','root','','dack');
if($connect)
{
    mysqli_query($connect,"SET NAMES 'UTF8'");
}
?>