<?php

class Case_victimsController extends BaseController {

	public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $complainant = Client::create([
                    "last_name" => Input::get("last_name_c"),
                    "first_name" => Input::get("first_name_c"),
                    "middle_name" => Input::get("middle_name_c"),
                    "birthdate" => Input::get("birthdate_c"),
                    "sex" => Input::get("sex_c"),
                    "occupation" => Input::get("occupation_c"),
                    "civil_status" => Input::get("civil_status_c")
        ]);
        $complaint_subjects = Case_victim::create([
                    "case_id" => Input::get("case_id"),
                    "client_id" => $complainant->id,
        ]);

        $complainant_contact = Client_contact::create([
                    "client_id" => $complainant->id,
                    "type" => Input::get("contact_type_c"),
                    "contact" => Input::get("contact_c"),
        ]);
        $complainant_address = Client_address::create([
                    "client_id" => $complainant->id,
                    "street" => Input::get("street_client"),
                    "city" => Input::get("city_client"),
                    "barangay" => Input::get("barangay_client"),
                    "postal_code" => Input::get("postal_code_client"),
                    "province" => Input::get("province_client")
        ]);

        $client_type_tags = Client_type_tag::create([
                    "client_id" => $complainant->id,
                    "type" => "Victim"
        ]);
        if (Input::hasFile('img_picture_c')) {

            Input::file('img_picture_c')->move(public_path() . "/nbi/clients/pictures", "" . $complainant->id . "." . Input::file('img_picture_c')->getClientOriginalExtension());
            $complainant->img_picture = "" . $complainant->id . "." . Input::file('img_picture_c')->getClientOriginalExtension();
            $complainant->save();
        }
         $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, Input::get("case_id"), $complainant->id, Auth::user()->id . " added case victim to" . $complainant->id, "case_victims");


        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        
    }

}
