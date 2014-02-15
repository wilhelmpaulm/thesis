<?php

class Case_typesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('case_types')->truncate();

		$case_types = array(
                    ["type" => "Petty Theft"],
                    ["type" => "Prostitution"],
                    ["type" => "Vandalism"],
                    ["type" => "Drunk Driving"],
                    ["type" => "Domestic Violence"],
                    ["type" => "Murder"],
                    ["type" => "Possession of Dangerous Drugs For Sale"],
                    ["type" => "Robbery"],
                    ["type" => "Rape"],
                    ["type" => "Uncategorized"],
                    
		);

		// Uncomment the below to run the seeder
		 DB::table('case_types')->insert($case_types);
	}

}
