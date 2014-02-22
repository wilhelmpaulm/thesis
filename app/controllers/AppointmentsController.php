<?php

class AppointmentsController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $appointment = Appointment::create([
                    "user_id" => Auth::user()->id,
                    "title" => Input::get("title"),
                    "body" => Input::get("body"),
                    "date_start" => Input::get("date_start"),
                    "date_end" => Input::get("date_end"),
        ]);

        $appointment_recipients = Appointment_recipient::create([
                    "appointment_id" => $appointment->id,
                    "user_id" => Auth::user()->id
        ]);
        for ($index = 0; $index < count(Input::get("recipient_id")); $index++) {
            $appointment_recipients = Appointment_recipient::create([
                        "appointment_id" => $appointment->id,
                        "user_id" => Input::get("recipient_id")[$index]
            ]);
        }

        return Redirect::to("agent/calendar");
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $task = Appointment::find($id);
        $task->title = Input::get("title");
        $task->body = Input::get("body");
        $task->date_start = Input::get("date_start");
        $task->date_end = Input::get("date_end");
        $task->save();
        
        $ar = Appointment_recipient::where("appointment_id", "=", $task->id)->delete();
        $appointment_recipients = Appointment_recipient::create([
                    "appointment_id" => $task->id,
                    "user_id" => Auth::user()->id
        ]);
        for ($index = 0; $index < count(Input::get("recipient_id")); $index++) {
            $appointment_recipients = Appointment_recipient::create([
                        "appointment_id" => $task->id,
                        "user_id" => Input::get("recipient_id")[$index]
            ]);
        }


        return Redirect::to("agent/calendar");
    }

    public function postDestroy($id = null) {
        $task = Appointment::find($id);
        $ar = Appointment_recipient::where("appointment_id", "=", $task->id)->delete();
        $task->delete();
        return Redirect::to("agent/calendar");
    }

}
