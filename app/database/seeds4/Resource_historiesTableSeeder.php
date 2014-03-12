<?php

class Resource_historiesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('resource_histories')->truncate();

		$resource_histories = array(

//			["resource_id" => 14, "user_id" => 10930191 , "amount" =>"1", "status" =>"Approved", "date_requested" =>"2014-02-24", "date_approved" =>"2014-02-21", "date_due" =>"2014-02-27", "date_issued" =>"", "date_returned" =>""],

		);

		// Uncomment the below to run the seeder
		 DB::table('resource_histories')->insert($resource_histories);
	}

}
