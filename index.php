<?php
require_once "config/defaults.php";
require_once "config/requires_templates/requires.product.php";
$URL = $_SERVER['REQUEST_URI'];
header('Access-Control-Allow-Origin: *');
ob_start();
executeAction($URL);
ob_flush();
?>
