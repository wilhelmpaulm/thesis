<?php

class ResourcesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $r = Resource::create([
                    "name" => Input::get("name"),
                    "status" => Input::get("status"),
                    "details" => Input::get("details"),
                    "amount" => Input::get("amount"),
                    "division" => Auth::user()->division,
                    "category" => Input::get("category")
        ]);

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, 0, $r->id, Auth::user()->id . " added new resource with ID " . $r->id, "resources");
   
        return Redirect::back();
        
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $r = Resource::find($id);
        $r->name = Input::get("name");
        $r->status = Input::get("status");
        $r->details = Input::get("details");
        $r->amount = Input::get("amount");
        $r->category = Input::get("category");
        $r->save();

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, 0, $r->id, Auth::user()->id . " updated resource with ID " . $r->id, "resources");
        
        return Redirect::back();
        }

    public function postDestroy($id = null) {
        $r = Resource::find($id);

        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, 0, $r->id, Auth::user()->id . " deleted resource with ID " . $r->id, "resources");
        
        $r->delete();
        return Redirect::back();
        
    }

}
