<?php

class Client_type_tagsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('client_type_tags')->truncate();

        $client_type_tags = array(
            ["client_id" => 1, "type" => "Victim"],
            ["client_id" => 2, "type" => "Victim"],
            ["client_id" => 3, "type" => "Complainant"],
            ["client_id" => 4, "type" => "Victim"],
            ["client_id" => 4, "type" => "Complainant"],
            ["client_id" => 5, "type" => "Complainant"],
            ["client_id" => 6, "type" => "Victim"],
            ["client_id" => 7, "type" => "Victim"],
            ["client_id" => 7, "type" => "Complainant"],
            ["client_id" => 8, "type" => "Victim"],
            ["client_id" => 8, "type" => "Complainant"],
            ["client_id" => 9, "type" => "Victim"],
            ["client_id" => 10, "type" => "Victim"],
            ["client_id" => 11, "type" => "Subject"],
            ["client_id" => 12, "type" => "Subject"],
            ["client_id" => 13, "type" => "Subject"],
        );

        // Uncomment the below to run the seeder
        DB::table('client_type_tags')->insert($client_type_tags);
    }

}
