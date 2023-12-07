<?php
class AdminModel extends Model
{
    //public function addProduct($title, $price, $discount, $thumbnail, $description)
    //{
    // try {
    //      $sql = "INSERT INTO product (title, price, discount, thumbnail, description) VALUES (?, ?, ?, ?, ?)";
    //     $stmt = $this->__conn->prepare($sql);
    //     $stmt->bindParam(1, $title);
    //     $stmt->bindParam(2, $price);
    //    $stmt->bindParam(3, $discount);
    //    $stmt->bindParam(4, $thumbnail);
    //   $stmt->bindParam(5, $description);

    // Thực hiện thêm sản phẩm vào cơ sở dữ liệu
    //   return $stmt->execute();
    // } catch (Exception $e) {
    //    $mess = $e->getMessage();
    //    App::$app->loadError('database', ['message' => $mess]);
    //die();
    // }
    // }
    //select * from specify where product_id = ;

    public function updateGalery($galery)
    {
        $sql = "UPDATE galery SET thumbnail = '" . $galery['thumbnail'] . "' WHERE id = " . $galery['id'];
        $this->query($sql);
    }
    public function updateSpecify($specify)
    {
        $sql = "UPDATE specify SET title = '" . $specify['title'] . "'WHERE id = " . $specify['id'];
        $this->query($sql);
    }
    public function updateSub($subSpecify)
    {
        $sql = "UPDATE sub_specify SET name_space = '" . $subSpecify['name_space'] . "', value_space = '" . $subSpecify['value_space'] . "' WHERE id = '" . $subSpecify['specify_  id'] . "'";
        $this->query($sql);
    }
    // Inside AdminModel class
    public function searchProduct($searchTerm)
    {
        $sql = "SELECT * FROM product WHERE title LIKE '%$searchTerm%'";
        $this->query($sql);
    }
}
