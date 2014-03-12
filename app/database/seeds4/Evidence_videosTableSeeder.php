<?php

class Evidence_videosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('evidence_videos')->truncate();

		$evidence_videos = array(

			["id" => 1, "case_id" => 11, "details" => "Video footage of an American in Zamboanga", "owner" => "Tony Romas", "date_recorded" => "2013-01-22", "date_received" => "2013-04-01" ,"file_name" => "1.mp4"],
			["id" => 2, "case_id" => 12, "details" => "Video footage of a robbery gang in Manila", "owner" => "Daniel Sikat", "date_recorded" => "2013-02-11", "date_received" => "2013-04-11" ,"file_name" => "1.mp4"],
			["id" => 3, "case_id" => 13, "details" => "Video footage of shootout in Cotabato", "owner" => "Hazel Lalim", "date_recorded" => "2012-12-22", "date_received" => "2013-05-17","file_name" => "1.mp4"],
			["id" => 4, "case_id" => 14, "details" => "Video footage of the suspect selling marijuana on street", "owner" => "Wendell Gusi", "date_recorded" => "2013-01-30", "date_received" => "2013-05-28","file_name" => "1.mp4"],
			["id" => 5, "case_id" => 15, "details" => "Video footage of the actual NBI operation in the site", "owner" => "Pamela Ortize", "date_recorded" => "2013-02-12", "date_received" => "2013-07-11","file_name" => "1.mp4"],
			["id" => 6, "case_id" => 16, "details" => "Video footage of the developers entering a building", "owner" => "Larry Jones", "date_recorded" => "2013-03-11", "date_received" => "2013-08-20","file_name" => "1.mp4"],
			["id" => 7, "case_id" => 17, "details" => "Video footage of the actual crime scene", "owner" => "Inigo Joson", "date_recorded" => "2013-04-01", "date_received" => "2013-08-22","file_name" => "1.mp4"],
			["id" => 8, "case_id" => 18, "details" => "Video footage of the drug dealers transaction", "owner" => "Carlo De Mesa", "date_recorded" => "2013-04-24", "date_received" => "2013-09-15","file_name" => "1.mp4"],
			["id" => 9, "case_id" => 19, "details" => "Video footage of an Arabian national entering a hotel", "owner" => "Darlene Asenci", "date_recorded" => "2013-05-11", "date_received" => "2013-09-24","file_name" => "1.mp4"],
			["id" => 10, "case_id" => 20, "details" => "Video footage of the gun used in the crime", "owner" => "Jas Santiago", "date_recorded" => "2013-05-12", "date_received" => "2013-10-11","file_name" => "1.mp4"],


		);

		// Uncomment the below to run the seeder
		 DB::table('evidence_videos')->insert($evidence_videos);
	}

}
