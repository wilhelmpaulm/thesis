<?php

class Evidence_objectsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $evidence = Evidence_object::create([
                    "case_id" => Input::get("case_id"),
                    "title" => Input::get("title"),
                    "details" => Input::get("details"),
            "user_id" => Auth::user()->id,
                    "owner" => Input::get("owner"),
                    "length" => Input::get("length"),
                    "width" => Input::get("width"),
                    "height" => Input::get("height"),
                    "date_received" => Input::get("date_received"),
                    "file_name" => Input::get("file_name")
        ]);

        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/objects", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
        Case_evidencesController::addCaseEvidence($evidence->case_id, "Object", $evidence->id);
          $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " uploaded object record" . $evidence->id . "to " . $evidence->case_id, "evidence_objects");

        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $evidence = Evidence_object::find($id);
        $evidence->title = Input::get("title");
        $evidence->details = Input::get("details");
        $evidence->owner = Input::get("owner");
        $evidence->length = Input::get("length");
        $evidence->width = Input::get("width");
        $evidence->height = Input::get("height");
        $evidence->date_received = Input::get("date_received");
        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/objects", "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
         $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " updated object record" . $evidence->id . "to " . $evidence->case_id, "evidence_objects");

        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $evidence = Evidence_object::find($id);
         $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $evidence->case_id, $evidence->id, Auth::user()->id . " deleted object record " . $evidence->id . "to " . $evidence->case_id, "evidence_objects");

        $evidence->delete();
        return Redirect::back();
    }

}
