<?php

class Evidence_recordingsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('evidence_recordings')->truncate();

		$evidence_recordings = array(

			["id" => 1, "case_id" => 1, "details" => "Voice record of a man calling.", "owner" => "Eloisa Lucban", "date_recorded" => "2013-12-20", "date_received" => "2014-02-16", "file_name" => "1.mp3"],
			["id" => 2, "case_id" => 2, "details" => "Voice record of the suspect inside the condominium", "owner" => "Elmer Reyes", "date_recorded" => "2014-01-01", "date_received" => "2014-02-10", "file_name" => "1.mp3"],
			["id" => 3, "case_id" => 3, "details" => "Voice record of two guys fighting over a bulalo", "owner" => "Rene Casimiro", "date_recorded" => "2013-12-10", "date_received" => "2014-02-13", "file_name" => "1.mp3"],
			["id" => 4, "case_id" => 4, "details" => "Voice record of the a girl talking to a man", "owner" => "Lita Solis", "date_recorded" => "2009-02-12", "date_received" => "2009-04-09", "file_name" => "1.mp3"],
			["id" => 5, "case_id" => 5, "details" => "Voice record of the a boy crying", "owner" => "Joselito CUevas", "date_recorded" => "2013-03-22", "date_received" => "2013-05-11", "file_name" => "1.mp3"],
			["id" => 6, "case_id" => 6, "details" => "Voice record of a gun", "owner" => "Ashley Pamintuan", "date_recorded" => "2012-12-29", "date_received" => "2013-03-22", "file_name" => "1.mp3"],
			["id" => 7, "case_id" => 7, "details" => "Voice record of a lady walking", "owner" => "James Ramos", "date_recorded" => "2013-01-20", "date_received" => "2013-02-01", "file_name" => "1.mp3"],
			["id" => 8, "case_id" => 8, "details" => "Voice record of a skidding car", "owner" => "Karla Fuentes", "date_recorded" => "2012-12-20", "date_received" => "2013-05-22", "file_name" => "1.mp3"],
			["id" => 9, "case_id" => 9, "details" => "Voice record of a korean fighting with the police", "owner" => "Ramon Baustista", "date_recorded" => "2013-01-13", "date_received" => "2013-07-01", "file_name" => "1.mp3"],
			["id" => 10, "case_id" => 10, "details" => "Voice record of a lady calling for help", "owner" => "Piolo Navarro", "date_recorded" => "2012-11-12", "date_received" => "2013-05-22", "file_name" => "1.mp3"],

		);

		// Uncomment the below to run the seeder
		 DB::table('evidence_recordings')->insert($evidence_recordings);
	}

}
