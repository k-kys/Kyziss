<?php

class PostRequest {
    public static function get($key)
    {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
        return null;
    }

    public static function all()
    {
        return $_POST;
    }


    public function only($keys = [])
    {
        $return = [];
        $allData = self::all();
        foreach ($keys as $key) {
            if (isset($allData[$key])) {
                $return[$key] = $allData[$key];
            } else {
                $return[$key] = null;
            }
        }

        return $return;
    }
}
