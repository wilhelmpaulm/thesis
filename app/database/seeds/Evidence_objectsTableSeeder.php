<?php

class Evidence_objectsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('evidence_objects')->truncate();

        $evidence_objects = array(
            ["case_id" => 5, "details" => "Bloody Bowie knife", "length" => "12 in.", "width" => "2 in.",
                "height" => "12 in.", "date_received" => "2013-05-01"],
            ["case_id" => 6, "details" => "Silver Gun", "length" => "10 in.", "width" => "3 in.",
                "height" => "4 in.", "date_received" => "2013-07-22"], 
            ["case_id" => 10, "details" => "Ice Pick", "length" => "5 in.", "width" => "2 in.",
                "height" => "6in.", "date_received" => "2013-09-23"], 
            ["case_id" => 12, "details" => "Gold Gun", "length" => "10 in.", "width" => "3 in.",
                "height" => "", "date_received" => "2013-10-11"], 
            ["case_id" => 15, "details" => "Baby Armalite", "length" => "", "width" => "",
                "height" => "4 in.", "date_received" => "2013-11-02"], 
            ["case_id" => 20, "details" => "Sniper", "length" => "22 in.", "width" => "5 in.",
                "height" => "18 in.", "date_received" => "2013-12-01"], 
            ["case_id" => 22, "details" => "Bullet", "length" => "22 in.", "width" => "1 in.",
                "height" => "2 in.", "date_received" => "2013-12-07"],
            ["case_id" => 27, "details" => "Bra and Panty of suspect", "length" => "20 in.", "width" => "5 in.",
                "height" => "7 in.", "date_received" => "2014-02-01"],                            
        );

        // Uncomment the below to run the seeder
         DB::table('evidence_objects')->insert($evidence_objects);
    }

}
