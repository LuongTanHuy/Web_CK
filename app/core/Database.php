<?php
class Database
{
    private static $dsn = 'mysql:host=localhost;dbname=hvapple';
    private static $username = "root";
    private static $password = "tanhuy09560";
    private static $con = null;

    public function __construct()
    {
        self::db_connect();
    }

    public static function db_connect()
    {
        try {
            if (is_null(self::$con)) {
                self::$con = new PDO(self::$dsn, self::$username, self::$password);
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            }
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            include_once '../errors/database_error.php';
        }
    }

    public static function db_disconnect()
    {
        if (!is_null(self::$con)) {
            self::$con = null;
        }
    }

    public function __destruct()
    {
        self::db_disconnect();
    }

    public static function db_execute($sql = '', $params = [])
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute($params);
            if ($result->rowCount() > 0) {
                $result->closeCursor();
                return true;
            }
        }
        return false;
    }

    public static function db_get_list($sql = '')
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute();
            if ($result->rowCount() > 0) {
                $rows = $result->fetchAll();
                $result->closeCursor();
                return $rows;
            }
        }
        return false;
    }

    public static function db_get_list_condition($sql = '', $params = [])
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute($params);
            if ($result->rowCount() > 0) {
                $rows = $result->fetchAll();
                $result->closeCursor();
                return $rows;
            }
        }
        return false;
    }

    public static function db_get_row($sql = '', $params = [])
    {
        if (!is_null(self::$con)) {
            $result = self::$con->prepare($sql);
            $result->execute($params);
            if ($result->rowCount() > 0) {
                $row = $result->fetch();
                $result->closeCursor();
                return $row;
            }
        }
        return false;
    }
    private $pdo;
    public function getAllPDO()
    {
        try {
            $stmt = $this->pdo->query('SELECT * FROM products');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Lỗi truy vấn SQL: ' . $e->getMessage();
            exit();
        }
    }

    public function findByIdPDO($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
