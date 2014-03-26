<?php

class Case_observationsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $co = Case_observation::create([
            "user_id" => Auth::user()->id,
            "case_id" => Input::get("case_id"),
            "observation" => Input::get("observation"),
        ]);
        
        TagsController::addTags($co->id, "case_observations", Input::get("tags").", ".$co->created_at);
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, Input::get("case_id"), $co->id, Auth::user()->id . " added case observation to" . $co->id, "case_observations");

        
        
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
        $co  = Case_observation::find($id);
        Tag::where("reference_id", "=", $co->id)->where("table", "=", "case_observations")->delete();
        
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, Input::get("case_id"), $co->id, Auth::user()->id . " deleted case observation to" . $co->id, "case_observations");
        $co->delete();

        
        return Redirect::back();
    }

}
