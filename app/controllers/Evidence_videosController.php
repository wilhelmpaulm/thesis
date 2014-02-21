<?php

class Evidence_videosController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $evidence = Evidence_video::create([
                    "case_id" => Input::get("case_id"),
                    "title" => Input::get("title"),
                    "details" => Input::get("details"),
                    "owner" => Input::get("owner"),
                    "date_recorded" => Input::get("date_recorded"),
                    "date_received" => Input::get("date_received"),
                    "file_name" => Input::get("file_name")
        ]);

        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/videos", "" . $complainant->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $evidence = Evidence_video::find($id);
        $evidence->title = Input::get("title");
        $evidence->details = Input::get("details");
        $evidence->owner = Input::get("owner");
        $evidence->date_received = Input::get("date_received");
        $evidence->date_recorded = Input::get("date_recorded");
        if (Input::hasFile('file_name')) {
            Input::file('file_name')->move(public_path() . "/nbi/evidences/videos", "" . $complainant->id . "." . Input::file('file_name')->getClientOriginalExtension());
            $evidence->file_name = "" . $evidence->id . "." . Input::file('file_name')->getClientOriginalExtension();
        }
        $evidence->save();
        return Redirect::back();
    }

    public function postDestroy($id = null) {
        $evidence = Evidence_video::find($id);
        $evidence->delete();
        return Redirect::back();
    }

}
