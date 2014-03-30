<?php

class KasesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        
    }

    public function postDetails($id = null) {
        if (Hash::check(Input::get("password"), Auth::user()->password)) {
            $case = Kase::find($id);
            $case->details = Input::get("details");
            $case->save();
            
            $ctags = Case_type_tag::where("case_id", "=", $case->id)->delete();

            for ($index = 0; $index < count(Input::get("type")); $index++) {
                Case_type_tag::create([
                    "case_id" => $case->id,
                    "type" => Input::get("type")[$index]
                ]);
            }
            
            
            $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
            System_logsController::createLog($chief->id, $case->id, $case->id, Auth::user()->id . " edited details of the case " . $case->id, "kases");
        }
        return Redirect::back();
    }

    public function postClose($id = null) {
        if (Hash::check(Input::get("password"), Auth::user()->password)) {
            $case = Kase::find($id);
            $case->status = Input::get("status");
            $case->save();
            $case->details = "<strong>" . $case->updated_at . " - Case Closed </strong><hr><strong>Reason for closing </strong> <br>" . Input::get("reason") . "<hr> " . $case->details;
            $case->save();



            $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
            System_logsController::createLog($chief->id, $case->id, $case->id, Auth::user()->id . " closed case " . $case->id, "kases");

            return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-ongoing");
        }
        return Redirect::back();
    }

    public function postReassign($id = null) {
        if (Hash::check(Input::get("password"), Auth::user()->password)) {
            $case = Kase::find($id);
            $case->status = "Ongoing";
            $case->agent_id = Input::get("agent_id");
            $case->save();
            $case->details = "<strong>" . $case->updated_at . " - Case Assigned </strong><hr><strong>Case assigned to</strong> <br>" . $case->agent_id . "<hr> " . $case->details;
            $case->save();



             $ctags = Case_type_tag::where("case_id", "=", $case->id)->delete();

            for ($index = 0; $index < count(Input::get("type")); $index++) {
                Case_type_tag::create([
                    "case_id" => $case->id,
                    "type" => Input::get("type")[$index]
                ]);
            }
            System_logsController::createLog($case->agent_id, $case->id, $case->id, Auth::user()->id . " assigned case " . $case->id, "kases");
            return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-ongoing");
        }
        return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-assign");
    }

    public function postReopen($id = null) {
        if (Hash::check(Input::get("password"), Auth::user()->password)) {
            $case = Kase::find($id);
            $case->status = "Ongoing";
            $case->save();
            $case->details = "<strong>" . $case->updated_at . " - Case Reopened </strong><hr><strong>Reason for reopening</strong> <br>" . Input::get("reason") . "<hr> " . $case->details;
            $case->save();

             $ctags = Case_type_tag::where("case_id", "=", $case->id)->delete();

            for ($index = 0; $index < count(Input::get("type")); $index++) {
                Case_type_tag::create([
                    "case_id" => $case->id,
                    "type" => Input::get("type")[$index]
                ]);
            }



            System_logsController::createLog($case->agent_id, $case->id, $case->id, Auth::user()->id . " reoppened case " . $case->id, "kases");
            return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-closed");
        }
        return Redirect::back();
    }

    public function postAssign($id = null) {
        $case = Kase::find($id);
        $case->status = "Ongoing";
        $case->agent_id = Input::get("agent_id");
        $case->save();


        System_logsController::createLog($case->agent_id, $case->id, $case->id, Auth::user()->id . " assigned case " . $case->id, "kases");
        return Redirect::to(strtolower(Auth::user()->job_title) . "/cases-assign");
    }

    public function getShow($id = null) {
        $data = [
//            "evidence_recordings" => Evidence_recording::where("case_id", "=", $id)->get(),
//            "evidence_pictures" => Evidence_picture::where("case_id", "=", $id)->get(),
//            "evidence_videos" => Evidence_video::where("case_id", "=", $id)->get(),
//            "evidence_documents" => Evidence_document::where("case_id", "=", $id)->get(),
//            "evidence_objects" => Evidence_object::where("case_id", "=", $id)->get(),
            "case" => Kase::find($id),
            "case_evidences" => Case_evidence::where("case_id", "=", $id)->get(),
            "case_subjects" => Case_subject::where("case_id", "=", $id)->get(),
            "case_type_tags" => Case_type_tag::where("case_id", "=", $id)->get(),
            "case_victims" => Case_victim::where("case_id", "=", $id)->get(),
            "evidence_recordings" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Recording")->join('evidence_recordings', 'case_evidences.evidence_id', '=', 'evidence_recordings.id')->get(),
            "evidence_pictures" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Picture")->join('evidence_pictures', 'case_evidences.evidence_id', '=', 'evidence_pictures.id')->get(),
            "evidence_videos" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Video")->join('evidence_videos', 'case_evidences.evidence_id', '=', 'evidence_videos.id')->get(),
            "evidence_documents" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Document")->join('evidence_documents', 'case_evidences.evidence_id', '=', 'evidence_documents.id')->get(),
            "evidence_objects" => DB::table('case_evidences')->where("case_evidences.case_id", "=", $id)->where("case_evidences.type", "=", "Object")->join('evidence_objects', 'case_evidences.evidence_id', '=', 'evidence_objects.id')->get(),
            "case_observations" => Case_observation::where("user_id", "=", Kase::find($id)->agent_id)->where("case_id", "=", Kase::find($id)->id)->get(),
            "case_keys" => Case_key::where("case_id", "=", $id)->get(),
        ];
        if ($id != null) {
            $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
            System_logsController::createLog($chief->id, $id, $id, Auth::user()->id . " viewed case " . $id, "kases");
        }
        return View::make("gen.kases.show", $data);
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        
    }

}
