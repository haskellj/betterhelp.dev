<?php


class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// delete pre-existing versions of tables in the opposite order they
		// were seeded in, to avoid foreign key conflict errors
		DB::table('answers')->delete();
		DB::table('questions')->delete();

		Eloquent::unguard();

		$this->call('QuestionsTableSeeder');
		$this->call('AnswersTableSeeder');
	}

}
