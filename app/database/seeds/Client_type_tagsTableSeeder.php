<?php

class Client_type_tagsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('client_type_tags')->truncate();

        $client_type_tags = array(
        );

        // Uncomment the below to run the seeder
        DB::table('client_type_tags')->insert($client_type_tags);
    }

}
