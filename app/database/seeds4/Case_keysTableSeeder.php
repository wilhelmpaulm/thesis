<?php

class Case_keysTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('case_keys')->truncate();

		$case_keys = array(

		);

		// Uncomment the below to run the seeder
		 DB::table('case_keys')->insert($case_keys);
	}

}
