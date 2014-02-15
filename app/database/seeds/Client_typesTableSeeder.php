<?php

class Client_typesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('client_types')->truncate();

        $client_types = array(
            ["type" => "Complainant"],
            ["type" => "Subject"],
            ["type" => "Victim"],
            ["type" => "Informant"],
            ["type" => "Witness"],
        );

        // Uncomment the below to run the seeder
         DB::table('client_types')->insert($client_types);
    }

}
