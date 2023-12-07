<?php
class CategoryModel extends Model
{


  public function getCategories($cateId)
  {
    $sql = "select * from category where parent_id = $cateId";
    return $this->queryCustom($sql);
  }

  public function getProductInCategory($cateId)
  {
    $sql = "SELECT pd.*, cp.storage_capacity 
            FROM product as pd LEFT JOIN capacity as cp ON pd.id = cp.product_id 
            WHERE category_id in (SELECT id FROM category where id = $cateId or parent_id = $cateId) ";
    $stmt = $this->__conn->query($sql);
    $result = [];

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $id = $row['id'];
      if (!isset($result[$id])) {
        $result[$id] = [
          'id' => $row['id'],
          'title' => $row['title'],
          'price' => $row['price'],
          'discount' => $row['discount'],
          'thumbnail' => $row['thumbnail'],
          'description' => $row['description'],
          'storage_capacity' => array($row['storage_capacity'])
        ];
      } else {
        $result[$id]['storage_capacity'][] = $row['storage_capacity'];
      }
    }
    return $result;
  }


  public function getImageSlide() // lấy ảnh slideshow
  {
    $sql = "SELECT * FROM slide";
    return $this->query($sql);
  }
}
