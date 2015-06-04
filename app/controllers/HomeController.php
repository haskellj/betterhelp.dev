<?php

class HomeController extends BaseController {


	public function showSurvey()
	{
		$questions = Question::orderBy('rank', 'ASC')->get();
		$answers = Answer::with('question')->get();

		$data = [
			'questions' => $questions,
			'answers' 	=> $answers
		];

		return View::make('survey')->with($data);
	}

	public function showResults()
	{
		$data = Question::surveyResults();

		return View::make('results')->with($data);
	}

}
