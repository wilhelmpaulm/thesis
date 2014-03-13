<?php

class Resource_historiesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('resource_histories')->truncate();

        $resource_histories = array(
            ["case_id" => "1", "resource_id" => 3, "user_id" => 10930216, "details" => "Requested Philips Voice Recorder", "amount" => "1", "status" => "Returned", "date_requested" => "2013-06-07", "date_approved" => "2013-06-07", "date_due" => "2013-06-14", "date_issued" => "2013-06-07", "date_returned" => "2013-06-13"],
            ["case_id" => "2", "resource_id" => 40, "user_id" => 10930216, "details" => "Requested Bullet-proof vest", "amount" => "1", "status" => "Disapproved", "date_requested" => "2013-01-07", "date_approved" => "2013-01-08", "date_due" => "2013-01-15", "date_issued" => "2013-01-08", "date_returned" => "2013-01-15"],
            ["case_id" => "5", "resource_id" => 7, "user_id" => 10930216, "details" => "Requested Toyota Innova", "amount" => "1", "status" => "Returned", "date_requested" => "2013-04-13", "date_approved" => "2013-04-13", "date_due" => "2013-04-14", "date_issued" => "2013-04-13", "date_returned" => "2013-04-14"],
            ["case_id" => "6", "resource_id" => 9, "user_id" => 10930217, "details" => "Requested Toyota Corolla", "amount" => "2", "status" => "Returned", "date_requested" => "2013-12-10", "date_approved" => "2013-12-12", "date_due" => "2013-12-12", "date_issued" => "2013-12-12", "date_returned" => "2013-12-12"],
            ["case_id" => "7", "resource_id" => 29, "user_id" => 10930217, "details" => "Requested Mitsubishi L300", "amount" => "1", "status" => "Returned", "date_requested" => "2013-09-10", "date_approved" => "2013-09-10", "date_due" => "2013-09-15", "date_issued" => "2013-09-10", "date_returned" => "2013-09-14"],
            ["case_id" => "8", "resource_id" => 30, "user_id" => 10930217, "details" => "Requested a photographer", "amount" => "1", "status" => "Returned", "date_requested" => "2014-01-20", "date_approved" => "2014-01-20", "date_due" => "2014-01-20", "date_issued" => "2014-01-20", "date_returned" => "2014-01-20"],
            ["case_id" => "9", "resource_id" => 13, "user_id" => 10930217, "details" => "Requested a translator", "amount" => "1", "status" => "Returned", "date_requested" => "2013-05-05", "date_approved" => "2013-05-05", "date_due" => "2013-05-05", "date_issued" => "2013-05-05", "date_returned" => "2013-05-05"],
            ["case_id" => "10", "resource_id" => 33, "user_id" => 10930216, "details" => "Requested an analyst", "amount" => "1", "status" => "Returned", "date_requested" => "2013-07-17", "date_approved" => "2013-07-19", "date_due" => "2013-07-19", "date_issued" => "2013-07-19", "date_returned" => "2013-07-19"],
            ["case_id" => "12", "resource_id" => 49, "user_id" => 10930216, "details" => "Requested a fingerprint operator", "amount" => "1", "status" => "Returned", "date_requested" => "2013-10-15", "date_approved" => "2013-10-15", "date_due" => "2013-10-18", "date_issued" => "2013-10-15", "date_returned" => "2013-10-18"],
            ["case_id" => "13", "resource_id" => 50, "user_id" => 10930217, "details" => "Requested a polygraph operator", "amount" => "1", "status" => "Returned", "date_requested" => "2013-02-21", "date_approved" => "2013-02-24", "date_due" => "2013-03-01", "date_issued" => "2013-02-24", "date_returned" => "2013-03-01"],
            ["case_id" => "14", "resource_id" => 71, "user_id" => 10930216, "details" => "Requested a publisher", "amount" => "1", "status" => "Returned", "date_requested" => "2013-06-13", "date_approved" => "2013-06-14", "date_due" => "2013-06-19", "date_issued" => "2013-06-14", "date_returned" => "2013-06-17"],
        );

        // Uncomment the below to run the seeder
        DB::table('resource_histories')->insert($resource_histories);
    }

}
