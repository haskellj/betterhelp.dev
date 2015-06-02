<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showSurvey()
	{
		$questions = Question::all();
		$answers = Answer::with('question')->get();

		$data = [
			'questions' => $questions,
			'answers' 	=> $answers
		];

		return View::make('survey')->with($data);
	}

	public function showResults()
	{
		$questions = Question::all();
		$data = [];

		foreach($questions as $question){
			
			if($question->type != 'sex'){
				$mostCommonFemaleAnswer = Survey::select(array('answer', DB::raw('COUNT(*) `occurrence`')))
										->where('question_id','=', $question->id)
										->whereGender('Female')
										->groupBy('answer')
										->orderBy('occurrence', 'DESC')
										->first();
				
				$mostCommonMaleAnswer = Survey::select(array('answer', DB::raw('COUNT(*) `occurrence`')))
										->where('question_id','=', $question->id)
										->whereGender('Male')
										->groupBy('answer')
										->orderBy('occurrence', 'DESC')
										->first();
			

				$data["female$question->id"] = $mostCommonFemaleAnswer;
				$data["male$question->id"] = $mostCommonMaleAnswer;
			}
			
		}

		$data['questions'] = $questions;

		// var_dump($data);
		// dd();

		return View::make('results')->with($data);
	}

}
