<?php

class Evidence_recordingsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('evidence_recordings')->truncate();

        $evidence_recordings = array(
            ["user_id" => 10930216, "case_id" => 7, "details" => "Raymond Cadang's suicide message saying he's tired of his life, can't maintain his scholarship and he doesn't want to add to his parents' financial problems.", "owner" => "Raymond Cadang",
                "date_recorded" => "2012-12-20", "date_received" => "2013-02-10", "file_name" => "1.mp3"],
            ["user_id" => 10930216, "case_id" => 83, "details" => "Actual voice record of the victim asking for help", "owner" => "Natasha Ocampo", "date_recorded" => "2008-10-11", "date_received" => "2008-11-05",
                "file_name" => "2.mp3"],
            ["user_id" => 10930216, "case_id" => 84, "details" => "Voice record of the suspect in the Grave Scandal case", "owner" => "Katherine Pascual", "date_recorded" => "2010-10-12", "date_received" => "2010-11-03",
                "file_name" => "3.mp3"],
            ["user_id" => 10930216, "case_id" => 86, "details" => "Voice record of the victime punched by the subject", "owner" => "Mia Serra", "date_recorded" => "2011-10-14", "date_received" => "2011-11-05",
                "file_name" => "4.mp3"],
            ["user_id" => 10930216, "case_id" => 89, "details" => "Voice record of the subject talking to an old man", "owner" => "Judith Pasay", "date_recorded" => "2011-10-18", "date_received" => "2011-11-09",
                "file_name" => "5.mp3"],
            ["user_id" => 10930216, "case_id" => 92, "details" => "Voice record of the subject telling the top secret to a person", "owner" => "Jesebel Osmena", "date_recorded" => "2011-12-04", "date_received" => "2011-11-20",
                "file_name" => "6.mp3"],
            //6
            ["user_id" => 10930216, "case_id" => 98, "details" => "Voice record of Janet Lim Napoles talking to a man", "owner" => "Janet Lim Napoes", "date_recorded" => "2013-12-13", "date_received" => "2013-11-19",
                "file_name" => "7.mp3"],
            ["user_id" => 10930216, "case_id" => 98, "details" => "Phone call voice record by Janet Lim Napoles", "owner" => "", "date_recorded" => "2013-12-13", "date_received" => "2013-11-19",
                "file_name" => "8.mp3"],
            ["user_id" => 10930216, "case_id" => 105, "details" => "Voice record of Algeirn Cupido", "owner" => "Algeirn Cupido", "date_recorded" => "2011-05-07", "date_received" => "2011-05-08",
                "file_name" => "9.mp3"],
            ["user_id" => 10930216, "case_id" => 112, "details" => "Voice record of Samuel Aglipay talking to his wife", "owner" => "Samuel Aglipay", "date_recorded" => "2010-02-01", "date_received" => "2010-02-03",
                "file_name" => "10.mp3"],
            ["user_id" => 10930216, "case_id" => 115, "details" => "Daniel Bercasio voice record in the phone oh his girlfriend", "owner" => "Daniel Bercasio", "date_recorded" => "2011-02-09", "date_received" => "2011-02-11",
                "file_name" => "11.mp3"],
            ["user_id" => 10930216, "case_id" => 127, "details" => "Voice record of Rosanne Fuentes talking to a man", "owner" => "Rosanne Fuentes", "date_recorded" => "2012-10-12", "date_received" => "2012-10-19",
                "file_name" => "12.mp3"],
            ["user_id" => 10930216, "case_id" => 130, "details" => "Voice record of Lovely Bueno and Leslie Antonio planning to forge a signature", "owner" => "Lovely Bueno", "date_recorded" => "2013-10-26", "date_received" => "2013-11-05",
                "file_name" => "13.mp3"],
        );

        // Uncomment the below to run the seeder
        DB::table('evidence_recordings')->insert($evidence_recordings);
    }

}
