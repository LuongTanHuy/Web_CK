<?php
class CartModel extends Model
{
    public function addProduct($userId, $productId)
    {
        $soluong = $this->table("cart")->where('user_id', '=', $userId)->where('product_id', '=', $productId)->select('soluong')->first();
        if ($soluong['soluong']) {
            $dataUpdate = [
                'soluong' => $soluong['soluong'] + 1,
            ];
            $this->table("cart")->where('user_id', '=', $userId)->where('product_id', '=', $productId)->update($dataUpdate);
        } else {
            $sql = "INSERT INTO cart(product_id, user_id, soluong) values ($productId, $userId, 1)";
            $this->query($sql);
        }
    }

    public function getCartItems($userId)
    {
        $sql = "SELECT pd.*, c.soluong FROM product pd LEFT JOIN cart c ON pd.id = c.product_id WHERE c.user_id = $userId";
        return $this->queryCustom($sql);
    }

    public function deleteProduct($userId, $productId)
    {
        return $this->table("cart")->where('user_id', '=', $userId)->where('product_id', '=', $productId)->delete();
    }
}
