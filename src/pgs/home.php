<!DOCTYPE html>

<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Allex Lima">
	<meta name="description" content="<?php echo $dtm->getExamHeader('details'); ?>">
	<title><?php echo $dtm->getExamHeader('name'); ?></title>
	<link rel="icon" href="src/static/icon.png">
	<link type="text/css" rel="stylesheet" href="plugins/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="src/static/littlethings.css">
	<link type="text/css" rel="stylesheet" href="src/static/animate.css">
	<script src="plugins/components/jquery/jquery.min.js"></script>
	<script src="plugins/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
	<script src="plugins/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark mb-5">
		<a class="navbar-brand" href="https://github.com/allexlima/poscomp-simulator">
	      <img src="src/static/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
	      <?php echo $dtm->getExamHeader('name'); ?> - Home
	    </a>
		<ul id="aboutTop" class="nav justify-content-end">
			<li class="nav-item"><a class="github-button" href="https://github.com/allexlima" aria-label="Follow @allexlima on GitHub">Follow @allexlima</a></li>
		</ul>
	</nav>

	<main class="container animated fadeInUp">

		<div class="jumbotron">
			<h1 class="display-4">Sobre</h1>
			<p class="lead">Exame Nacional para Ingresso na Pós-Graduação em Computação (POSCOMP)</p>
			<hr class="my-4">
			<p>O POSCOMP é um exame aplicado em todas as regiões do País, com o objetivo específico de avaliar os conhecimentos de candidatos a Programas de Pós-Graduação em Computação oferecidos no Brasil. A grande maioria dos Programas de Pós-Graduação no País utiliza, de alguma forma, o resultado do POSCOMP em seu processo seletivo.</p>
			<a class="btn btn-secondary btn-lg" href="http://www.sbc.org.br/educacao/poscomp" role="button">Mais informações</a>
			<a class="btn btn-primary btn-lg animated jello" href="?pg=exam" role="button">Iniciar simulado &raquo;</a>
		</div>

	</main>

	<footer class="footer">
		<div class="container">
			<span class="text-muted">&copy; 2018 <a href="http://allexlima.com">Allex Lima</a> &middot; All rights reserved under <a href="LICENSE">MIT license</a>.</span>
		</div>
	</footer>

</body>
</html>
