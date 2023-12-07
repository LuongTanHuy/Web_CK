<?php

class Product extends Controller
{
    private $productModel;

    public function index()
    {
        $model = $this->model('ProductModel');

        $productId = Helper::input_value('id');

        $data['content']['products'] = $model->getProducts($productId);
        $data['content']['pictures'] = $model->getPictures($productId);
        $data['content']['capacity'] = $model->getCapacity($productId);
        $data['content']['accessory'] = $model->getAccessory();
        $data['content']['specify'] = $model->getSpecify($productId);

        $data['component'] = 'products/index';

        $this->render('layouts/main_layout', $data);
    }
}
