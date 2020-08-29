<?php

class GetRequest {
    public static function get($key)
    {
        //wrap
        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
        return null;
    }

    public function all()
    {
    	return $_GET;
    }
}
