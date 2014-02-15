<?php

class LanguagesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('languages')->truncate();

        $languages = array(
            ["name" => "english"],
            ["name" => "french"],
            ["name" => "chinese"],
            ["name" => "filipino"],
            ["name" => "korean"],
            ["name" => "spanish"],
        );

        // Uncomment the below to run the seeder
        DB::table('languages')->insert($languages);
    }

}
