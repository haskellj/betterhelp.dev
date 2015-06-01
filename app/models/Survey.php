<?php


	class Survey extends BaseModel
	{
		protected $table = 'surveys';


		// connects each question to its survey
		public function question()
		{	
			return $this->belongsTo('Question');
		}

	}


