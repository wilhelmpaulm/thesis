<?php

class UsersController extends BaseController {

    public function postStatus($id = null) {
        if(Hash::check(Input::get("password"), Auth::user()->password) && $id!= Auth::user()->id){
        $u = User::find($id);
        $u->status = Input::get("status");
        $u->save();
        }
        
        return Redirect::back();
    }

}
