<?php
class Home extends Controller
{
  function index()
  {
    $model = $this->model('HomeModel');

    $data['content']['productWithCate'] = $model->getProductWithCate();
    $data['content']['iphones'] = $model->getIphones();
    $data['content']['slideshow'] = $model->getImageSlide();
    $data['content']['categories'] = $model->getCategories();
    $data['content']['outstandingProducts'] = $model->getProduts();
    $data['component'] = 'home/index';
    $this->render('layouts/main_layout', $data);
  }
  public function search($keySearch)
  {
    echo $keySearch;
  }
}
