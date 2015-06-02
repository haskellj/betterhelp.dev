<?php

class SurveyController extends BaseController {


	public function postSurvey()
	{
		$questions = Question::all();

		foreach($questions as $question){
			$type = $question->type;
			$gender = Input::get('sex');

			if($type != 'sex'){
				$typeResults = Input::get($type);

				foreach($typeResults as $answer){
					$survey = new Survey;
					$survey->gender = $gender[0];
					$survey->question_id = $question->id; 
					$survey->answer = $answer;
					$survey->save();
				}
			}
		}
		
		return Redirect::to('stats');
	}

}