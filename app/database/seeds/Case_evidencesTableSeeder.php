<?php

class Case_evidencesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('case_evidences')->truncate();

        $case_evidences = array(
            ["case_id" => 1, "type" => "Document", "evidence_id" => 1],
            ["case_id" => 1, "type" => "Document", "evidence_id" => 2],
            ["case_id" => 1, "type" => "Document", "evidence_id" => 3],
//            ["case_id" => 1, "type" => "Picture", "evidence_id" => 1],
//            ["case_id" => 1, "type" => "Object", "evidence_id" => 1],
        );

        // Uncomment the below to run the seeder
         DB::table('case_evidences')->insert($case_evidences);
    }

}
