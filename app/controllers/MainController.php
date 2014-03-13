<?php

class MainController extends BaseController {

    public function getIndex() {
        return View::make('base.index');
    }

    public function getCaseTracking() {
        return View::make('base.tracking');
    }

    public function postLogin() {
        Auth::attempt(array('id' => Input::get("username"), 'password' => Input::get("password")));
        if (Auth::user()) {
//            BadgesController::addBadge(Auth::user()->id, 1);
            $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
            System_logsController::createLog($chief->id, 0, 0, "Logged in the system", "main");
            return Redirect::to('agent/dashboard');
        } else {
            return Redirect::to('index');
        }
    }

    public function getLogout() {
            $chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
        System_logsController::createLog($chief->id, 0, 0, "Logged out of the system", "main");
        Auth::logout();
        return Redirect::to("index");
    }

    public function postSignUp() {
        $u = new User;
        $u->last_name = Input::get("last_name");
        $u->first_name = Input::get("first_name");
        $u->email = Input::get("email");
        $u->description = Input::get("description");
        $u->birthdate = Input::get("birthdate");
        $u->address = Input::get("address");
        $u->x = Input::get("x");
        $u->y = Input::get("y");
        $u->gender = Input::get("gender");
        $u->password = Hash::make(Input::get("password"));
        $u->save();


        if (Input::hasFile('picture')) {
            Input::file('picture')->move(public_path() . "/users/picture", "picture_" . $u->id . "." . Input::file('picture')->getClientOriginalExtension());
            $u->picture = "picture_" . $u->id . "." . Input::file('picture')->getClientOriginalExtension();
        }
        $u->save();

        Auth::loginUsingId($u->id);
//        Auth::attempt(array('email' => $u->email, 'password' => $u->password));

        return Redirect::to("me/index");
    }
    
    
    public function getAlertsNotifications(){
        return View::make("alerts.notifications");
    }
    public function getAlertsMessages(){
        return View::make("alerts.messages");
    }
    

}
