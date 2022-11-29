<?php 


class Session{
    
    public static function setSession($key,$value){
        $_SESSION[$key] = $value;
    }


    public static function getSession($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
        return null;
    }


    public static function flashSession($key){
        $value= '';
        if(isset($_SESSION[$key])){
            $value = $_SESSION[$key];
            unset($_SESSION[$key]);
        }
        return $value;
    }
}