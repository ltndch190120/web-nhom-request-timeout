<?php
session_start();
// composer aitoload
require_once './vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Kết nối DCDL

$db = new PDO('mysql:host=localhost;dbname=dack;charset=utf8', 'root', '');
require_once 'functions.php';
$currentUser=getCurrentUser();
