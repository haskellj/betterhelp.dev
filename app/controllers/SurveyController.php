<?php

class SurveyController extends BaseController {


	public function postSurvey()
	{
		$questions = Question::all();

		foreach($questions as $question){
			$type = $question->type;
			$typeResults = Input::get($question->type);
					
			foreach($typeResults as $answer){
				$survey = new Survey;
				$survey->question_id = $question->id;
				$survey->answer = $answer;
				$survey->save();
			}
			
		}

		
		return Redirect::to('stats');
		
	}

}