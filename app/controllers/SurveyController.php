<?php

class SurveyController extends BaseController {


	public function postSurvey()
	{
		 
		$survey = new Survey;
		$survey->user_id = Auth::user()->user_id;
		$survey->title = Input::get('title');
		$survey->body = Input::get('body');
		$survey->slug = Input::get('title');	// will connect individual words in the title with hyphens for use as a url appendage
		$survey->save();

		
		return Redirect::action('SurveyController@showResults');
		
	}

	public function showResults()
	{
		// $questions = Question::all();
		// $answers = Answer::with('question')->get();

		// $data = [
		// 	'questions' => $questions,
		// 	'answers' 	=> $answers
		// ];

		return View::make('results');
	}

}