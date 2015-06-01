<?php


class QuestionsTableSeeder extends Seeder {

	public function run()
	{
		$questions = [
			[ 	
				'type'				   => 'sex',
				'question' 			   => 'What is your gender?', 
				'multiple_answers' 	   => false 
			],
			[ 	
				'type'				   => 'relationship_status',
				'question' 			   => 'What is your relationship status?', 
				'multiple_answers' 	   => false 
			],
			[ 	
				'type'				   => 'countries',
				'question' 			   => 'Which countries have you visited?', 
				'multiple_answers' 	   => true 
			],
			[ 	
				'type'				   => 'sport',
				'question' 			   => 'What is your favorite sport?', 
				'multiple_answers' 	   => false 
			],
			[ 	
				'type'				   => 'languages',
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


