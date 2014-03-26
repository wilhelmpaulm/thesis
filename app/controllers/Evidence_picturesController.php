<?php

class Evidence_picturesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $evidence = Evidence_picture::create([
                    "case_id" => Input::get("case_id"),
                    "title" => Input::get("title"),
                    "user_id" => Auth::user()->id,
                    "details" => Input::get("details"),
                    "owner" => Input::get("owner"),
                    "date_taken" => Input::get("date_taken"),
                    "date_received" => Input::get("date_received"),
                    "file_name" => Input::get("file_name")
        ]);

        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/pictures", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
        Case_evidencesController::addCaseEvidence($evidence->case_id, "Picture", $evidence->id);
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " uploaded picture" . $evidence->id . "to " . $evidence->case_id, "evidence_pictures");


        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $evidence = Evidence_picture::find($id);
        $evidence->title = Input::get("title");
        $evidence->details = Input::get("details");
        $evidence->owner = Input::get("owner");
        $evidence->date_taken = Input::get("date_taken");
        $evidence->date_received = Input::get("date_received");
        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/pictures", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " updated picture" . $evidence->id . "to " . $evidence->case_id, "evidence_pictures");


        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $evidence = Evidence_picture::find($id);
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " deleted picture" . $evidence->id . "to " . $evidence->case_id, "evidence_pictures");

        $evidence->delete();
        return Redirect::back();
    }

}
