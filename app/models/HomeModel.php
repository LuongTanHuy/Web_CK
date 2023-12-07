<?php
class HomeModel extends Model
{
  public function getProduts() // lấy sản phẩm
  {
    $sql = "select * from product";
    return  $this->query($sql);
  }
  public function getImageSlide() // lấy ảnh slideshow
  {
    $sql = "SELECT * FROM slide";
    return $this->query($sql);
  }
  public function getCategories() //lấy đặt trưng
  {
    $sql = "select * from category WHERE parent_id = 0";
    return $this->query($sql);
  }
  public function getIphones()
  {
    $sql = "select id, title, price, thumbnail, description from product limit 4";
    return $this->query($sql);
  }

  public function getProductWithCate()  // hàm lấy sản phẩm render ra các danh mục nổi bật trong home
  {
    $categorySql = "select * from category WHERE parent_id = 0";
    $productSql = "select p.* from product p left join category ct on p.category_id = ct.id where ct.id = ?  or parent_id = ? LIMIT 4";
    $rs =  $this->queryCustom($categorySql);

    foreach ($rs as $key => $item) {
      $rs[$key]['products'] =  $this->getListCondition($productSql, [$item['id'], $item['id']]);
    }

    return $rs;
  }
}