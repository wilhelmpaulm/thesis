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
                    "date_held" => Input::get("date_held"),
                    "date_released" => Input::get("date_released"),
                    "holder" => Input::get("holder"),
                    "location" => Input::get("location"),
                    "details" => Input::get("details"),
        ]);
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
        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $history = Evidence_history::find($id);
        $history->delete();
        return Redirect::back();
    }

}
