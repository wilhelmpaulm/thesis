<?php

class ComplaintsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $complaint = Complaint::create([
            "nature_act" => ""
        ]);
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        
    }

}
