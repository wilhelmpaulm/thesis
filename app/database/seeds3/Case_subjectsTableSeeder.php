<?php

class Case_subjectsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('case_subjects')->truncate();

        $case_subjects = array(
            ["case_id" => 1, "client_id" => 12],
            ["case_id" => 2, "client_id" => 11],
            ["case_id" => 3, "client_id" => 13],
            ["case_id" => 4, "client_id" => 11],
            ["case_id" => 5, "client_id" => 13],
        );

        // Uncomment the below to run the seeder
        DB::table('case_subjects')->insert($case_subjects);
    }

}
