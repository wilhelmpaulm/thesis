<?php

class Client_type_tagsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('client_type_tags')->truncate();

        $client_type_tags = array(
            ["client_id" => 1, "client_type_id" => 3],
            ["client_id" => 2, "client_type_id" => 3],
            ["client_id" => 3, "client_type_id" => 1],
            ["client_id" => 4, "client_type_id" => 3],
            ["client_id" => 4, "client_type_id" => 1],
            ["client_id" => 5, "client_type_id" => 1],
            ["client_id" => 6, "client_type_id" => 3],
            ["client_id" => 7, "client_type_id" => 3],
            ["client_id" => 7, "client_type_id" => 1],
            ["client_id" => 8, "client_type_id" => 3],
            ["client_id" => 8, "client_type_id" => 1],
            ["client_id" => 9, "client_type_id" => 3],
            ["client_id" => 10, "client_type_id" => 3],
            ["client_id" => 11, "client_type_id" => 2],
            ["client_id" => 12, "client_type_id" => 2],
            ["client_id" => 13, "client_type_id" => 2],
        );

        // Uncomment the below to run the seeder
        DB::table('client_type_tags')->insert($client_type_tags);
    }

}
