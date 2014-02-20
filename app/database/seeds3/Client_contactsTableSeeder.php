<?php

class Client_contactsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('client_contacts')->truncate();

        $client_contacts = array(
            ["client_id" => 1, "type" => "Mobile", "contact" => "09123456789"],
            ["client_id" => 2, "type" => "Landline", "contact" => "7654321"],
            ["client_id" => 3, "type" => "Email", "contact" => "asdfghjkl@gmail.com"],
            ["client_id" => 4, "type" => "Mobile", "contact" => "09123456789"],
            ["client_id" => 5, "type" => "Mobile", "contact" => "09123456789"],
            ["client_id" => 6, "type" => "Email", "contact" => "qwertyuiop@gmail.com"],
            ["client_id" => 7, "type" => "Mobile", "contact" => "09123456789"],
            ["client_id" => 8, "type" => "Email", "contact" => "zxcvbnm@gmail.com"],
            ["client_id" => 9, "type" => "Mobile", "contact" => "09123456789"],
            ["client_id" => 10, "type" => "Landline", "contact" => "1234567"],
        );

        // Uncomment the below to run the seeder
        DB::table('client_contacts')->insert($client_contacts);
    }

}
