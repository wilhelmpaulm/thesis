<?php

class Case_requirementsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $r = Case_requirement::create([
                    "case_id" => Input::get("case_id"),
                    "requirement" => Input::get("requirement"),
                    "date_requested" => Input::get("date_requested"),
                    "date_due" => Input::get("date_due"),
                    "status" => "Active",
        ]);

        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $r = Case_requirement::find($id);
        $r->requirement = Input::get("requirement");
        $r->date_requested = Input::get("date_requested");
        $r->date_due = Input::get("date_due");
        $r->status = Input::get("status");
        $r->save();

        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $r = Case_requirement::find($id);
        $r->delete();
        
        return Redirect::back();
    }

}
