<?php

class Resource_historiesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        
    }

    public function postRequest() {
        $history = Resource_history::create([
                    "resource_id" => Input::get("resource_id"),
                    "user_id" => Auth::user()->id,
                    "case_id" => Input::get("case_id"),
                    "amount" => Input::get("amount"),
                    "status" => "Pending",
                    "date_requested" => Input::get("date_requested"),
                    "date_due" => Input::get("date_due"),
        ]);

        return Redirect::back();
    }

    public function getApprove($id = null) {
        $history = Resource_history::find($id);
        $history->status = "Approved";
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        
    }

}
