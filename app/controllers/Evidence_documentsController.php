<?php

class Evidence_documentsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $evidence = Evidence_document::create([
                    "case_id" => Input::get("case_id"),
                    "title" => Input::get("title"),
                    "user_id" => Auth::user()->id,
                    "details" => Input::get("details"),
                    "owner" => Input::get("owner"),
                    "date_received" => Input::get("date_received"),
                    "file_name" => Input::get("file_name")
        ]);

        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/documents", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->origin_id = $evidence->id;
        $evidence->save();
        Case_evidencesController::addCaseEvidence($evidence->case_id, "Document", $evidence->id);


        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " uploaded document " . $evidence->id . "to " . $evidence->case_id, "evidence_odocuments");

        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
//        $evidence = Evidence_document::find($id);
//        $evidence->title = Input::get("title");
//        $evidence->details = Input::get("details");
//        $evidence->owner = Input::get("owner");
//        $evidence->date_received = Input::get("date_received");
//        if (Input::hasFile('file_name')) {
//            Input::file('file_name')->move(public_path() . "/nbi/evidences/documents", "" . $complainant->id . "." . Input::file('file_name')->getClientOriginalExtension());
//            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
//        }
//        $evidence->save();
//        return Redirect::back();

        $evidence1 = Evidence_document::find($id);
        $case_evidence = Case_evidence::where("case_id", "=", Input::get("case_id"))->where("type", "=", "Document")->where("evidence_id", "=", $id)->first();
        $x = $evidence1->version;
        if(Input::get("version") == "Major"){
            $x += 1;
        }else{
            $x += 0.1;
            
        }
        

        $evidence = Evidence_document::create([
                    "case_id" => Input::get("case_id"),
                    "origin_id" => $evidence1->origin_id,
                    "version" => $x,
                    "title" => Input::get("title"),
                    "user_id" => Auth::user()->id,
                    "details" => Input::get("details"),
                    "owner" => Input::get("owner"),
                    "date_received" => Input::get("date_received"),
                    "file_name" => Input::get("file_name")
        ]);

        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/documents", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();

        $case_evidence->evidence_id = $evidence->id;
        $case_evidence->save();

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " updated document " . $evidence->id . "from " . $evidence->case_id, "evidence_odocuments");


        return Redirect::back();
    }

    public function postSetCurrent($id = null) {
        $case_evidence = Case_evidence::where("case_id", "=", Input::get("case_id"))->where("type", "=", "Document")->where("evidence_id", "=", Input::get("current_id"))->first();
        $case_evidence->evidence_id = $id;
        $case_evidence->save();



        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $evidence = Evidence_document::find($id);

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " deleted document " . $evidence->id . "from " . $evidence->case_id, "evidence_odocuments");
        $evidence->delete();

        return Redirect::back();
    }

}
