<?php

class Evidence_typesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('evidence_types')->truncate();

		$evidence_types = array(
                    ["type" => "Audio"],
                    ["type" => "Video"],
                    ["type" => "Document"],
                    ["type" => "Picture"],
                    ["type" => "Object"],
                    ["type" => "Testimony"],   
		);

		// Uncomment the below to run the seeder
		 DB::table('evidence_types')->insert($evidence_types);
	}

}
