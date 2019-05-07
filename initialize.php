<?php
ob_start();



require_once('functions.php');
require_once('database.php');
require_once ('db_connect.php');

$db = db_connect();
$errors = [];


