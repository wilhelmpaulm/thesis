<?php

class ComplaintsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
//        return var_dump($_POST);

        $complaint = Complaint::create([
                    "status" => "Pending",
                    "division" => Auth::user()->division,
                    "date_reported" => Input::get("date_reported"),
                    "date_commited" => Input::get("date_commited")
        ]);
        $complaint_address = Complaint_address::create([
                    "complaint_id" => $complaint->id,
                    "street" => Input::get("street_complaint"),
                    "city" => Input::get("city_complaint"),
                    "barangay" => Input::get("barangay_complaint"),
                    "postal_code" => Input::get("postal_code_complaint"),
                    "province" => Input::get("province_complaint")
        ]);
        for ($index = 0; $index < count(Input::get("type")); $index++) {
            $complaint_type_tags = Complaint_type_tag::create([
                        "complaint_id" => $complaint->id,
                        "type" => Input::get("type")[$index]
            ]);
        }

        $complainant = Client::create([
                    "last_name" => Input::get("last_name_c"),
                    "first_name" => Input::get("first_name_c"),
                    "middle_name" => Input::get("middle_name_c"),
                    "birthdate" => Input::get("birthdate_c"),
                    "citizenship" => Input::get("citizenship_c"),
                    "sex" => Input::get("sex_c"),
                    "occupation" => Input::get("occupation_c"),
                    "civil_status" => Input::get("civil_status_c")
        ]);

        $complaint->client_id = $complainant->id;
        $complaint->save();

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
                    "type" => "Complainant"
        ]);
        if (Input::hasFile('img_picture_c')) {

            Input::file('img_picture_c')->move(public_path() . "/nbi/clients/pictures", "" . $complainant->id . "." . Input::file('img_picture_c')->getClientOriginalExtension());
            $complainant->img_picture = "" . $complainant->id . "." . Input::file('img_picture_c')->getClientOriginalExtension();
        }
        $complainant->save();

         if(Input::get("complainant_victim") == "Yes"){
            $complaint_victims = Complaint_victim::create([
                        "complaint_id" => $complaint->id,
                        "client_id" => $complainant->id,
            ]);
            
        }

        for ($index = 0; $index < count(Input::get("last_name_v")); $index++) {
            $complainant = Client::create([
                        "last_name" => Input::get("last_name_v")[$index],
                        "first_name" => Input::get("first_name_v")[$index],
                        "middle_name" => Input::get("middle_name_v")[$index],
                        "birthdate" => Input::get("birthdate_v")[$index],
                        "citizenship" => Input::get("citizenship_v")[$index],
                        "sex" => Input::get("sex_v")[$index],
                        "occupation" => Input::get("occupation_v")[$index],
                        "civil_status" => Input::get("civil_status_v")[$index]
            ]);
            $complainant_contact = Client_contact::create([
                        "client_id" => $complainant->id,
                        "type" => Input::get("contact_type_v")[$index],
                        "contact" => Input::get("contact_v")[$index],
            ]);
            $complainant_address = Client_address::create([
                        "client_id" => $complainant->id,
                        "street" => Input::get("street_v")[$index],
                        "city" => Input::get("city_v")[$index],
                        "barangay" => Input::get("barangay_v")[$index],
                        "postal_code" => Input::get("postal_code_v")[$index],
                        "province" => Input::get("province_v")[$index]
            ]);
            $client_type_tags = Client_type_tag::create([
                        "client_id" => $complainant->id,
                        "type" => "Victim"
            ]);

            $complaint_victims = Complaint_victim::create([
                        "complaint_id" => $complaint->id,
                        "client_id" => $complainant->id,
            ]);

//            if (Input::hasFile('img_picture_v')[$index]) {
//                Input::file('img_picture_v')[$index]->move(public_path() . "/nbi/clients/pictures", "" . $complainant->id . "." . Input::file('img_picture_v')[$index]->getClientOriginalExtension());
//                $complainant->img_picture = "" . $complainant->id . "." . Input::file('img_picture_v')[$index]->getClientOriginalExtension();
//            }
            if (Input::file('img_picture_v')[$index]) {
//                var_dump(Input::file('img_picture_v')[$index]->getClientOriginalExtension());
                Input::file('img_picture_v')[$index]->move(public_path() . "/nbi/clients/pictures", "" . $complainant->id . "." . Input::file('img_picture_v')[$index]->getClientOriginalExtension());
                $complainant->img_picture = "" . $complainant->id . "." . Input::file('img_picture_v')[$index]->getClientOriginalExtension();
                $complainant->save();
            }

            $complainant->save();
        }
        
       
        
        for ($index = 0; $index < count(Input::get("last_name_s")); $index++) {
            $complainant = Client::create([
                        "last_name" => Input::get("last_name_s")[$index],
                        "first_name" => Input::get("first_name_s")[$index],
                        "middle_name" => Input::get("middle_name_s")[$index],
                        "birthdate" => Input::get("birthdate_s")[$index],
                        "citizenship" => Input::get("citizenship_s")[$index],
                        "sex" => Input::get("sex_s")[$index],
                        "occupation" => Input::get("occupation_s")[$index],
                        "civil_status" => Input::get("civil_status_s")[$index]
            ]);
            $complainant_contact = Client_contact::create([
                        "client_id" => $complainant->id,
                        "type" => Input::get("contact_type_s")[$index],
                        "contact" => Input::get("contact_s")[$index],
            ]);
            $complainant_address = Client_address::create([
                        "client_id" => $complainant->id,
                        "street" => Input::get("street_s")[$index],
                        "city" => Input::get("city_s")[$index],
                        "barangay" => Input::get("barangay_s")[$index],
                        "postal_code" => Input::get("postal_code_s")[$index],
                        "province" => Input::get("province_s")[$index]
            ]);
            $client_type_tags = Client_type_tag::create([
                        "client_id" => $complainant->id,
                        "type" => "Subject"
            ]);

            $complaint_subjects = Complaint_subject::create([
                        "complaint_id" => $complaint->id,
                        "client_id" => $complainant->id,
            ]);

            if (Input::file('img_picture_s')[$index]) {

                Input::file('img_picture_s')[$index]->move(public_path() . "/nbi/clients/pictures", "" . $complainant->id . "." . Input::file('img_picture_s')[$index]->getClientOriginalExtension());

                $complainant->img_picture = "" . $complainant->id . "." . Input::file('img_picture_s')[$index]->getClientOriginalExtension();

                $complainant->save();
            }
//            if (Input::hasFile('img_picture_s')[$index]) {
//                Input::file('img_picture_s')[$index]->move(public_path() . "/nbi/clients/pictures", "" . $complainant->id . "." . Input::file('img_picture_s')[$index]->getClientOriginalExtension());
//                $complainant->img_picture = "" . $complainant->id . "." . Input::file('img_picture_s')[$index]->getClientOriginalExtension();
//            }
            $complainant->save();
        }

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, 0, $complaint->id, Auth::user()->id . " Added complaint " . $complaint->id, "complaints");


        return Redirect::to("agent/dashboard");
    }

    public function postStoreChief($id = null) {
        $c = Complaint::find($id);
        $c->name = Input::get("complaint_name");
        $c->agency_reported = Input::get("agency_reported");
        $c->agency_report_details = Input::get("agency_report_details");
        $c->agency_report_status = Input::get("agency_report_status");
        $c->court_action_details = Input::get("court_action_details");
        $c->considerations = Input::get("considerations");
        $c->narration = Input::get("narration");
        $c->status = "Completed";
        $c->save();
        if (Input::hasFile('img_signature')) {

            Input::file('img_signature')->move(public_path() . "/nbi/complaints/signature", "" . $c->id . "." . Input::file('img_signature')->getClientOriginalExtension());
            $c->img_signature = "" . $c->id . "." . Input::file('img_signature')->getClientOriginalExtension();
            $c->save();
        }
        if (Input::hasFile('img_right_thumb')) {

            Input::file('img_right_thumb')->move(public_path() . "/nbi/complaints/right_thumb", "" . $c->id . "." . Input::file('img_right_thumb')->getClientOriginalExtension());
            $c->img_right_thumb = "" . $c->id . "." . Input::file('img_right_thumb')->getClientOriginalExtension();
            $c->save();
        }

        $case = Kase::create([
                    "status" => "Pending",
                    "complaint_id" => $c->id,
                    "name" => $c->name,
                    "complainant_id" => $c->client_id,
                    "details" => $c->narration,
                    "division" => $c->division,
                    "date_reported" => $c->date_reported,
        ]);
        
        foreach(Complaint_type_tag::where("complaint_id", "=", $case->complaint_id)->get() as $ctt)
        {
            $case_type_tags = Case_type_tag::create([
                        "case_id" => $case->id,
                        "type" => $ctt->type
            ]);
        }


 $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, 0, $c->id, Auth::user()->id . " Added complaint " . $c->id, "complaints");


        return Redirect::back();
//        var_dump($_POST);
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
