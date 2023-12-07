<?php
class SharedModel extends Model {
    private static $conn;

    public static function getCategoriesHeader()
    {
        self::$conn = Connection::getInstance();
        $sql = "select * from category where parent_id = 0";
        $stmt = static::$conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}