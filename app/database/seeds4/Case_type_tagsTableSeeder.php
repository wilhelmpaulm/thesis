<?php

class Case_type_tagsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('case_type_tags')->truncate();

        $case_type_tags = array(
            ["case_id" => 1, "type" => "Petty Theft"],
            ["case_id" => 1, "type" => "Robbery"],
            ["case_id" => 2, "type" => "Rape"],
            ["case_id" => 3, "type" => "Uncategorized"],
            ["case_id" => 4, "type" => "Prostitution"],
            ["case_id" => 5, "type" => "Murder"],
        );

        // Uncomment the below to run the seeder
         DB::table('case_type_tags')->insert($case_type_tags);
    }

}
