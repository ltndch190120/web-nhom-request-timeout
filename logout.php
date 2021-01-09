<?php
require_once 'init.php';
unset($_SESSION['userID']);
session_start();
session_destroy();
//die();
header('Location: index.php');
