<?php

class Time extends BaseController {

    public static function getAge($date) {
//        $birthDate = explode("/", $date);
        $birthDate = explode("-", $date);
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[2], $birthDate[0], $birthDate[1]))) > date("md") ? ((date("Y") - $birthDate[0]) - 1) : (date("Y") - $birthDate[0]));
        return "" . $age;
    }

    public static function compareDate($date1, $date2) {
        date_default_timezone_set('Asia/Hong_kong');

//        $d1 = explode("-", $date1);
//        $d2 = explode("-", $date2);

//        $date = new DateTime("" . $d1[2] . "-" . $d1[0] . "-" . $d1[1]);
//        $now = new DateTime("" . $d2[2] . "-" . $d2[0] . "-" . $d2[1]);
        $date = new DateTime($date1);
        $now = new DateTime($date2);
        $interval = $date->diff($now);
//        return $interval->format("%d");
        return $interval;

//        echo $man = $date->diff($now)->format("%y years %d days %h hours");
    }
    
    public static function getDate($date, $v){
        date_default_timezone_set('Asia/Hong_kong');
        $ff = "";
        if($v == "day"){
            $ff = "%d";
        }else if ($v == "month"){
            $ff = "$m";
        
        }else if ($v == "year"){
            $ff = "$y";
        }
        
        $d = new DateTime($date);
        return $d->format($ff);
        
    }
    
    
    public static function toNumString($date){
        return str_replace("-", "", substr($date, 0, 10))."";
        
    }
    public static function toNum($date){
        return str_replace("-", "", substr($date, 0, 10));
        
    }
    
    public static function getDateOnly($date){
        return substr( Time::toDate(str_replace("-", "",$date)), 0, 10);
        
    } 
    
    public static function toDate($date){
        $date = $date."";
        $date = substr($date, 0, 4).'-'.substr($date, 4, 2).'-'.substr($date, 6, 2);
        return $date;
        
    }
    
    public static function getDateToday(){
        date_default_timezone_set('Asia/Hong_kong');
        $d = new DateTime();
        return $d->format("Y").'-'.$d->format("m").'-'.$d->format("d"); 
    }
    
    public static function getDateTodayInt(){
        date_default_timezone_set('Asia/Hong_kong');
        $d = new DateTime();
        return (int) $d->format("Ymd").""; 
    }

    public static function hasPassed($date1) {
        date_default_timezone_set('Asia/Hong_kong');

//        $d1 = explode("/", $date1);
        

        $date = new DateTime($date1);
        $now = new DateTime();
        $interval = $date->diff($now);
        if($date < $now){
            return true;
        }else{
            return false;
        }

//        echo $man = $date->diff($now)->format("%y years %d days %h hours");
    }

//$birthDate = "5/11/1989";
////explode the date to get month, day and year
//$birthDate = explode("/", $birthDate);
////get age from date or birthdate
//$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2]));
//echo "" . $age;
//date_default_timezone_set('Asia/Hong_kong'); 
//
//$date = new DateTime("2013-11-05 16:53:07");
//$now = new DateTime("2013-11-05 16:53:08");
////echo $now->format("h:i:s A");
//echo $man =  $date->diff($now)->format("%h");
//if($man == 0){
//    
//    echo "pussy";
//}
}
