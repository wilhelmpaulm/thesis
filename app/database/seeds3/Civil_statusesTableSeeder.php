<?php

class Civil_statusesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('civil_statuses')->truncate();

        $civil_statuses = array(
            ["status" => "Single"],
            ["status" => "Married"],
            ["status" => "Divorced"],
            ["status" => "Annulled"],
            ["status" => "Widowed"],
        );

        // Uncomment the below to run the seeder
         DB::table('civil_statuses')->insert($civil_statuses);
    }

}
