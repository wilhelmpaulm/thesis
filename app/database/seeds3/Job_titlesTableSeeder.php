<?php

class Job_titlesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('job_titles')->truncate();

		$job_titles = array(
                    ["name"=>"Secretary"],
                    ["name"=>"Agent"],
                    ["name"=>"Chief"],
                    ["name"=>"Executive Officer"],
                    ["name"=>"Deputy Director"],
		);

		// Uncomment the below to run the seeder
		 DB::table('job_titles')->insert($job_titles);
	}

}
