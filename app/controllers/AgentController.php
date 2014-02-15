<?php

class AgentController extends BaseController {

    public function postValidate() {
          var_dump($_POST);
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

    public function getCasesOngoing($num = null) {
        $data = [
            "num" => $num,
        ];
        return View::make("base.cases.ongoing", $data);
    }

    public function getCasesNonViable($num = null) {
        $data = [
            "num" => $num,
        ];
        return View::make("base.cases.nonviable", $data);
    }

    public function getCasesPending($num = null) {
        $data = [
            "num" => $num,
        ];
        return View::make("base.cases.pending", $data);
    }

    public function getCasesClosed($num = null) {
        $data = [
            "num" => $num,
        ];
        return View::make("base.cases.closed", $data);
    }

    public function getCelendar() {
        $data = [
//            "num" => $num,
        ];
        return View::make("base.calendar", $data);
    }

}
