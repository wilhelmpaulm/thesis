<?php

class MessagesController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $message = Message::create([
                    "subject" => Input::get("subject"),
                    "sender" => Auth::user()->id,
        ]);
        
        

        Message_recipient::create([
            "message_id" => $message->id,
            "user_id" => Auth::user()->id
        ]);
        System_logsController::createLog(Auth::user()->id, 0, $message->id, "created message with subject ".Input::get("subject"), "messages");
        for ($index = 0; $index < count(Input::get("recipient_id")); $index++) {
            Message_recipient::create([
                "message_id" => $message->id,
                "user_id" => Input::get("recipient_id")[$index]
            ]);
            System_logsController::createLog(Input::get("recipient_id")[$index], 0, $message->id, "received message with subject ".Input::get("subject"), "messages");
        }

        Message_log::create([
            "message_id" => $message->id,
            "user_id" => Auth::user()->id,
            "body" => Input::get("body")
        ]);

        return Redirect::back();
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        
    }

    public function postDestroy($id = null) {
        
    }

    public function postReply($id = null) {
        $ml = Message_log::create([
            "message_id" => $id,
            "user_id" => Auth::user()->id,
            "body" => Input::get("body")
        ]);
        $mr = Message_recipient::where("message_id", "=", $ml->id)->get();
        foreach($mr as $r){
            System_logsController::createLog($r->user_id, 0, $r->message_id, "received message with from ".Auth::user()->id, "messages");
            
            
        }
        
        return Redirect::back();
    }

}
