<?php

class TagsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tags')->truncate();

        $tags = array(
            ["user_id" => 10930191 , "reference_id"=> 1,"table"=>"kases", "tags"=>"theft, high school, marikina, " ],
            ["user_id" => 10930191 , "reference_id"=> 2,"table"=>"kases", "tags"=>"rape, BGC,condiminium, anne curtis" ],
            ["user_id" => 10930191 , "reference_id"=> 3,"table"=>"kases", "tags"=>"bulallo, outbreak, pedro gil, supssup, supsuplord"  ],
            ["user_id" => 10930191 , "reference_id"=> 1,"table"=>"evidence_objects", "tags"=>"bloody, bowie knife, knife, bowie" ],
            ["user_id" => 10930191 , "reference_id"=> 2,"table"=>"evidence_objects", "tags"=>"silver, gun, silver gun" ],
            ["user_id" => 10930191 , "reference_id"=> 3,"table"=>"evidence_objects", "tags"=>"ice, pick, ice pick, stabbing" ],
            ["user_id" => 10930191 , "reference_id"=> 1,"table"=>"evidence_pictures", "tags"=>"justin beiber, molesting, anne curtis " ],
            ["user_id" => 10930191 , "reference_id"=> 2,"table"=>"evidence_pictures", "tags"=>"found, dead body, teacher, carlo lingay" ],
            ["user_id" => 10930191 , "reference_id"=> 3,"table"=>"evidence_pictures", "tags"=>"korean gambling lord, picture" ],
            ["user_id" => 10930191 , "reference_id"=> 1,"table"=>"evidence_recordings", "tags"=>"man calling, rape, eloisa lucban" ],
            ["user_id" => 10930191 , "reference_id"=> 2,"table"=>"evidence_recordings", "tags"=>"suspects, inside , condiminium, elmer reyes" ],
            ["user_id" => 10930191 , "reference_id"=> 3,"table"=>"evidence_recordings", "tags"=>"rene casimiro, 2 guys, fighting, bulalo" ],
        );

        // Uncomment the below to run the seeder
        DB::table('tags')->insert($tags);
    }

}
