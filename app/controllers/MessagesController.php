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

        for ($index = 0; $index < count(Input::get("recipient_id")); $index++) {
            Message_recipient::create([
                "message_id" => $message->id,
                "user_id" => Input::get("recipient_id")[$index]
            ]);
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
        Message_log::create([
            "message_id" => $id,
            "user_id" => Auth::user()->id,
            "body" => Input::get("body")
        ]);
        
        return Redirect::back();
    }

}
