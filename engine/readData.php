<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

class readData{

	private $json;
	private $exam;
	private $resultsMatrix;

	function __construct($address="../data.json"){
		$this->setData($address);
		$thos->setExamInit();
	}

	private function setData($json_address){
		/*
		** This method loads the json file and decode it
		** this json file must have the exam's questions
		*/
		$file = file_get_contents($json_address);
		$this->json = json_decode($file, True);
	}

	private function setExamInit(){
		/*
		** This method sort the questions and mount the results matrix
		** the json sorted object is storaged in $this->exam and
		** the results matrix ("gabarito") in $this->$resultsMatrix
		*/
		$questions = $this->json["questions"];
		$gabarito = array();

		foreach ($questions as $i=>$question) {
			if($this->json["shuffle"])
				shuffle($question["answers"]);

			foreach ($question["answers"] as $j=>$option){
				$gabarito[$i][$j] = $option["status"]?1:0;
		}

		$this->exam = $questions;
		$this->$resultsMatrix = $gabarito;
	}

	public function getCorrectAnswer($question){
		/*
		** Find the correct question's answer with 'status' == true,
		** in json data file and return the answer object
		*/
		foreach ($question["answers"] as $option){
			if($option["status"])
				return $option;
		}
	}

	public function getExam(){
		return $this->exam;
	}

	public function getResultsMatrix(){
		return $this->resultsMatrix;
	}

}

?>
