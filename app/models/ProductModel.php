<h1>Load Model </h1>
<?php
class ProductModel extends Model
{
  public function getProducts($productId) // hàm lấy sản phẩm ra chi tiết
  {
    $sql = "SELECT * FROM product WHERE id = $productId";
    $stmt = $this->query($sql);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function getPictures($productId) // hàm lấy ảnh con sản phẩm
  {
    $sql = "SELECT * FROM galery WHERE product_id = $productId";
    return $this->getList($sql);
  }

  public function getCapacity($productId) // hàm lấy dung lượng sản phẩm
  {
    $sql = "SELECT * FROM capacity WHERE product_id = $productId";
    return $this->getList($sql);
  }
  public function getAccessory()
  { //lấy phụ kiện
    $sql = "SELECT id, title, price, thumbnail FROM product WHERE id BETWEEN 49 AND 56";
    $stmt = $this->__conn->query($sql);

    // Lấy tất cả kết quả dưới dạng mảng kết hợp
    $accessory = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $accessory;
  }

  public function getSpecify($productId) //  hàm lấy thông số sản phẩm
  {
    $sql = "SELECT * FROM specify WHERE product_id = $productId";
    $stmt = $this->query($sql);
    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $sqlSubSpecify = "SELECT * FROM sub_specify WHERE specify_id = ?";
    foreach ($rs as $key => $item) {
      $rs[$key]['sub-specify'] = $this->getListCondition($sqlSubSpecify, [$item['id']]);
    }
    return $rs;
  }
}
