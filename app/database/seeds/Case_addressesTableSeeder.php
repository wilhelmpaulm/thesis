<?php

class Case_addressesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('case_addresses')->truncate();

        $case_evidences = array(
             ["case_id" => "1", "street" => "1234 Red", "city" => "Quezon", "postal_code" => "1200",
                "province" => "", "barangay" => "Nissan"],
            ["case_id" => "2", "street" => "1234 Green", "city" => "Manila", "postal_code" => "1201",
                "province" => "", "barangay" => "Toyota"],
            ["case_id" => "3", "street" => "1234 Blue", "city" => "Caloocan", "postal_code" => "1202",
                "province" => "", "barangay" => "Mitsubishi"],
            ["case_id" => "4", "street" => "1234 Yellow", "city" => "Pasay", "postal_code" => "1203",
                "province" => "", "barangay" => "Honda"],
            ["case_id" => "5", "street" => "1234 Purple", "city" => "Pateros", "postal_code" => "1204",
                "province" => "", "barangay" => "Ferrari"],
            ["case_id" => "6", "street" => "1234 Brown", "city" => "Antipolo", "postal_code" => "1205",
                "province" => "", "barangay" => "Porsche"],
            ["case_id" => "7", "street" => "1234 White", "city" => "Pasig", "postal_code" => "1206",
                "province" => "", "barangay" => "Porsche"],
            ["case_id" => "8", "street" => "1234 Black", "city" => "Taguig", "postal_code" => "1207",
                "province" => "", "barangay" => "Chevrolet"],
            ["case_id" => "9", "street" => "1234 Silver", "city" => "Cavite", "postal_code" => "1208",
                "province" => "", "barangay" => "Ford"],
            ["case_id" => "10", "street" => "1234 Gold", "city" => "Makati", "postal_code" => "1209",
                "province" => "", "barangay" => "Isuzu"],
            ["case_id" => "11", "street" => "1234 Fuchsia", "city" => "Las Pinas", "postal_code" => "1210",
                "province" => "", "barangay" => "Mini"],
            ["case_id" => "12", "street" => "1234 Crimson", "city" => "Paranaque", "postal_code" => "1211",
                "province" => "", "barangay" => "Hummer"],
        );

        // Uncomment the below to run the seeder
        DB::table('case_addresses')->insert($case_evidences);
    }

}
