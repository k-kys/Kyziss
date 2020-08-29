<?php
include_once './Utils/Session.php';
Loader::model('User');

class Auth
{
    public static function check()
    {
        return Session::get('auth') != null;
    }

    public static function id()
    {
        if (!self::check()) {
            return null;
        }
        return Session::get('auth')['id'];
    }

    public static function username()
    {
        if (!self::check()) {
            return null;
        }
        return Session::get('auth')['username'];
    }

    public static function getUser()
    {
        $userModel = new User;
        $currentUser = $userModel->getById(self::id());
        return $currentUser;
    }

    public function isAdmin()
    {
        $user = self::getUser();
        return $user['role'] == 1;
    }

    public function isManager()
    {
        $user = self::getUser();
        return $user['role'] == 2;
    }

    public function isEditor()
    {
        $user = self::getUser();
        return $user['role'] == 3;
    }
}
