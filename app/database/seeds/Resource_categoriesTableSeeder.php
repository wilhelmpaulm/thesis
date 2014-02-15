<?php

class Resource_categoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('resource_categories')->truncate();

		$resource_categories = array(
                    ["name" => "Gadget"],
                    ["name" => "Money"],
                    ["name" => "Vehicle"],
                    ["name" => "Person"],
		);

		// Uncomment the below to run the seeder
		 DB::table('resource_categories')->insert($resource_categories);
	}

}
