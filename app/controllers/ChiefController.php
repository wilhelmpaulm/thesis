<?php

class ChiefController extends BaseController {

    public function getIndex() {
        return Redirect::to("agent/dashboard");
    }

    public function getDashboard($num = NULL) {
        $data = [
            "num" => $num,
        ];
        return View::make("base.chief.dashboard", $data);
    }

}
