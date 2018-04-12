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
	<link type="text/css" rel="stylesheet" href="src/static/funky_radio.css">
	<script src="plugins/components/jquery/jquery.min.js"></script>
	<script src="plugins/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
	<script src="plugins/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark mb-5">
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

	<main class="container">
		<form method="post" name="exam-poscomp" action="?pg=results">
			<?php
				$exam = $dtm->getExam();
				foreach($exam as $i=>$question){
					$effect = ($i%2 == 0)?"animated bounceInLeft":"animated bounceInRight";
					echo "<div class='form-group $effect'><h4> ".$question["text"]."</h4><div class='funkyradio'>";
					foreach($question["answers"] as $option){
						echo "<div class='funkyradio-primary'><input type='radio' name='".$question['id']."' value='".$option['id']."' id='".$question['id'].$option['id']."' />";
						echo "<label for='".$question['id'].$option['id']."'>".$option['text']."</label></div>";
					}
					echo "</div><div class='float-right' style='font-size: 0.8em'><a href='#' class='badge badge-secondary'>".explode(".", $question["source"])[0]."</a> ";
					echo "<a href='#' class='badge badge-light'>".explode(".", $question["source"])[2]."</a></div></div>";

				}
			?>
			<br><br><br>
			<button type="submit" class="btn btn-outline-primary btn-lg btn-block">Finalizar simulado</button>
		</form>
	</main>

	<br><br>

	<footer class="footer">
		<div class="container">
			<span class="text-muted">&copy; 2018 <a href="http://allexlima.com">Allex Lima</a> &middot; All rights reserved under <a href="LICENSE">MIT license</a>.</span>
		</div>
	</footer>
</body>
</html>
