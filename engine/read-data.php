<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class readData{

	private $address;
	private $json;

	function __construct($address="../data.json"){
		$this->address = $address;
	}

	public function checkShuffle(){
		return $this->json["shuffle"]?True:False;
	}

	public function readFile(){
		$file = file_get_contents($this->address);
		$this->json = json_decode($file, True);
		return $this->json;
	}

	public function mountExam(){

	}

}

$test = new readData();
$a = $test->readFile();

// linhas são questões; cada coluna é uma resposta

$me = array(
	array(0, 0, 0, 1, 0),
	array(0, 0, 1, 0, 0),
	array(0, 1, 0, 0, 0),
);


// for($i=0; $i<3; $i++){
// 	for($j=0;$j<5;$j++){
// 		echo $me[$i][$j]." | ";
// 	}
// 	echo "<br>";
// }
//


$json = $a["exam"];

foreach ($json as $key=>$questions) {
	echo ($key+1).". ".$questions["question"];
	echo "<br>";
	if($test->checkShuffle())
		shuffle($questions["answers"]);
	foreach ($questions["answers"] as $answers) {
		echo "<input type='radio' name='".$questions["id"]."' value='".$answers["label"]."' ".($answers["result"]?"checked='true'":"")." disabled/> ";
		echo $answers["option"];
		// echo "(".($answers["result"]?"x":"&nbsp;&nbsp;").") ".$answers["option"];
		echo "<br>";
	}
	echo "<br>";
}



// $jsonIterator = new RecursiveIteratorIterator(
// 	new RecursiveArrayIterator($a["exam"]),
//     RecursiveIteratorIterator::SELF_FIRST);
//
// foreach ($jsonIterator as $key => $val){
// 	if($key == "answers"){
// 		echo "$key => $val";
// 		echo "<br>";
// 	}
// }


?>
