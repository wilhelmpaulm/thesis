<?php

class Form_subpoenasController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $form = Form_subpoena::create([
            "case_id" => Input::get("case_id"),
            "time" => Input::get("time"),
            "location" => Input::get("location"),
            "date_requested" => Input::get("date_requested"),
            "date_signed" => Input::get("date_signed"),
            "chief" => Input::get("chief"),
        ]);
        
        
        return Redirect::to(strtolower(Auth::user()->job_title)."/cases-ongoing/".Input::get("case_id"));
    }

    public function getShow($id = null) {
        return View::make("forms.subpoena");
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        
    }

}
