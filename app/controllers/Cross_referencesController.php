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
        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        Cross_reference::find($id)->delete();
        return Redirect::back();
    }

}
