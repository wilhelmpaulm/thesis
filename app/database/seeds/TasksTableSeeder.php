<?php

class TasksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('tasks')->truncate();

		$tasks = array(

//			["id" => , "user_id" =>, "title" =>"", "body" =>"", "date_start" =>"", "date_end" =>""],

		);

		// Uncomment the below to run the seeder
		 DB::table('tasks')->insert($tasks);
	}

}
