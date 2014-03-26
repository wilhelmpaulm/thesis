<?php

class Form_dispositionsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $form = Form_disposition::create([
                    "case_id" => Input::get("case_id"),
                    "agent_id" => Auth::user()->id,
                    "synopsis" => Input::get("synopsis"),
                    "coc" => Input::get("coc"),
                    "ma" => Input::get("ma"),
                    "cop" => Input::get("cop"),
                    "mfe" => Input::get("mfe"),
                    "recommendations" => Input::get("recommendations"),
        ]);
        
        
        for ($index = 0; $index < count(Input::get("letter")); $index++) {
            $c_m = Disposition_anexx::create([
                "disposition_id" => $form->id,
                "letter" => Input::get('letter')[$index],
                "title" => Input::get('title')[$index],

            ]);
        }
        
        

        Case_form::create([
            "case_id" => $form->case_id,
            "agent_id" => Auth::user()->id,
            "division" => Auth::user()->division,
            "form_id" => $form->id,
            "form_type" => "Disposition",
        ]);

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " created form " . $form->id . "for " . $form->case_id, "form_dispositions");
        
        return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-ongoing/" . Input::get("case_id"));
    }

    public function getShow($id = null) {
        $data = [
            "d" => Form_disposition::find($id),
            "d_anexxes" => Disposition_anexx::where("disposition_id","=",$id)->get(),
        ];
        
        return View::make("gen.form_dispositions.show", $data);
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        $form = From_disposition::find($id);
        $c_m = Disposition_anexx::where("disposition_id", "=", $id)->get();
        $case_form = Case_from::where("form_id", "=", $id)->where("form_type", "=", "Disposition")->get();
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $form->case_id, $form->id, Auth::user()->id . " deleted form " . $form->id . "for " . $form->case_id, "form_dispositions");
        
        $form->delete();
        $c_m->delete();
        $case_form->delete();
        
        return Redirect::back();
    }

}
