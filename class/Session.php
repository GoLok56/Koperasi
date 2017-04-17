<?php

class Session{

    public static function set($name, $value){
        $_SESSION[$name] = $value;
    }

    public static function get($name){
        return $_SESSION[$name];
    }

    public static function exist($name){
        return isset($_SESSION[$name]);
    }

    public static function unset($name){
        unset($_SESSION[$name]);
    }

}

 ?>
