<?php

class Notification {

    // TEST

    // your code here ...
    public static function get(){
        $user_id = $_GET['user_id'];
        if ($user_id) {
           $get_content = DB::query("SELECT title, description, created, viewed FROM user_notifications WHERE user_id='".$user_id."';") or die (DB::error());
        } 
        return $get_content ;
    }


    

    public static function read(){        
        $user_id = $_POST['user_id'];
         if ($user_id) {
            $result = DB::query("SELECT * FROM user_notifications  WHERE user_id='".$user_id."';") or die (DB::error());
            $read_content =  json_encode($result->fetch_assoc(),JSON_HEX_QUOT);
        } 
        return $read_content; 
    }

}
