<?php

class DivisionsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('divisions')->truncate();

		$divisions = array(
                    ["name" => "AFAD"],
                    ["name" => "AGD"],
                    ["name" => "AHTRAD"],
                    ["name" => "AOCD"],
                    ["name" => "CCD"],
                    ["name" => "DID"],
                    ["name" => "EWPID"],
                    ["name" => "FLD"],
                    ["name" => "IPRD"],
                    ["name" => "RAID"],
                    ["name" => "VAWCD"],
		);

		// Uncomment the below to run the seeder
		 DB::table('divisions')->insert($divisions);
	}

}
