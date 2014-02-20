<?php

class Case_victimsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('case_victims')->truncate();

        $case_victims = array(
            ["case_id" => 1, "client_id" => 6],
            ["case_id" => 1, "client_id" => 9],
            ["case_id" => 2, "client_id" => 4],
            ["case_id" => 3, "client_id" => 2],
            ["case_id" => 3, "client_id" => 1],
            ["case_id" => 4, "client_id" => 7],
            ["case_id" => 5, "client_id" => 8],
            ["case_id" => 5, "client_id" => 10],
        );

        // Uncomment the below to run the seeder
        DB::table('case_victims')->insert($case_victims);
    }

}
