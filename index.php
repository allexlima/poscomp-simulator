<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('engine/class.readdata.php');

$rd = new ReadData("data.json");

?>
<!DOCTYPE html>

<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Allex Lima">
	<meta name="description" content="<?php echo $rd->getExamHeader('details'); ?>">
	<title><?php echo $rd->getExamHeader('name'); ?></title>
	<link rel="icon" href="static/icon.png">
	<link type="text/css" rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<script src="vendor/components/jquery/jquery.min.js"></script>
	<script src="vendor/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<style>
		#aboutTop{
			color:#ffffff;
		}
		#aboutTop li{
			margin:0 5px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
	      <img src="static/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
	      <?php echo $rd->getExamHeader('name'); ?>
	    </a>

		<ul id="aboutTop" class="nav justify-content-end">
		  <li class="nav-item">
			  By <b><?php echo $rd->getExamHeader('prof'); ?></b>
		  </li> |
		  <li class="nav-item">
			  Max grade <b><?php echo $rd->getExamHeader('max-grade'); ?></b>
		  </li>
		</ul>

	</nav>

</body>
</html>
