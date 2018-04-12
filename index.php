<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'src/data-manager.php';
$dtm = new DataManager("src/data.json");

switch (@$_GET['pg']) {
	case 'exam': include 'src/pgs/exam.php'; break;
	default: include 'src/pgs/home.php'; break;
}

?>
