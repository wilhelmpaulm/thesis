<?php

class User_languagesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('user_languages')->truncate();

		$user_languages = array(
                    ["user_id" => 10930216, "language"=> "English"],
                    ["user_id" => 10930216, "language"=> "Chinese"],
                    ["user_id" => 10930216, "language"=> "French"],
                    ["user_id" => 10930216, "language"=> "Filipino"],
                    ["user_id" => 10930216, "language"=> "Vietnamese"],
                    ["user_id" => 10930216, "language"=> "English"],
                    ["user_id" => 10930217, "language"=> "Filipino"],
                    ["user_id" => 10930217, "language"=> "Hungarian"],
                    ["user_id" => 10930217, "language"=> "Spanish"],
                    ["user_id" => 10930217, "language"=> "French"],
                    ["user_id" => 10930217, "language"=> "Thai"],
		);

		// Uncomment the below to run the seeder
		 DB::table('user_languages')->insert($user_languages);
	}

}
