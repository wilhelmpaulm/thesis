<?php

class Case_evidencesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('case_evidences')->truncate();

        $case_evidences = array(
            ["case_id" => 1, "type" => "Document", "evidence_id" => 1],
            ["case_id" => 2, "type" => "Document", "evidence_id" => 2],
            ["case_id" => 3, "type" => "Document", "evidence_id" => 3],
            ["case_id" => 4, "type" => "Picture", "evidence_id" => 1],
            ["case_id" => 5, "type" => "Object", "evidence_id" => 1],
            ["case_id" => 6, "type" => "Object", "evidence_id" => 6],
            ["case_id" => 7, "type" => "Document", "evidence_id" => 4],
            ["case_id" => 8, "type" => "Picture", "evidence_id" => 2],
            ["case_id" => 9, "type" => "Picture", "evidence_id" => 3],
            ["case_id" => 10, "type" => "Object", "evidence_id" => 3],
            ["case_id" => 11, "type" => "Document", "evidence_id" => 5],
            ["case_id" => 12, "type" => "Object", "evidence_id" => 4],
            ["case_id" => 13, "type" => "Picture", "evidence_id" => 4],
            ["case_id" => 14, "type" => "Document", "evidence_id" => 6],
            ["case_id" => 15, "type" => "Object", "evidence_id" => 5],
            ["case_id" => 16, "type" => "Picture", "evidence_id" => 5],
            ["case_id" => 17, "type" => "Picture", "evidence_id" => 6],
            ["case_id" => 18, "type" => "Picture", "evidence_id" => 7],
            ["case_id" => 19, "type" => "Document", "evidence_id" => 7],
            ["case_id" => 20, "type" => "Object", "evidence_id" => 6],
            ["case_id" => 21, "type" => "Document", "evidence_id" => 8],
            ["case_id" => 22, "type" => "Object", "evidence_id" => 7],
            ["case_id" => 23, "type" => "Picture", "evidence_id" => 8],
            ["case_id" => 24, "type" => "Picture", "evidence_id" => 9],
            ["case_id" => 25, "type" => "Picture", "evidence_id" => 10],
            ["case_id" => 26, "type" => "Document", "evidence_id" => 9],
            ["case_id" => 27, "type" => "Object", "evidence_id" => 8],
            ["case_id" => 28, "type" => "Picture", "evidence_id" => 11],
            ["case_id" => 29, "type" => "Picture", "evidence_id" => 12],
            ["case_id" => 30, "type" => "Document", "evidence_id" => 10],
            //evidence for recording
            ["case_id" => 1, "type" => "Recording", "evidence_id" => 1],
            ["case_id" => 2, "type" => "Recording", "evidence_id" => 2],
            ["case_id" => 3, "type" => "Recording", "evidence_id" => 3],
            ["case_id" => 4, "type" => "Recording", "evidence_id" => 4],
            ["case_id" => 5, "type" => "Recording", "evidence_id" => 5],
            ["case_id" => 6, "type" => "Recording", "evidence_id" => 6],
            ["case_id" => 7, "type" => "Recording", "evidence_id" => 7],
            ["case_id" => 8, "type" => "Recording", "evidence_id" => 8],
            ["case_id" => 9, "type" => "Recording", "evidence_id" => 9],
            ["case_id" => 10, "type" => "Recording", "evidence_id" => 10],
            //evidenct for videos
            ["case_id" => 11, "type" => "Video", "evidence_id" => 1],
            ["case_id" => 12, "type" => "Video", "evidence_id" => 2],
            ["case_id" => 13, "type" => "Video", "evidence_id" => 3],
            ["case_id" => 14, "type" => "Video", "evidence_id" => 4],
            ["case_id" => 15, "type" => "Video", "evidence_id" => 5],
            ["case_id" => 16, "type" => "Video", "evidence_id" => 6],
            ["case_id" => 17, "type" => "Video", "evidence_id" => 7],
            ["case_id" => 18, "type" => "Video", "evidence_id" => 8],
            ["case_id" => 19, "type" => "Video", "evidence_id" => 9],
            ["case_id" => 20, "type" => "Video", "evidence_id" => 10],
        );

        // Uncomment the below to run the seeder
        DB::table('case_evidences')->insert($case_evidences);
    }

}
