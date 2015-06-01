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
}



