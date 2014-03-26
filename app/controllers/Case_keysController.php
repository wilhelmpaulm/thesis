<?php

class Case_keysController extends BaseController {
    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $key = Case_key::create([
            "case_id" => Input::get("case_id"),
            "owner" => Input::get("owner"),
            "status" => "Active",
            "key" => substr(Hash::make(Input::get("owner"))."", 0,20),
        ]);
        
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $key->case_id, $key->id, Auth::user()->id . " created case key for " . $key->case_id, "case_keys");
 
        
        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
    }

    public function postUpdate($id = null) {
        
        
        $key = Case_key::find($id);
        $key->owner = Input::get("owner");
        $key->status = Input::get("status");
        $key->save();
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $key->case_id, $key->id, Auth::user()->id . " updated case key of " . $key->case_id, "case_keys");

        
        return Redirect::back();
        
    }

    public function postDestroy($id = null) {
        $key = Case_key::find($id);
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $key->case_id, $key->id, Auth::user()->id . " deleted case key from " . $key->case_id, "case_keys");

        
        $key->delete();
        return Redirect::back();
        
    }

}
