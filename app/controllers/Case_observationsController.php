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
        
        TagsController::addTags($co->id, "case_observations", Input::get("tags"));
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
        
    }

}
