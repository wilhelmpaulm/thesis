<?php

class AppointmentsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('appointments')->truncate();

		$appointments = array(

//			["case_id" => , "user_id" => , "title" =>"", "body" =>"", "date_start" =>"", "date_end" =>"" ],

		);

		// Uncomment the below to run the seeder
		 DB::table('appointments')->insert($appointments);
	}

}
