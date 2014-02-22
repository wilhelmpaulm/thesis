<?php

class Appointment_recipientsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('appointment_recipients')->truncate();

		$appointment_recipients = array(

//			["case_id" => , "appointment_id" => , "user_id" => ],

		);

		// Uncomment the below to run the seeder
		 DB::table('appointment_recipients')->insert($appointment_recipients);
	}

}
