<?php
class Account extends Controller
{
    public function index()
    {
        $data['content'] = '';
        $data['component'] = 'account/login';
        $this->render('layouts/login', $data);
    }
    public function login()
    {
        $acc = new AccountModel;
        // $model = $this->model('HomeModel');
        if ((isset($_POST['login'])) && ($_POST['login'])) {
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $kq = $acc->checkuser($email, $pass);
            if ($kq['role_id'] == 1) {
                Session::data('user', $kq);
                header("location:" . _WEB_ROOT . '/quan-li/');
            } else if ($kq['role_id'] == 2) {
                Session::data('user', $kq);
                header("location: " . _WEB_ROOT . '');
            } else {
                $erros = "Tài khoản hoặc mật khẩu không tồn tại!";
                $_SESSION['erros'] = $erros;
                header("location: " . _WEB_ROOT . '/tai-khoan/');
            }
        }
    }
    function logout()
    {
        Session::delete('user');
        header("location: " . _WEB_ROOT);
    }
}
