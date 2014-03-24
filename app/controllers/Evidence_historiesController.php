<?php

class Evidence_historiesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $history = Evidence_history::create([
                    "evidence_id" => Input::get("evidence_id"),
                    "type" => Input::get("type"),
//            "user_id" => Auth::user()->id,
                    "date_held" => Input::get("date_held"),
                    "date_released" => Input::get("date_released"),
                    "holder" => Input::get("holder"),
                    "location" => Input::get("location"),
                    "details" => Input::get("details"),
        ]);
        
           $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
       System_logsController::createLog($chief->id, Kase::find(Case_evidence::where("type", "=", $history->type)->where("evidence_id", "=", $history->evidence_id)->first()->case_id)->id, $history->id, Auth::user()->id . " Added evidence history of " . $history->id, "evidence_histories");

        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $history = Evidence_history::find($id);
        $history->date_held = Input::get("date_held");
        $history->date_released = Input::get("date_released");
        $history->holder = Input::get("holder");
        $history->location = Input::get("location");
        $history->details = Input::get("details");
        $history->save();
             $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, Kase::find(Case_evidence::where("type", "=", $history->type)->where("evidence_id", "=", $history->evidence_id)->first()->case_id)->id, $history->id, Auth::user()->id . " Updated evidence history of " . $history->id, "evidence_histories");

        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $history = Evidence_history::find($id);
             $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, Kase::find(Case_evidence::where("type", "=", $history->type)->where("evidence_id", "=", $history->evidence_id)->first()->case_id)->id, $history->id, Auth::user()->id . " Deleted evidence history of " . $history->id, "evidence_histories");
        $history->delete();
        return Redirect::back();
    }

}
