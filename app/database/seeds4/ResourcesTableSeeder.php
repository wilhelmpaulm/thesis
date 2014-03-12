<?php

class ResourcesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('resources')->truncate();

        $resources = array(
            //GADGET
            //GADGET
            //GADGET
            ["name" => "Metal Detector", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Gadget", "amount" => "20", "status" => "Available"],
            ["name" => "Batton", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Gadget", "amount" => "20", "status" => "Available"],
            ["name" => "Goggles", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Gadget", "amount" => "20", "status" => "Available"],
            ["name" => "Plastic shields", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Gadget", "amount" => "20", "status" => "Available"],
            ["name" => "Microwave", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Gadget", "amount" => "20", "status" => "Available"],
            ["name" => "Chairs", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Gadget", "amount" => "20", "status" => "Available"],
            ["name" => "Handcuffs", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Gadget", "amount" => "20", "status" => "Available"],
            //PERSON
            //PERSON
            //PERSON
            ["name" => "Translator - Wilhelm Paul", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Person", "amount" => "1", "status" => "Available"],
            ["name" => "Analyst - Janine Kau", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Person", "amount" => "1", "status" => "Available"],
            ["name" => "Navigator - Marco Polo", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Person", "amount" => "1", "status" => "Available"],
            ["name" => "Inventor - Leonardo Da Vinci", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Person", "amount" => "1", "status" => "Available"],
            ["name" => "Illustrator - Michael Angelo", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Person", "amount" => "1", "status" => "Available"],
            ["name" => "Programmer - Bill Gates", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Person", "amount" => "1", "status" => "Available"],
            //CAR
            //CAR
            //CAR
            ["name" => "L300 WER345", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
            ["name" => "L300 MNB123", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
            ["name" => "Lancer LKJ687", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
            ["name" => "Land Rover QSE", "division" => "FLD", "details" => " Lorem ipsum dolor sit amet,  ut labore",
                "category" => "Vehicle", "amount" => "1", "status" => "Available"],
        );

        // Uncomment the below to run the seeder
         DB::table('resources')->insert($resources);
    }

}
