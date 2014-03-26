<?php

class Form_coordinationsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $form = Form_coordination::create([
                    "case_id" => Input::get("case_id"),
                    "agent_id" => Auth::user()->id,
                    "area" => Input::get("area"),
                    "time" => Input::get("time"),
                    "date" => Input::get("date"),
        ]);
        
        
        for ($index = 0; $index < count(Input::get("agency")); $index++) {
            $c_m = Coordination_member::create([
                "coordination_id" => $form->id,
                "agency" => Input::get('agency')[$index],
                "name" => Input::get('name')[$index],

            ]);
        }
        
        for ($index = 0; $index < count(Input::get("vehicle")); $index++) {
            $c_v = Coordination_vehicle::create([
                "coordination_id" => $form->id,
                "vehicle" => Input::get('vehicle')[$index],
                "model" => Input::get('model')[$index],
                "color" => Input::get('color')[$index],
                "plate_no" => Input::get('plate_no')[$index],

            ]);
        }

        Case_form::create([
            "case_id" => $form->case_id,
            "agent_id" => Auth::user()->id,
            "form_id" => $form->id,
            "division" => Auth::user()->division,
            "form_type" => "Coordination",
        ]);

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " created form " . $form->id . "for " . $form->case_id, "form_coordinations");
        
        return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-ongoing/" . Input::get("case_id"));
    }

    public function getShow($id = null) {
        $data = [
            "c" => Form_coordination::find($id),
            "c_members" => Coordination_member::where("coordination_id","=",$id)->get(),
            "c_vehicles" => Coordination_vehicle::where("coordination_id","=",$id)->get(),
        ];
        
        return View::make("gen.form_coordinations.show", $data);
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        $form = From_coordination::find($id);
        $c_m = Coordination_member::where("coordination_id", "=", $id)->get();
        $c_v = Coordination_vehicle::where("coordination_id", "=", $id)->get();
        $case_form = Case_from::where("form_id", "=", $id)->where("form_type", "=", "Coordination")->get();
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " deleted form " . $form->id . "for " . $form->case_id, "form_coordinations");
        
        $form->delete();
        $c_m->delete();
        $c_v->delete();
        $case_form->delete();
        
        return Redirect::back();
    }


}
