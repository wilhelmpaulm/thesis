<?php

class Evidence_historiesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('evidence_histories')->truncate();

        $evidence_histories = array(
            [ "evidence_id" => 4, "type" => "Document", "date_held" => "2013-12-25", "date_released" => "2012-01-12", "holder" => "Wilhelm Paul", "location" => "1671 Pedro Gil", "details" => "it was torn to shreds after"],
        );

        // Uncomment the below to run the seeder
        DB::table('evidence_histories')->insert($evidence_histories);
    }

}
