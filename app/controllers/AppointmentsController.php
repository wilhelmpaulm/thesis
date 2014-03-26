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
            System_logsController::createLog(Input::get("recipient_id")[$index], 0, $appointment->id, Auth::user()->id . " created an appointment - " . Input::get('title'), "appointments");
        }

        return Redirect::to(strtolower(Auth::user()->job_title) . "/calendar");
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
            System_logsController::createLog(Input::get("recipient_id")[$index], 0, $task->id, Auth::user()->id . " updated appointment - " . Input::get('title'), "appointments");
        }


        return Redirect::to(strtolower(Auth::user()->job_title) . "/calendar");
    }

    public function postDestroy($id = null) {
        $task = Appointment::find($id);
        $ar = Appointment_recipient::where("appointment_id", "=", $task->id)->delete();
        $ar = Appointment_recipient::where("appointment_id", "=", $task->id)->get();
        foreach ($ar as $r) {
            System_logsController::createLog($r->user_id, 0, $task->id, Auth::user()->id . " closed appointment ", "appointments");
        }
        $task->delete();
        return Redirect::to(strtolower(Auth::user()->job_title) . "/calendar");
    }

    public function postReject($id = null) {
        $task = Appointment::find($id);
        $invite = Appointment_recipient::where("user_id", "=", Auth::user()->id)->where("appointment_id", "=", $id)->first();
        $invite->delete();

        System_logsController::createLog($task->user_id, 0, $task->id, Auth::user()->id . " has rejected invitation to the appointment", "appointments");
        
        return Redirect::to(strtolower(Auth::user()->job_title) . "/calendar");
    }

}
