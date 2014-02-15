<?php

class Evidence_documentsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('evidence_documents')->truncate();

        $evidence_documents = array(
            ["case_id" => 1, "details" => "Testimony from Kathryn Bernardo", "owner" => "NBI",
                "title" => "Theft in Marikina High School", "date_received" => "2014-02-12"],
            ["case_id" => 2, "details" => "Medico Legal obtained from MMC", "owner" => "Vhong Navarro",
                "title" => "Medico Legal", "date_received" => "2014-02-14"],
            ["case_id" => 3, "details" => "Testimony from Jessica Soho (Witness)", "owner" => "Noynoy Aquino",
                "title" => "Lalaking naghahanap ng bulalo soup sa panaderya", "date_received" => "2014-02-12"],
        );

        // Uncomment the below to run the seeder
         DB::table('evidence_documents')->insert($evidence_documents);
    }

}
