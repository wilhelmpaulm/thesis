<?php

class Evidence_objectsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('evidence_objects')->truncate();

        $evidence_objects = array(
            ["case_id" => 5, "details" => "Bloody Bowie knife", "length" => "12 in.", "width" => "2 in.",
                "height" => "12 in.", "date_received" => "2013-05-01"],
        );

        // Uncomment the below to run the seeder
         DB::table('evidence_objects')->insert($evidence_objects);
    }

}
