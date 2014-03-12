<?php

class KasesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('kases')->truncate();

        $kases = array(
            ["name" => "Theft at High School in Marikina", "agent_id" => 10930191, "complainant_id" => 5,
                "status" => "Pending", "date_assigned" => "2014-01-25", "date_reported" => "2014-02-12" , "division" => "FLD"],
            ["name" => "Rape in BGC Condominium", "agent_id" => 10930191, "complainant_id" => 4,
                "status" => "Ongoing", "date_assigned" => "2014-02-12", "date_reported" => "2014-02-10", "division" => "FLD"],
            ["name" => "Bulalo Outbreak in Pedro Gil", "agent_id" => 10930191, "complainant_id" => 3,
                "status" => "Non-viable", "date_assigned" => "2013-12-22", "date_reported" => "2014-02-12", "division" => "FLD"],
            ["name" => "Prosti sa Malate", "agent_id" => 10930191, "complainant_id" => 7,
                "status" => "Closed_Unfinished", "date_assigned" => "2009-03-11", "date_reported" => "2009-03-09", "division" => "FLD"],
            ["name" => "Babae sinaksak sa puso, patay", "agent_id" => 10930191, "complainant_id" => 8,
                "status" => "Closed_Finished", "date_assigned" => "2013-04-23", "date_reported" => "2013-04-18", "division" => "FLD"],
            ["name" => "3 tulak utas sa shootout sa Surigao", "agent_id" => 10930111, "complainant_id" => 1,
                "status" => "Closed_Finished", "date_assigned" => "2013-01-15", "date_reported" => "2013-01-02", "division" => "FLD"],
            ["name" => "Sleepwalker utas nang tumalon sa 2nd floor ng bahay", "agent_id" => 10930113, "complainant_id" => 3,
                "status" => "Closed_Finished", "date_assigned" => "2013-01-26", "date_reported" => "2013-01-11", "division" => "FLD"],
            ["name" => "Guro patay sa tumilapong SUV sa Zambo", "agent_id" => 10930115, "complainant_id" => 2,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-02-07", "date_reported" => "2013-01-29", "division" => "FLD"],
            ["name" => "10 Koreano tiklo sa illegan gambling site", "agent_id" => 10930117, "complainant_id" => 5,
                "status" => "Closed_Finished", "date_assigned" => "2013-02-20", "date_reported" => "2013-02-03", "division" => "FLD"],
            ["name" => "Ina kinatay, kinain ng mga sariling anak", "agent_id" => 10930119, "complainant_id" => 7,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-03-05", "date_reported" => "2013-02-27", "division" => "FLD"],
            //11
            ["name" => "Amerikanong pugante tiklo sa Zamboanga", "agent_id" => 10930120, "complainant_id" => 8,
                "status" => "Closed_Finished", "date_assigned" => "2013-03-30", "date_reported" => "2013-03-03", "division" => "FLD"],
            ["name" => "8 miyembro ng robbery gang tiklo sa Maynila", "agent_id" => 10930121, "complainant_id" => 6,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-04-01", "date_reported" => "2013-03-20", "division" => "FLD"],
            ["name" => "3 utas sa pananambang sa Cotabato", "agent_id" => 10930122, "complainant_id" => 4,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-04-10", "date_reported" => "2013-04-01", "division" => "FLD"],
            ["name" => "Life imprisonment sa 2 marijuana dealer sa Benguet", "agent_id" => 10930123, "complainant_id" => 9,
                "status" => "Pending", "date_assigned" => "2013-05-03", "date_reported" => "2013-04-01", "division" => "FLD"],
            ["name" => "Shabu lab sa taguig nilusob ng NBI", "agent_id" => 10930191, "complainant_id" => 8,
                "status" => "Ongoing", "date_assigned" => "2013-05-22", "date_reported" => "2013-04-20", "division" => "FLD"],
            ["name" => "Two serendra developers, nahaharap sa 30M na kaso", "agent_id" => 10930192, "complainant_id" => 7,
                "status" => "Non-viable", "date_assigned" => "2013-06-10", "date_reported" => "2013-04-12", "division" => "FLD"],
            ["name" => "Lalaki tinamaan ng ligaw na bala sa ulo", "agent_id" => 10930194, "complainant_id" => 6,
                "status" => "Non-viable", "date_assigned" => "2013-06-17", "date_reported" => "2013-05-12", "division" => "FLD"],
            ["name" => "Tulak ng droga patay, 2 sugatan sa Zambo", "agent_id" => 10930196, "complainant_id" => 5,
                "status" => "Non-viable", "date_assigned" => "2013-07-07", "date_reported" => "2013-05-20", "division" => "FLD"],
            ["name" => "Pinay ginahasa umano ng arabong BF", "agent_id" => 10930198, "complainant_id" => 4,
                "status" => "Pending", "date_assigned" => "2013-07-27", "date_reported" => "2013-04-10", "division" => "FLD"],
            ["name" => "3 dedo sa pamamaril ng dating sundalo", "agent_id" => 10930191, "complainant_id" => 3,
                "status" => "Non-viable", "date_assigned" => "2013-08-11", "date_reported" => "2013-05-20", "division" => "FLD"],
            ["name" => "Top drug ng Zambo, nadakip na", "agent_id" => 10930193, "complainant_id" => 2,
                "status" => "Closed_Finished", "date_assigned" => "2013-08-29", "date_reported" => "2013-07-07", "division" => "FLD"],
            ["name" => "Naia 3 ambush", "agent_id" => 10930195, "complainant_id" => 1,
                "status" => "Pending", "date_assigned" => "2013-09-10", "date_reported" => "2013-04-22", "division" => "FLD"],
            ["name" => "Lasing na drayber sangkot sa banggaan", "agent_id" => 10930197, "complainant_id" => 2,
                "status" => "Ongoing", "date_assigned" => "2013-09-21", "date_reported" => "2013-07-12", "division" => "FLD"],
            ["name" => "5 lalaki sangkot sa pandurukot sa isang department store", "agent_id" => 10930199, "complainant_id" => 3,
                "status" => "Pending", "date_assigned" => "2013-10-11", "date_reported" => "2013-09-22", "division" => "FLD"],
            ["name" => "Lalaki huli ng pulis matapos magvandal sa Pasay", "agent_id" => 10930111, "complainant_id" => 4,
                "status" => "Pending", "date_assigned" => "2013-10-22", "date_reported" => "2013-08-12", "division" => "FLD"],
            ["name" => "Amerikanong nanggahasa ng pilipinang kasintahan", "agent_id" => 10930113, "complainant_id" => 5,
                "status" => "Pending", "date_assigned" => "2013-11-03", "date_reported" => "2013-09-09", "division" => "FLD"],
            ["name" => "4 na prostitute huli sa Quezon city", "agent_id" => 10930115, "complainant_id" => 6,
                "status" => "Ongoing", "date_assigned" => "2013-11-23", "date_reported" => "2013-10-22", "division" => "FLD"],
            ["name" => "Don Mariano bus, nahulog sa skyway", "agent_id" => 10930117, "complainant_id" => 7,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-12-01", "date_reported" => "2013-10-28", "division" => "FLD"],
            ["name" => "Kaso ni Vhong Navarro", "agent_id" => 10930191, "complainant_id" => 8,
                "status" => "Ongoing", "date_assigned" => "2013-12-18", "date_reported" => "2013-11-12", "division" => "FLD"],
            ["name" => "Maguindanao Massacre", "agent_id" => 10930115, "complainant_id" => 9,
                "status" => "Closed_Finished", "date_assigned" => "2013-12-27", "date_reported" => "2013-11-20", "division" => "FLD"],
        );

        // Uncomment the below to run the seeder
        DB::table('kases')->insert($kases);
    }

}
