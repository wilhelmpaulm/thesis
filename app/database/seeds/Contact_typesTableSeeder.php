<?php

class Contact_typesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contact_types')->truncate();

        $contact_types = array(
            ["type" => "Email"],
            ["type" => "Mobile"],
            ["type" => "Landline"],
        );

        // Uncomment the below to run the seeder
        DB::table('contact_types')->insert($contact_types);
    }

}
