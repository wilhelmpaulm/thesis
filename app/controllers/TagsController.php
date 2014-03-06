<?php

class TagsController extends BaseController {

	public function getIndex() {
        
    }

    public function getCreate() {
        
    }

    public function postStore() {
        
    }
    
    public static function getTags($reference_id, $table){
        return Tag::where("reference_id", "=", $reference_id)->where("table", "=", $table)->first();
    }
    public static function addTags($reference_id, $table, $tags){
        Tag::create([
           "reference_id" => $reference_id, 
           "table" => $table, 
           "tags" => $tags, 
           "user_id" => Auth::user()->id, 
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
