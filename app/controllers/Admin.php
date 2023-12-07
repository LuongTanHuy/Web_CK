<?php
class Admin extends Controller
{
    public function index()
    {
        $model = $this->model('AdminModel');
        $data['content']['products'] = $model->table("product")->get();
        $data['component'] = 'admin/danhsach';
        $this->render('layouts/admin', $data);
    }

    public function product()
    {
        $data['content'] = '';
        $data['component'] = 'admin/them';
        $this->render('layouts/admin', $data);
    }

    public function addProduct()
    {
        $addminModel = $this->model("AdminModel");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addButton'])) {
            $data = [                                         // Query Builder
                'title' => Helper::input_value('title'),
                'price' => Helper::input_value('price'),
                'discount' => Helper::input_value('discount'),
                'thumbnail' => Helper::input_value('thumbnail'),
                'description' => Helper::input_value('description')
            ];
            $addminModel->table('product')->insert($data);
        }
    }
    public function addSlideShow()
    {
        $addminModel = $this->model("AdminModel");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addButton'])) {

            $data = [                                         // Query Builder
                'duong_dan_anh' => Helper::input_value('duongdan'),
            ];
            $addminModel->table('slide')->insert($data);
            $pictures = !empty($_POST['pictures']) ? $_POST['pictures'] : '';
        }
    }
    public function addNameSpecify()
    {
        $addminModel = $this->model("AdminModel");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addButton'])) {
            $data = [
                'title' => Helper::input_value('titleSpec'),
            ];
            $addminModel->table('specify')->insert($data);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    public function addSpecify()
    {
        $addminModel = $this->model("AdminModel");
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addButton'])) {
            $data = [
                'name_space' => Helper::input_value('loai'),
                'value_space' => Helper::input_value('mota')
            ];
            $addminModel->table('sub_specify')->insert($data);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    public function addImgProduct()
    {
        $addminModel = $this->model("AdminModel");
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addButton'])) {

            $pictures = !empty($_POST['pictures']) ? $_POST['pictures'] : '';
            if (!empty($pictures)) {
                foreach ($pictures as $index => $values) {
                    foreach ($values as $value) {
                        // Thực hiện thêm dữ liệu vào cơ sở dữ liệu
                        $data = [
                            'thumbnail' => $value, // Giả sử tên cột trong database là 'thumbnail'
                        ];
                        $addminModel->table('galery')->insert($data);
                    }
                }
            }
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    public function deleteProduct()
    {
        $productId = Helper::input_value('id');

        if (!empty($productId)) {
            $model = $this->model('AdminModel');
            $deleteStatus = $model->table('product')->where("id", '=', $productId)->delete();
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

    public function edit_product()
    {
        $productId = Helper::input_value('id');
        $model = $this->model('AdminModel');
        $productModel = $this->model('ProductModel');

        $data['content']['product'] = $model->table('product')->where('id', '=', $productId)->first();
        $data['content']['specify'] = $productModel->getSpecify($productId);
        $data['content']['galery'] = $model->table('galery')->where('product_id', '=', $productId)->get();
        $data['component'] = 'admin/sua';
        $this->render('layouts/admin', $data);
    }

    public function editProduct()
    {

        $productId = Helper::input_value('id');
        $title = Helper::input_value('title');
        $price = Helper::input_value('price');
        $discount = Helper::input_value('discount');
        $thumbnail = Helper::input_value('thumbnail');
        $description = Helper::input_value('description');

        $model = $this->model('AdminModel');
        $newProductData = [
            'title' => $title,
            'price' => $price,
            'discount' => $discount,
            'thumbnail' => $thumbnail,
            'description' => $description
        ];

        $newGalery = $_POST['pictures'];
        $newSpecify = $_POST['specify'];
        $newSubSpecify = $_POST['sub_specify'];
        $updateProductStatus = $model->table('product')->where('id', '=', $productId)->update($newProductData);

        if (!empty($newGalery)) {
            foreach ($newGalery as $galery) {
                $model->updateGalery($galery);
            }
        }
        if (!empty($newSpecify)) {
            foreach ($newSpecify as $specify) {
                $model->updateSpecify($specify);
            }
        }
        if (!empty($newSubSpecify)) {
            foreach ($newSubSpecify as $subSpecify) {
                $model->updateSpecify($specify);
            }
        }

        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    public function search()
    {
        $model = $this->model('AdminModel');
        if (isset($_GET['searchButton'])) {
            $searchTerm = $_GET['search'];
            $results = $model->searchProduct($searchTerm);
        }

        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    public function cate_gory()
    {
        $model = $this->model('AdminModel');
        $data['content']['categories'] = $model->table("category")->get();
        $data['component'] = 'admin/danhmuc';
        $this->render('layouts/admin', $data);
    }
    public function addcate()
    {

        $addminModel = $this->model("AdminModel");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addButton'])) {
            $data = [                                         // Query Builder
                'name' => Helper::input_value('name'),
                'parent_id' => Helper::input_value('parentID'),
            ];
            $addminModel->table('category')->insert($data);
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    public function deleteCate()
    {
        $cateId = Helper::input_value('id');

        if (!empty($cateId)) {
            $model = $this->model('AdminModel');
            $deleteStatus = $model->table('category')->where("id", '=', $cateId)->delete();
        }
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    public function edit_cate()
    {
        $cateId = Helper::input_value('id');
        $model = $this->model('AdminModel');
        $data['content']['categories'] = $model->table('category')->where('id', '=', $cateId)->first();
        $data['component'] = 'admin/suaCate';
        $this->render('layouts/admin', $data);
    }
    public function editCate()
    {
        $cateId = Helper::input_value('id');
        $name = Helper::input_value('name');
        $parentID = Helper::input_value('parentID');
        $model = $this->model('AdminModel');
        $newCateData = [
            'name' => $name,
            'parent_id' => $parentID,
        ];
        $updateCateStatus = $model->table('category')->where('id', '=', $cateId)->update($newCateData);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
