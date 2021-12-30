<?php

class Notification {
    // TEST

    public static function get(){
        // validate
        $user_id = $_GET['user_id'];
        // create
        if ($user_id) {
           $get_content = DB::query("SELECT title, description, created, viewed FROM user_notifications WHERE user_id='".$user_id."';") or die (DB::error());
           // output
           return $get_content ;
        }         
    }
 
    public static function read(){     
        // validate   
        $user_id = $_POST['user_id'];
        // create
         if ($user_id) {
            $result = DB::query("SELECT * FROM user_notifications  WHERE user_id='".$user_id."';") or die (DB::error());
            $read_content =  json_encode($result->fetch_assoc(),JSON_HEX_QUOT);
            // output
            return $read_content; 
        } 
    }

}
