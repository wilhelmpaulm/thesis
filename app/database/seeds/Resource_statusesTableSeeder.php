<?php

class Resource_statusesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('resource_statuses')->truncate();

        $resource_statuses = array(
            ["status" => "Available"],
            ["status" => "In Use"],
            ["status" => "Unavailable"],
        );

        // Uncomment the below to run the seeder
        DB::table('resource_statuses')->insert($resource_statuses);
    }

}
