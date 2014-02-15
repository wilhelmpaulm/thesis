<?php

class User_contactsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('user_contacts')->truncate();

        $user_contacts = array(
            ["user_id" => 10930191, "type" => "Email", "contact" => "wilhelmpaulm@gmail.com"],
            ["user_id" => 10930191, "type" => "Mobile", "contact" => "09279655572"],
            ["user_id" => 10930194, "type" => "Landline", "contact" => "5613793"],
            ["user_id" => 10930194, "type" => "Email", "contact" => "enricoespenesin@gmail.com"],
        );

        // Uncomment the below to run the seeder
        DB::table('user_contacts')->insert($user_contacts);
    }

}
