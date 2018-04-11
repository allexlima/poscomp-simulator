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
	<link type="text/css" rel="stylesheet" href="plugins/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="static/littlethings.css">
	<link type="text/css" rel="stylesheet" href="static/funky_radio.css">
	<script src="plugins/components/jquery/jquery.min.js"></script>
	<script src="plugins/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
	<script src="plugins/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark mb-5">
		<a class="navbar-brand" href="#">
	      <img src="static/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
	      <?php echo $rd->getExamHeader('name'); ?>
	    </a>
		<ul id="aboutTop" class="nav justify-content-end">
		  <li class="nav-item">By <b><?php echo $rd->getExamHeader('prof'); ?></b></li> |
		  <li class="nav-item"><b><?php echo $rd->getQuestionsQuantity(); ?></b> questions</li>
			<li class="nav-item"></li>
			<li class="nav-item"><a class="github-button" href="https://github.com/allexlima" aria-label="Follow @allexlima on GitHub">Follow @allexlima</a></li>
		</ul>
	</nav>

	<main role="main" class="container">

		<form>
			<?php

				$exam = $rd->getExam();
				foreach($exam as $question){
					echo "<h4> ".$question["text"]."</h4>\n<div class='funkyradio'>\n";
					foreach($question["answers"] as $option){
						echo "<div class='funkyradio-primary'>";
						echo "<input type='radio' name='q".$question['id']."' value='".$option['id']."' id='q".$question['id'].$option['id']."' />";
						echo "<label for='q".$question['id'].$option['id']."'>".$option['text']."</label>";
						echo "</div>";
					}
					echo "</div><div class='float-right' style='font-size: 0.8em'>";
					echo "<a href='#' class='badge badge-secondary'>".explode(".", $question["source"])[0]."</a> ";
					echo "<a href='#' class='badge badge-light'>".explode(".", $question["source"])[2]."</a> ";
					echo "</div></div>";
				}
			?>
			<br><br><br>
			<button type="button" class="btn btn-outline-primary btn-lg btn-block">Finalizar simulado</button>
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
