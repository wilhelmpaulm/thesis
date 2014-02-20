<?php

class Case_victimsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('case_victims')->truncate();

        $case_victims = array(
            ["case_id" => 1, "client_id" => 1],
            ["case_id" => 2, "client_id" => 2],
            ["case_id" => 3, "client_id" => 3],
            ["case_id" => 4, "client_id" => 4],
            ["case_id" => 5, "client_id" => 5],
            ["case_id" => 6, "client_id" => 6],
            ["case_id" => 7, "client_id" => 7],
            ["case_id" => 8, "client_id" => 8],
            ["case_id" => 9, "client_id" => 9],
            ["case_id" => 10, "client_id" => 10],
            ["case_id" => 11, "client_id" => 11],
            ["case_id" => 12, "client_id" => 12],
            ["case_id" => 13, "client_id" => 13],
            ["case_id" => 14, "client_id" => 14],
            ["case_id" => 15, "client_id" => 15],
            ["case_id" => 16, "client_id" => 16],
            ["case_id" => 17, "client_id" => 17],
            ["case_id" => 18, "client_id" => 18],
            ["case_id" => 19, "client_id" => 19],
            ["case_id" => 20, "client_id" => 20],

            //instance where, different case same victim/complainant
            ["case_id" => 21, "client_id" => 2],
            ["case_id" => 22, "client_id" => 4],
            ["case_id" => 23, "client_id" => 6],
            ["case_id" => 24, "client_id" => 8],
            ["case_id" => 25, "client_id" => 10],
            ["case_id" => 26, "client_id" => 11],
            ["case_id" => 27, "client_id" => 13],
            ["case_id" => 28, "client_id" => 15],
            ["case_id" => 29, "client_id" => 17],
            ["case_id" => 30, "client_id" => 19],





        );

        // Uncomment the below to run the seeder
        DB::table('case_victims')->insert($case_victims);
    }

}
