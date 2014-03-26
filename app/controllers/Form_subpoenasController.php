<?php

class Form_subpoenasController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $form = Form_subpoena::create([
                    "case_id" => Input::get("case_id"),
                    "agent_id" => Auth::user()->id,
                    "time" => Input::get("time"),
                    "location" => Input::get("location"),
                    "date_requested" => Input::get("date_requested"),
                    "date_signed" => Input::get("date_signed"),
                    "chief" => Input::get("chief"),
        ]);

        Case_form::create([
            "case_id" => $form->case_id,
            "agent_id" => Auth::user()->id,
            "form_id" => $form->id,
            "division" => Auth::user()->division,
            "form_type" => "Subpoena",
        ]);

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " created form " . $form->id . "for " . $form->case_id, "form_subpoenas");

        return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-ongoing/" . Input::get("case_id"));
    }

    public function getShow($id = null) {
        $data = [
            "subpoena" => Form_subpoena::find($id)
        ];
        
        return View::make("gen.form_subpoenas.show", $data);
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        $form = From_subpoena::find($id);
        $case_form = Case_from::where("form_id", "=", $id)->where("form_type", "=", "Subpoena")->get();
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " deleted form " . $form->id . "for " . $form->case_id, "form_subpoenas");
        
        $form->delete();
        $case_form->delete();
        
        return Redirect::back();
    }

}
