<?php
Loader::model('User');

class PageController {
    public function login()
    {
        include ('./views/page/login.php');
    }

    public function postLogin()
    {
        $username = PostRequest::get('username');
        $password = md5(PostRequest::get('password')); // Hiểu chỗ này k??

        $userModel = new User;
        $loginResult = $userModel->login($username, $password);
        if ($loginResult === false) {
            FlashMessage::danger('Đăng nhập thất bại');
            return header('Location: http://mvc.local/?controller=page&action=login');
        }
        // authentication == login
        // authorization
        FlashMessage::success('Đăng nhập thành công');
        Session::set('auth', $loginResult);
        return header('Location: http://mvc.local/');
    }

    public function register()
    {
        return View::render('page.register');
    }

    public function ptb2()
    {
        View::render('page.ptb2');
    }

    public function postPtb2()
    {
        $a = PostRequest::get('a');
        $b = PostRequest::get('b');
        $c = PostRequest::get('c');

        sleep(2);
        $delta = $b * $b - 4 * $a * $c;
        $data = [];
        if ($delta < 0) {
            $data = [
                'so_nghiem' => 0
            ];
        } elseif ($delta == 0) {
            $data = [
                'so_nghiem' => 1,
                'nghiem' => [(-$b / 2 * $a)]
            ];
        } else {
            $data = [
                'so_nghiem' => 2,
                'nghiem' =>[
                    (-$b - sqrt($delta)) / (2 * $a),
                    (-$b + sqrt($delta)) / (2 * $a)
                ]
            ];
        }
        echo json_encode($data);
    }

    public function logout()
    {
        Session::deleteAll();
        return header('Location: http://mvc.local/?controller=page&action=login');
    }
}
