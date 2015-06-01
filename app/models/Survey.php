<?php


	class Survey extends BaseModel
	{
		protected $table = 'surveys';


		// connects each survey to its question
		public function question()
		{	
			return $this->belongsTo('Question');
		}

	}


