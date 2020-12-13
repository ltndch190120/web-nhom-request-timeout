<?php
require_once 'init.php' ;
$id=$_GET['id'];
$email=findUserById($id);
header('Content-Type: image/jpeg');
echo $email['avatar'];