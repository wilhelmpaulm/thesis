<?php

class Case_requirementsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('case_requirements')->truncate();

		$case_requirements = array(

		);

		// Uncomment the below to run the seeder
		 DB::table('case_requirements')->insert($case_requirements);
	}

}
