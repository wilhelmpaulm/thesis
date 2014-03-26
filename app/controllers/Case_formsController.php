<?php

class Case_formsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        if (Hash::check(Input::get("password"), Auth::user()->password)) {
            $key = Case_form::find($id);
            $key->status = Input::get("status");
            $key->save();
            System_logsController::createLog(Auth::user()->id, $key->case_id, $key->id, Auth::user()->id . " updated form status of " . $key->case_id . " to " . Input::get("status"), "case_keys");
        }
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
