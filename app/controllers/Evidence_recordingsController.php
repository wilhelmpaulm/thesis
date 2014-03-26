<?php

class Evidence_recordingsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $evidence = Evidence_recording::create([
                    "case_id" => Input::get("case_id"),
                    "title" => Input::get("title"),
                    "user_id" => Auth::user()->id,
                    "details" => Input::get("details"),
                    "owner" => Input::get("owner"),
                    "date_recorded" => Input::get("date_recorded"),
                    "date_received" => Input::get("date_received"),
                    "file_name" => Input::get("file_name")
        ]);

        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/recordings", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
        Case_evidencesController::addCaseEvidence($evidence->case_id, "Recording", $evidence->id);
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " uploaded new recording to " . $evidence->case_id, "evidence_recordings");

        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $evidence = Evidence_recording::find($id);
        $evidence->title = Input::get("title");
        $evidence->details = Input::get("details");
        $evidence->owner = Input::get("owner");
        $evidence->date_received = Input::get("date_received");
        $evidence->date_recorded = Input::get("date_recorded");
        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/recordings", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " updated recording " . $evidence->id . "from " . $evidence->case_id, "evidence_recordings");

        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $evidence = Evidence_recording::find($id);
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " deleted recording" . $evidence->id . "from " . $evidence->case_id, "evidence_recordings");

        $evidence->delete();
        return Redirect::back();
    }

}
