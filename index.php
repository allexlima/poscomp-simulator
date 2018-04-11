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
	<script src="plugins/components/jquery/jquery.min.js"></script>
	<script src="plugins/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
	<script src="plugins/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<style>
		html {
		  position: relative;
		  min-height: 100%;
		}
		body {
		  margin-bottom: 60px; /* Margin bottom by footer height */
		}
		#aboutTop{
			color:#ffffff;
			font-size: 0.8em;
		}
		#aboutTop li{
			margin:0 5px;
		}
		.container {
			width: auto;
			max-width:800px;
			padding: 0 15px;
		}
		.footer {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		  height: 60px; /* Set the fixed height of the footer here */
		  line-height: 60px; /* Vertically center the text there */
		  background-color: #f5f5f5;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark mb-5">
		<a class="navbar-brand" href="#">
	      <img src="static/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
	      <?php echo $rd->getExamHeader('name'); ?>
	    </a>

		<ul id="aboutTop" class="nav justify-content-end">
		  <li class="nav-item">By <b><?php echo $rd->getExamHeader('prof'); ?></b></li> |
		  <li class="nav-item"><b><?php echo $rd->getQuestionsQuantity(); ?></b> questions</li> |
		  <li class="nav-item">Max grade <b><?php echo $rd->getExamHeader('max-grade'); ?></b></li>
			<li class="nav-item"></li>
			<li class="nav-item"><a class="github-button" href="https://github.com/allexlima" aria-label="Follow @allexlima on GitHub">Follow @allexlima</a></li>
		</ul>
	</nav>

	<main role="main" class="container">

		<div class="jumbotron">
			<h1 class="display-4">Sobre</h1>
			<p class="lead">Exame Nacional para Ingresso na Pós-Graduação em Computação (POSCOMP)</p>
			<hr class="my-4">
			<p>O POSCOMP é um exame aplicado em todas as regiões do País, com o objetivo específico de avaliar os conhecimentos de candidatos a Programas de Pós-Graduação em Computação oferecidos no Brasil. A grande maioria dos Programas de Pós-Graduação no País utiliza, de alguma forma, o resultado do POSCOMP em seu processo seletivo.</p>
			<a class="btn btn-secondary btn-lg" href="http://www.sbc.org.br/educacao/poscomp" role="button">Mais informações</a>
			<a class="btn btn-primary btn-lg" href="#" role="button">Iniciar simulado &raquo;</a>
		</div>

	</main>

	<footer class="footer">
		<div class="container">
			<span class="text-muted">&copy; 2018 <a href="http://allexlima.com">Allex Lima</a> &middot; All rights reserved under <a href="LICENSE">MIT license</a>.</span>
		</div>
	</footer>

</body>
</html>
