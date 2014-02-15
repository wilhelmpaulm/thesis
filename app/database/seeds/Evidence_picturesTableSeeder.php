<?php

class Evidence_picturesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('evidence_pictures')->truncate();

        $evidence_pictures = array(
            ["case_id" => 4, "details" => "Justin Bieber molesting me", "owner" => "Anne Curtis-Smith", 
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01"],
        );

        // Uncomment the below to run the seeder
         DB::table('evidence_pictures')->insert($evidence_pictures);
    }

}
