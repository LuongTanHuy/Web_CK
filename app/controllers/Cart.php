<?php
class Cart extends Controller
{
    public function index()
    {
        if ($user = Session::data('user')) {
            $model = $this->model('CartModel');
            $cart = $model->getCartItems($user['id']);
            if (!empty($cart)) {
                Session::data('cart', $cart);
            } else {
                Session::delete('cart');
            }
        }

        $data['content'][''] = '';
        $data['component'] = 'cart/index';
        $this->render('layouts/main_layout', $data);
    }

    public function add(...$params)
    {
        $productId = $params[0];

        // người dùng đã đăng nhập
        if ($user = Session::data('user')) {
            $model = $this->model('CartModel');

            $model->addProduct($user['id'], $productId);
            Session::data('cart', $model->getCartItems($user['id']));
            in(Session::data('cart'));
        }
        header('Location: ' . _WEB_ROOT . '/gio-hang/');
    }

    public function delete(...$params)
    {
        $productId = $params[0];

        if ($user = Session::data('user')) {
            $model = $this->model('CartModel');
            $model->deleteProduct($user['id'], $productId);
        }
        header('Location: ' . _WEB_ROOT . '/gio-hang/');
    }
}
