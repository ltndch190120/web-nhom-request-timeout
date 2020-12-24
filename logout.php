<?php
require_once 'init.php';
unset($_SESSION['userID']);
header('Location: Header.php');
