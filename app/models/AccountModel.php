<?php
class AccountModel extends Model
{
    public function checkuser($email, $pass)
    {
        $sql = "SELECT * FROM user INNER JOIN role ON user.role_id = role.id WHERE email='" . $email . "' AND password='" . $pass . "'";
        $stmt = $this->query($sql);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return 3;
        }
    }
}
