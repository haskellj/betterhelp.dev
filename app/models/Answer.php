<?php


	class Answer extends BaseModel
	{
		protected $table = 'answers';


		// connects each answer to its question
		public function question()
		{	
			return $this->belongsTo('Question');
		}


	}


