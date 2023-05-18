<?php
// initial variable
$_SESSION['user'] = '';
$_SESSION['cart'] = [];

session_start();


require_once "./mvc/bridge.php";
$app = new app();
