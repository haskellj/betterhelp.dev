<?php


class QuestionsTableSeeder extends Seeder {

	public function run()
	{
		$questions = [
			[ 	
				'type'				   => 'sex',
				'rank'				   => 1,
				'question' 			   => 'What is your gender?', 
				'multiple_answers' 	   => false 
			],
			[ 	
				'type'				   => 'relationship_status',
				'rank'				   => 2,
				'question' 			   => 'What is your relationship status?', 
				'multiple_answers' 	   => false 
			],
			[ 	
				'type'				   => 'countries',
				'rank'				   => 3,
				'question' 			   => 'Which countries have you visited?', 
				'multiple_answers' 	   => true 
			],
			[ 	
				'type'				   => 'sport',
				'rank'				   => 4,
				'question' 			   => 'What is your favorite sport?', 
				'multiple_answers' 	   => false 
			],
			[ 	
				'type'				   => 'languages',
				'rank'				   => 5,
				'question' 			   => 'Which programming languages do you know?', 
				'multiple_answers' 	   => true 
			]
		]; 

		foreach($questions as $question) {
			$insert = new Question;

			foreach($question as $key => $value) {
				$insert->$key = $value;
			}
			$insert->save();
		}

	}

}


