<?php

class Case_observationsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('case_observations')->truncate();

		$case_observations = array(

		);

		// Uncomment the below to run the seeder
		 DB::table('case_observations')->insert($case_observations);
	}

}
