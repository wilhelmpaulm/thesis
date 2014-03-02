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
        ]);

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
        }

        for ($index = 0; $index < count($rg); $index++) {
            if ($rg[$index] != $ri) {
                $amount_taken = $r->amount;
                $resource_history = Resource_history::find($rg[$index]);
                $hcs = Resource_history::where('resource_id', "=", $r->id)->where('status', '=', 'Approved')->get();
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
                }
            }
        }
        return Redirect::back();
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        
    }

}
