<?php
class Category extends Controller
{
    public function index()
    {
        $model = $this->model('CategoryModel');

        $cateId = Helper::input_value('id');

        $data['content']['categories'] = $model->getCategories($cateId);
        $data['content']['slideshow'] = $model->getImageSlide();
        $data['content']['products'] = $model->getProductInCategory($cateId);
        $data['component'] = 'categories/category';

       $this->render('layouts/main_layout', $data);
    }
   
}
