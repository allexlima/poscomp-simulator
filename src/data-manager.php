<?php

class DataManager{

	private $json;
	private $exam;
	private $resultsMatrix;

	function __construct($address="../data.json"){
		$this->setData($address);
		$this->setExamInit();
	}

	private function setData($jsonAddress){
		/*
		** This method loads the json file and decode it
		** this json file must have the exam's questions
		*/
		$file = file_get_contents($jsonAddress);
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
		$n_questions = array();

		foreach ($questions as $i=>$question) {

			if($this->json["shuffle"])
				shuffle($question["answers"]);

			foreach ($question["answers"] as $j=>$option)
				$gabarito[$i][$j] = $option["status"]?1:0;

			$n_questions[] = $question;
		}

		$this->exam = $n_questions;
		$this->resultsMatrix = $gabarito;
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

	public function getExamHeader($attr){
		return array(
			'name' => $this->json["name"],
			'prof' => $this->json["prof"],
			'details' => $this->json["details"],
			'max-grade' => $this->json["max-grade"]
		)[$attr];
	}

	public function getResultsMatrix(){
		return $this->resultsMatrix;
	}

	public function getQuestionsQuantity(){
		return count($this->exam);
	}

}

?>
