<?php

class Client_addressesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('client_addresses')->truncate();

        $client_addresses = array(
            ["client_id" => "1", "street" => "1234 Red", "city" => "Quezon", "postal_code" => "1200",
                "province" => "", "barangay" => "Nissan"],
            ["client_id" => "2", "street" => "1234 Green", "city" => "Manila", "postal_code" => "1201",
                "province" => "", "barangay" => "Toyota"],
            ["client_id" => "3", "street" => "1234 Blue", "city" => "Caloocan", "postal_code" => "1202",
                "province" => "", "barangay" => "Mitsubishi"],
            ["client_id" => "4", "street" => "1234 Yellow", "city" => "Pasay", "postal_code" => "1203",
                "province" => "", "barangay" => "Honda"],
            ["client_id" => "5", "street" => "1234 Purple", "city" => "Pateros", "postal_code" => "1204",
                "province" => "", "barangay" => "Ferrari"],
            ["client_id" => "6", "street" => "1234 Brown", "city" => "Antipolo", "postal_code" => "1205",
                "province" => "", "barangay" => "Porsche"],
            ["client_id" => "7", "street" => "1234 White", "city" => "Pasig", "postal_code" => "1206",
                "province" => "", "barangay" => "Porsche"],
            ["client_id" => "8", "street" => "1234 Black", "city" => "Taguig", "postal_code" => "1207",
                "province" => "", "barangay" => "Chevrolet"],
            ["client_id" => "9", "street" => "1234 Silver", "city" => "Cavite", "postal_code" => "1208",
                "province" => "", "barangay" => "Ford"],
            ["client_id" => "10", "street" => "1234 Gold", "city" => "Makati", "postal_code" => "1209",
                "province" => "", "barangay" => "Isuzu"],
            ["client_id" => "11", "street" => "1234 Fuchsia", "city" => "Las Pinas", "postal_code" => "1210",
                "province" => "", "barangay" => "Mini"],
            ["client_id" => "12", "street" => "1234 Crimson", "city" => "Paranaque", "postal_code" => "1211",
                "province" => "", "barangay" => "Hummer"],
        );

        // Uncomment the below to run the seeder
        DB::table('client_addresses')->insert($client_addresses);
    }

}
