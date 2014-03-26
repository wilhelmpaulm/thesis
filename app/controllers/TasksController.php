<?php

class TasksController extends BaseController {

    public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        $task = Task::create([
                    "user_id" => Auth::user()->id,
                    "title" => Input::get("title"),
                    "body" => Input::get("body"),
                    "date_start" => Input::get("date_start"),
                    "date_end" => Input::get("date_end"),
        ]);
        System_logsController::createLog(Auth::user()->id, 0, $task->id, "created a task for ".Input::get('date_start'), "tasks");

        return Redirect::to("agent/calendar");
    }

    public function getShow($id = null) {
        
    }

    public function getEdit($id = null) {
        
    }

    public function postUpdate($id = null) {
        $task = Task::find($id);
        $task->title = Input::get("title");
        $task->body = Input::get("body");
        $task->date_start = Input::get("date_start");
        $task->date_end = Input::get("date_end");
        $task->save();
        
        System_logsController::createLog(Auth::user()->id, 0, $task->id, "updated task ".$id, "tasks");
        return Redirect::to("agent/calendar");
    }

    public function postDestroy($id = null) {
        $task = Task::find($id);
        System_logsController::createLog(Auth::user()->id, 0, $task->id, "deleted task ".$id, "tasks");
        $task->delete();
        return Redirect::to("agent/calendar");
    }

}
