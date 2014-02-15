<?php

class KasesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('kases')->truncate();

        $kases = array(
            ["name" => "Theft at High School in Marikina", "agent_id" => 10930191, "complainant_id" => 5,
                "status" => "Pending", "date_assigned" => "", "date_reported" => "2014-02-12", 
                "details"=> "A chicken is the prime suspect for the robbery of 47 uncut diamonds"],
            ["name" => "Rape in BGC Condominium", "agent_id" => 10930194, "complainant_id" => 4,
                "status" => "Ongoing", "date_assigned" => "2014-02-12", "date_reported" => "2014-02-10", 
                "details"=> "A client is complaining that the suspect raped her althought the suspect says never in his life would he touch her ugly vajayjay"],
            ["name" => "Bulalo Outbreak in Pedro Gil", "agent_id" => 10930191, "complainant_id" => 3,
                "status" => "Non-viable", "date_assigned" => "", "date_reported" => "2014-02-12", 
                "details"=> "Crazy man turned internet sensation in the name of bulalo"],
            ["name" => "Prosti sa Malate", "agent_id" => 10930191, "complainant_id" => 7,
                "status" => "Closed_Unfinished", "date_assigned" => "2009-03-11", "date_reported" => "2009-03-09", 
                "details"=> "People dont know how to properly pronounce Frosty the snowman "],
            ["name" => "Babae sinaksak sa puso, patay", "agent_id" => 10930191, "complainant_id" => 8, 
                "status" => "Closed_Finished", "date_assigned" => "2013-04-23", "date_reported" => "2013-04-18", 
                "details"=> "Cupid strikes again, now his victim a teenage girl is dying of hearthache"],
        );

        // Uncomment the below to run the seeder
        DB::table('kases')->insert($kases);
    }

}
