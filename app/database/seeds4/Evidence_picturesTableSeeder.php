<?php

class Evidence_picturesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('evidence_pictures')->truncate();

        $evidence_pictures = array(
            ["case_id" => 4, "details" => "Justin Bieber molesting me", "owner" => "Anne Curtis-Smith",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 8, "details" => "Found a dead body of teacher", "owner" => "Carlo Linganay",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 9, "details" => "Picture of the Korean gambling lord", "owner" => "NBI",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 13, "details" => "Blood stains in the crime scene", "owner" => "Gerald Garcia",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 16, "details" => "Picture of the serendra developers", "owner" => "Eddie Gutierrez",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 17, "details" => "Needle full of blood", "owner" => "James Kennedy",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 18, "details" => "Shirt full of blood", "owner" => "Harold Jonas",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 23, "details" => "Picture of the drunk driver", "owner" => "Kyrie Lim",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 24, "details" => "Opened box of foods", "owner" => "Teresita Ongsiako",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 25, "details" => "Spray paint and brush used by the suspect", "owner" => "Darwin Manginoo",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 28, "details" => "Don Mariano bus", "owner" => "Hansel Talum",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
            ["case_id" => 29, "details" => "Money involved in the case", "owner" => "Elsie Long",
                "date_taken" => "2013-03-10", "date_received" => "2013-05-01", "file_name" => "1.png"],
        );

        // Uncomment the below to run the seeder
        DB::table('evidence_pictures')->insert($evidence_pictures);
    }

}
