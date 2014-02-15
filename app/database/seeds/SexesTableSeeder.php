<?php

class SexesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('sexes')->truncate();

		$sexes = array(
                    ["sex"=>"Male"],
                    ["sex"=>"Female"],
		);

		// Uncomment the below to run the seeder
		 DB::table('sexes')->insert($sexes);
	}

}
