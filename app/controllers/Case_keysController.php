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
            "key" =>  Hash::make(Input::get("owner")),
        ]);
        
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
        
        return Redirect::back();
        
    }

    public function postDestroy($id = null) {
        $key = Case_key::find($id);
        $key->delete();
        
        return Redirect::back();
        
    }

}
