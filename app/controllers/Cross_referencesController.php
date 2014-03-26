<?php

class Cross_referencesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $cr = Cross_reference::create([
                    "case_id" => Input::get("case_id"),
                    "reference_id" => Input::get("reference_id"),
                    "table" => Input::get("table"),
                    "tags_id" => Input::get("tags_id"),
        ]);
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $cr->case_id, $cr->id, Auth::user()->id . " added cross reference " . $cr->id . "to ".Input::get("table")." ". $cr->case_id, "cross_references");

        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        $cr = Cross_reference::find($id);
          $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $cr->case_id, $cr->id, Auth::user()->id . " deleted cross reference " . $cr->id . "to ".Input::get("table")." ". $cr->case_id, "cross_references");
        $cr->delete();

        return Redirect::back();
    }

}
