<?php

class Resource_historiesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        
    }

    public function postRequest() {
        $history = Resource_history::create([
                    "resource_id" => Input::get("resource_id"),
                    "user_id" => Auth::user()->id,
                    "case_id" => Input::get("case_id"),
                    "amount" => Input::get("amount"),
                    "status" => "Pending",
                    "date_requested" => Input::get("date_requested"),
                    "date_due" => Input::get("date_due"),
                    "details" => Input::get("details"),
        ]);
        $rs = Resource::find($history->resource_id);
        
        $chief = User::where("division", "=", $rs->division)->where("job_title", "=", "Chief")->first();
        
        System_logsController::createLog($chief->id, $history->case_id, $history->id, " requested for resource -  ".Input::get('resource_id'), "resource_histories");
        return Redirect::back();
    }

    public function postApprove() {
        $ri = Input::get("request_id");
        $rg = Input::get("request_group");
        $r = Resource::find(Input::get("resource_id"));

        if ($ri != null) {
            $resource_history = Resource_history::find($ri);
            $resource_history->status = "Approved";
            $resource_history->save();
            
            
        
        System_logsController::createLog($resource_history->user_id, $resource_history->case_id, $resource_history->id, "request for resource approved - id ".$resource_history->id, "resource_histories");
        }

        for ($index = 0; $index < count($rg); $index++) {
            if ($rg[$index] != $ri) {
                $amount_taken = $r->amount;
                $resource_history = Resource_history::find($rg[$index]);
                $hcs = Resource_history::where('resource_id', "=", $r->id)->where('status', '=', 'Approved')->orWhere('status', '=', 'Received')->get();
                $d1temp = 0;
                $d2temp = 0;
                $date1 = Time::toNum($resource_history->date_requested);
                $date2 = Time::toNum($resource_history->date_due);


                foreach ($hcs as $hc) {
                    $d1tem = Time::toNum($hc->date_requested);
                    $d2temp = Time::toNum($hc->date_due);

                    if (($d1temp <= $date1 && $date1 <= $d2temp) || ($d1temp <= $date2 && $date2 <= $d2temp) || ($date1 <= $d1temp && $date2 >= $d2temp) || ($d1temp <= $date1 && $date2 <= $d2temp)) {
                        $amount_taken -= $hc->amount;
                    }
                }

                if ($amount_taken < $resource_history->amount) {
                    $resource_history->status = "Disapproved";
                    $resource_history->save();
                    
                    
        System_logsController::createLog($resource_history->user_id, $resource_history->case_id, $resource_history->id, "request for resource disapproved - id ".$resource_history->id, "resource_histories");
                }
            }
        }
        
        
        
        return Redirect::back();
    }
    
    public function postReceive($id = null){
        $rh = Resource_history::find($id);
        $rh->status = "Received";
        $rh->save();
        
        $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $rh->case_id, $rh->id, "Received resource item - id ".$rh->id, "resource_histories");
        return Redirect::back();
        
    }
    
    public function postReturn($id = null){
        $rh = Resource_history::find($id);
        $rh->status = "Returned";
        $rh->save();
         $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, $rh->case_id, $rh->id, "Returned resource item - id ".$rh->id, "resource_histories");
        return Redirect::back();
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $h = Resource_history::find($id);
                    $h->user_id = Auth::user()->id;
                    $h->case_id = Input::get("case_id");
                    $h->amount = Input::get("amount");
                    $h->status = "Pending";
                    $h->date_requested = Input::get("date_requested");
                    $h->date_due = Input::get("date_due");
                    $h->details = Input::get("details");
                    $h->save();
                    
                   return Redirect::back();
    }

    public function postDestroy($id = null) {
        
    }

}
