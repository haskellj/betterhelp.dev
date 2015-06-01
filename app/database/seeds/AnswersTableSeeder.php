<?php


class AnswersTableSeeder extends Seeder {

	public function run()
	{
		$answers = [
			[ 	'question_id' 		   => 1, 
				'answer' 	   		   => 'Male' 
			],
			[ 	'question_id' 		   => 1, 
				'answer' 	   		   => 'Female' 
			],
			[ 	'question_id' 		   => 2, 
				'answer' 	   		   => 'Married' 
			],
			[ 	'question_id' 		   => 2, 
				'answer' 	   		   => 'Single' 
			],
			[ 	'question_id' 		   => 2, 
				'answer' 	   		   => 'Divorced' 
			],
			[ 	'question_id' 		   => 2, 
				'answer' 	   		   => 'Widowed' 
			],
			[ 	'question_id' 		   => 2, 
				'answer' 	   		   => 'Separated' 
			],
			[ 	'question_id' 		   => 2, 
				'answer' 	   		   => 'In a relationship' 
			],
			[ 	'question_id' 		   => 3, 
				'answer' 	   		   => 'Canada' 
			],
			[ 	'question_id' 		   => 3, 
				'answer' 	   		   => 'Italy' 
			],
			[ 	'question_id' 		   => 3, 
				'answer' 	   		   => 'Australia' 
			],
			[ 	'question_id' 		   => 3, 
				'answer' 	   		   => 'Hong Kong' 
			],
			[ 	'question_id' 		   => 3, 
				'answer' 	   		   => 'Russia' 
			],
			[ 	'question_id' 		   => 3, 
				'answer' 	   		   => 'Belgium' 
			],
			[ 	'question_id' 		   => 4, 
				'answer' 	   		   => 'Football' 
			],
			[ 	'question_id' 		   => 4, 
				'answer' 	   		   => 'Basketball' 
			],
			[ 	'question_id' 		   => 4, 
				'answer' 	   		   => 'Baseball' 
			],
			[ 	'question_id' 		   => 4, 
				'answer' 	   		   => 'Hockey' 
			],
			[ 	'question_id' 		   => 4, 
				'answer' 	   		   => 'None' 
			],
			[ 	'question_id' 		   => 5, 
				'answer' 	   		   => 'PHP' 
			],
			[ 	'question_id' 		   => 5, 
				'answer' 	   		   => 'Ruby' 
			],
			[ 	'question_id' 		   => 5, 
				'answer' 	   		   => 'Python' 
			],
			[ 	'question_id' 		   => 5, 
				'answer' 	   		   => 'JavaScript' 
			]
		]; 

		foreach($answers as $answer) {
			$insert = new Answer;

			foreach($answer as $key => $value) {
				$insert->$key = $value;
			}
			$insert->save();
		}

	}

}
