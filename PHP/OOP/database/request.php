<?php

class Request {

    public static function get($key)
    {
        if (isset($_REQUEST[$key])) {
            return $_REQUEST[$key];
        }
        return null;
    }
}
