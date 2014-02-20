<?php

class Evidence_historiesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $history = Evidence_history::create([
                    "history_id" => Input::get("history_id"),
                    "type" => Input::get("type"),
                    "date_held" => Input::get("date_held"),
                    "date_released" => Input::get("date_released"),
                    "holder" => Input::get("holder"),
                    "location" => Input::get("location"),
                    "details" => Input::get("details"),
        ]);

    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $history = Evidence_history::find($id);
        $history->evidence_id = Input::get("evidence_id");
        $history->date_held = Input::get("date_held");
        $history->date_released = Input::get("date_released");
        $history->holder = Input::get("holder");
        $history->location = Input::get("location");
        $history->detiails = Input::get("details");
        $history->save();
    }

    public function postDestroy($id = null) {
        $history = Evidence_history::find($id);
        $history->delete();
    }

}
