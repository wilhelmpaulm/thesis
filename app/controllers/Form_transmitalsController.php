<?php

class Form_transmitalsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $form = Form_transmital::create([
                    "case_id" => Input::get("case_id"),
                    "agent_id" => Auth::user()->id,
                    "date" => Input::get("date"),
                    "header" => Input::get("header"),
                    "to" => Input::get("to"),
                    "introduction" => Input::get("introduction"),
                    "crime" => Input::get("crime"),
                    "how" => Input::get("how"),
                    "closing" => Input::get("closing"),
        ]);
        
        
        for ($index = 0; $index < count(Input::get("letter")); $index++) {
            $c_m = Transmital_anexx::create([
                "transmital_id" => $form->id,
                "letter" => Input::get('letter')[$index],
                "title" => Input::get('title')[$index],
            ]);
        }
        
        

        Case_form::create([
            "case_id" => $form->case_id,
            "agent_id" => Auth::user()->id,
            "form_id" => $form->id,
            "division" => Auth::user()->division,
            "form_type" => "Transmital",
        ]);

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " created form " . $form->id . "for " . $form->case_id, "form_transmitals");


        return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-ongoing/" . Input::get("case_id"));
    }

    public function getShow($id = null) {
        $data = [
            "t" => Form_transmital::find($id),
            "t_anexxes" => Transmital_anexx::where("transmital_id","=",$id)->get(),
        ];
        
        return View::make("gen.form_transmitals.show", $data);
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
        
    }

    public function postDestroy($id = null) {
        $form = From_transmital::find($id);
        $c_m = Transmital_anexx::where("transmital_id", "=", $id)->get();
        $case_form = Case_from::where("form_id", "=", $id)->where("form_type", "=", "Transmital")->get();
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " deleted form " . $form->id . "for " . $form->case_id, "form_transmitals");
        
        $form->delete();
        $c_m->delete();
        $case_form->delete();
        
        return Redirect::back();
    }

}
