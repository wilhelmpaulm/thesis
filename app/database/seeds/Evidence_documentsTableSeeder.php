<?php

class Evidence_documentsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('evidence_documents')->truncate();

        $evidence_documents = array(
            ["case_id" => 1, "details" => "Testimony from Kathryn Bernardo", "owner" => "NBI",
                "title" => "Theft in Marikina High School", "date_received" => "2014-02-12", "file_name" => "1.doc"],
            ["case_id" => 2, "details" => "Medico Legal obtained from MMC", "owner" => "Vhong Navarro",
                "title" => "Medico Legal", "date_received" => "2014-02-14", "file_name" => "1.doc"],
            ["case_id" => 3, "details" => "Testimony from Jessica Soho (Witness)", "owner" => "Noynoy Aquino",
                "title" => "Lalaking naghahanap ng bulalo soup sa panaderya", "date_received" => "2014-02-12", "file_name" => "1.doc"],
            ["case_id" => 7, "details" => "Copy of Birth certificate from Kathryn Lim", "owner" => "Kathryn Lim",
                "title" => "Birth certificate of Kathryn Lim", "date_received" => "2013-06-29", "file_name" => "1.doc"],
            ["case_id" => 11, "details" => "Old warrant of arrest against the suspect", "owner" => "SPO1. Johnny tanh(arg)",
                "title" => "Old warrant of arrest", "date_received" => "2013-10-11", "file_name" => "1.doc"],
            ["case_id" => 14, "details" => "Statement of affidavit obtained from the witness", "owner" => "Agent Enrico Bautista",
                "title" => "Statement of affidavit obtained", "date_received" => "2013-10-12", "file_name" => "1.doc"], 
            ["case_id" => 19, "details" => "Love letter coming from the suspect girlfriend", "owner" => "Janine Soshi",
                "title" => "Love letter from girlfriend", "date_received" => "2013-12-11", "file_name" => "1.doc"],
            ["case_id" => 21, "details" => "Testimony of the main witness of the case", "owner" => "Boy Abunda",
                "title" => "Testimony from witness ", "date_received" => "2014-12-25", "file_name" => "1.doc"],
            ["case_id" => 26, "details" => "Medico Legal obtained from St. Lukes", "owner" => "Guiano Ampatuan",
                "title" => "Medico Legal on Filipina victim", "date_received" => "2014-02-01", "file_name" => "1.doc"],                                       
            ["case_id" => 30, "details" => "Legal documents supporting the case of Maguindanao massacre", "owner" => "Mark Binay",
                "title" => "Legal documents in Makati case", "date_received" => "2013-12-17", "file_name" => "1.doc"],
            
            


        );

        // Uncomment the below to run the seeder
         DB::table('evidence_documents')->insert($evidence_documents);
    }

}
