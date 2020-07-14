<?php

class Session
{
    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    public static function all()
    {
        return $_SESSION;
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return true;
    }

    public static function del($key)
    {
        unset($_SESSION[$key]);
        return true;
    }

    public static function deleteAll()
    {
        session_destroy();
        return true;
    }

}
