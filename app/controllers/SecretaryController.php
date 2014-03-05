<?php

class SecretaryController extends BaseController {

    
    public function postValidate() {
        var_dump($_POST);
    }

    public function postMemo() {
        $u = User::find(Auth::user()->id);
        $u->memo = Input::get("memo");
        $u->save();
        
        return Redirect::back();
    }

    public function getIndex() {
        return View::make("content.test");
//        return Redirect::to("agent/dashboard");
    }

    public function getDashboard($num = NULL) {
        $data = [
            "num" => $num,
        ];
        return View::make("base.agent.dashboard", $data);
    }

    public function getCasesAdd() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.cases.add", $data);
    }

    public function getCasesOngoing($id = null) {
        $data = [
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
        ];
        return View::make("base.cases.ongoing", $data);
    }

    public function getCasesNonViable($id = null) {
        $data = [
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
        ];
        return View::make("base.cases.nonviable", $data);
    }

    public function getCasesPending($id = null) {
        $data = [
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
        ];
        return View::make("base.cases.pending", $data);
    }

    public function getCasesClosed($id = null) {
        $data = [
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
        ];
        return View::make("base.cases.closed", $data);
    }

    public function getCalendar() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.calendar", $data);
    }

    public function getResourcesRequest() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.resources.request", $data);
    }

    public function getResourcesCurrent() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.resources.current", $data);
    }

    public function getMessages($id = null) {
        $data = [
//            "messages" => DB::table('messages')
//                ->leftJoin('message_recipients','messages.id', '=', 'message_recipients.message_id')
//                ->where("message_recipients.user_id", "=", Auth::user()->id)
//                ->get(),
            "messages" => Message_recipient::where("user_id", "=", Auth::user()->id)->get(),
            "message" => Message::find($id),
            "message_logs" => Message_log::where("message_id", "=", $id)->get(),
            "message_recipients" => Message_recipient::where("message_id", "=", $id)->get(),
        ];
        return View::make("base.messages", $data);
    }

}
