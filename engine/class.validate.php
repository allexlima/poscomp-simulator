<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('class.readdata.php');

$rd = new ReadData();

$gabarito = $rd->getResultsMatrix();

for($i=0;$i<$rd->getQuestionsQuantity();$i++){
	for($j=0;$j<5;$j++)
		echo $gabarito[$i][$j]." | ";
	echo "<br>";
}

?>
