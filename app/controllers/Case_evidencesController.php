<?php

class Case_evidencesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public static function addCaseEvidence($case_id, $type, $evidence_id) {
        Case_evidence::create([
            "case_id"=> $case_id,
            "type"=> $type,
            "evidence_id"=> $evidence_id,
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
