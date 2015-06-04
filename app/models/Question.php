<?php


class Question extends BaseModel {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'questions';	//not necessary because Laravel knows based on the class name, but it doesn't hurt anything



	// Define the relationship between a question and its answers
	public function answers()
	{
		// connects each question to its answers
		return $this->hasMany('Answer');
	}

	// Define the relationship between a survey and its questions
	public function surveys()
	{
		// connects each survey to its questions
		return $this->hasMany('Survey');
	}

	public static function surveyResults()
	{
		$questions = Question::all();

		$data = [
			'male'   => [],
			'female' => []
		];

		foreach($questions as $question){
			
			if($question->type != 'sex'){
				
				$mostCommonFemaleAnswer = Survey::select(array('answer', DB::raw('COUNT(*) `occurrence`')))
												->where('question_id','=', $question->id)
												->whereGender('Female')
												->groupBy('answer')
												->orderBy('occurrence', 'DESC')
												->first();
				
				$mostCommonMaleAnswer =   Survey::select(array('answer', DB::raw('COUNT(*) `occurrence`')))
												->where('question_id','=', $question->id)
												->whereGender('Male')
												->groupBy('answer')
												->orderBy('occurrence', 'DESC')
												->first();
			

				$data["female"][$question->id] = $mostCommonFemaleAnswer;
				$data["male"][$question->id] = $mostCommonMaleAnswer;
			}
			
		}

		$data['questions'] = $questions;

		return $data;
	}
}



