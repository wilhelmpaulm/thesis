<?php

class User_addressesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('user_addresses')->truncate();

        $user_addresses = array(
            ["user_id" => 10930191, "street" => "1671 Pedro Gil St.", "city" => "Manila",
                "postal_code" => "1004", "province" => "", "barangay" => "817"],
            ["user_id" => 10930194, "street" => "2645 Sandejas St.", "city" => "Manila",
                "postal_code" => "1004", "province" => "", "barangay" => "817"],
        );

        // Uncomment the below to run the seeder
        DB::table('user_addresses')->insert($user_addresses);
    }

}
