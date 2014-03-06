<?php

class Cross_referencesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('cross_references')->truncate();

		$cross_references = array(

		);

		// Uncomment the below to run the seeder
		 DB::table('cross_references')->insert($cross_references);
	}

}
