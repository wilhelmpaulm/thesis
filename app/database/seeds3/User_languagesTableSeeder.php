<?php

class User_languagesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('user_languages')->truncate();

		$user_languages = array(
                    ["user_id" => 10930191, "language"=> "english"],
                    ["user_id" => 10930191, "language"=> "chinese"],
                    ["user_id" => 10930194, "language"=> "french"],
                    ["user_id" => 10930194, "language"=> "filipino"],
		);

		// Uncomment the below to run the seeder
		 DB::table('user_languages')->insert($user_languages);
	}

}
