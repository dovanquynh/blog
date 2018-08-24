<?php
class Validate {
    public static function isNumber($str){
        return preg_match('/^[0-9]+$/', $str);
    }
    public static function isPhone($str) {
        return preg_match('/^[0-9]{9.11}$/', $str);
    }
    public static function isPwd($str){
        return preg_match('/^[a-zA-Z0-9\@\#\-\_]{6,15}/', $str);
    }
    public static function isEmail($str){
        return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\'[a-z0-9-]+)*/', $str);
    }
}