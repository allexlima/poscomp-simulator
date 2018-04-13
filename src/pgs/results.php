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
	<link type="text/css" rel="stylesheet" href="src/static/funky_radio.css">
	<link type="text/css" rel="stylesheet" href="src/static/animate.css">
	<script src="plugins/components/jquery/jquery.min.js"></script>
	<script src="plugins/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
	<script src="plugins/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<script src="src/static/results-window.js"></script>
	<style>
		.alert{
		padding: .4rem 1.2rem;
		margin: 1rem;
		}

		.blank {
		color: #707071;
		border-color: #d6d3d3;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand animated pulse" href="https://github.com/allexlima/poscomp-simulator">
			<img src="src/static/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
			<?php echo $dtm->getExamHeader('name'); ?>
	    </a>
		<ul id="aboutTop" class="nav justify-content-end">
			<li class="nav-item">By <b><?php echo $dtm->getExamHeader('prof'); ?></b></li>
			<li class="nav-item"></li>
			<li class="nav-item"><a class="github-button" href="https://github.com/allexlima" aria-label="Follow @allexlima on GitHub">Follow @allexlima</a></li>
		</ul>
	</nav>

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Resultados</h1>
	    <p class="lead">Chegou a hora de conferir sua pontuação!</p>
	  </div>
	</div>

	<main class="container">
		
		<?php
			if(!$_POST)
				echo "Erro: POST NÃO RECEBIDO!";
		?>
				
		<div class="card text-center">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item"> <a id="general-grade" class="nav-link active" href="#">Nota geral</a> </li>
					<li class="nav-item"> <a id="detailed-grade" class="nav-link" href="#">Ver minha prova</a> </li>
				</ul>
			</div>
			<div class="card-body">

				<div id="detailed-grade-body" style="display:none; text-align:left;padding:10px;">
					<?php
						$nota = 0;
						$exam = $dtm->getExam();
						foreach($exam as $i=>$question){
							$correct = $dtm->getCorrectAnswer($question);
							echo "<div class='form-group'><h5> ".$question["text"]."</h5>";
							foreach($question["answers"] as $option){
								$selected = (@$_POST[(string) $question["id"]] == $option['id']);
								$selected_frame = $selected?"alert-info":"blank";

								echo "<div style='cursor:default' class='alert ".$selected_frame."' title='".($selected?"Você marcou esta!":"Alternativa não selecionada")."'>";

								if($option['id'] == $correct['id']){
									echo "<span class='badge badge-primary' title='Alternativa correta'>✔</span> ";
									if($selected)
										$nota += $dtm->getQuestionPoints();
								}else if($selected)
									echo "<span class='badge badge-danger' title='Alternativa incorreta'>✘</span> ";

								echo $option['text'];
								echo "</div>";
							}
							echo "</div>";
						}
					?>
				</div>

				<div id="general-grade-body">
					<h5 class="card-title">Sua nota é <span class="badge badge-secondary"><?php echo ($nota>9.5)?"10.0":$nota; ?></span> de <?php echo $dtm->getExamHeader("max-grade"); ?>!</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="?pg=exam" class="btn btn-primary">Refazer simulado</a>
				</div>
			</div>
		</div>
	</main>

	<br><br>

	<footer class="footer">
		<div class="container">
			<span class="text-muted">&copy; 2018 <a href="http://allexlima.com">Allex Lima</a> &middot; All rights reserved under <a href="LICENSE">MIT license</a>.</span>
		</div>
	</footer>
</body>
</html>
