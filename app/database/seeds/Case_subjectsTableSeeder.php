<?php

class Case_subjectsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('case_subjects')->truncate();

        $case_subjects = array(
            ["case_id" => 1, "client_id" => 27],
            ["case_id" => 2, "client_id" => 28],
            ["case_id" => 3, "client_id" => 29],
            ["case_id" => 4, "client_id" => 30],
            ["case_id" => 5, "client_id" => 31],
            ["case_id" => 6, "client_id" => 32],
            ["case_id" => 7, "client_id" => 33],
            ["case_id" => 8, "client_id" => 34],
            ["case_id" => 9, "client_id" => 34],
            ["case_id" => 10, "client_id" => 36],
            ["case_id" => 11, "client_id" => 37],
            ["case_id" => 12, "client_id" => 38],
            ["case_id" => 13, "client_id" => 39],
            ["case_id" => 14, "client_id" => 40],
            ["case_id" => 15, "client_id" => 41],
            ["case_id" => 16, "client_id" => 42],
            ["case_id" => 17, "client_id" => 43],
            ["case_id" => 18, "client_id" => 44],
            ["case_id" => 19, "client_id" => 45],
            ["case_id" => 20, "client_id" => 46],
            ["case_id" => 21, "client_id" => 47],

            //instance where different case, same suspect
            ["case_id" => 22, "client_id" => 27],
            ["case_id" => 23, "client_id" => 28],
            ["case_id" => 24, "client_id" => 29],
            ["case_id" => 25, "client_id" => 30],
            ["case_id" => 26, "client_id" => 31],
            ["case_id" => 27, "client_id" => 32],
            ["case_id" => 28, "client_id" => 33],
            ["case_id" => 29, "client_id" => 34],
            ["case_id" => 30, "client_id" => 35],

        );

        // Uncomment the below to run the seeder
        DB::table('case_subjects')->insert($case_subjects);
    }

}
