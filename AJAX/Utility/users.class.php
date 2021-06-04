<?php
require_once('dbConnection.php');

class user extends Db
{

    public function createUser($username, $email, $firstname, $lastname, $password)
    {
        $sql = ("INSERT INTO users (username, email, firstname, lastname, password) VALUES (?,?,?,?,?)");
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$username, $email, $firstname, $lastname, $password]); //Passwort Hash bei User dann hinzufügen

        return $result;
    }

    public function getUser($user_id)
    {
        $sql = ("SELECT (username, email, firstname, lastname) FROM users WHERE id = ?");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();

        return $result;
    }

    public function getUserID($username)
    {
        $sql = ("SELECT (id) FROM users WHERE username = ?");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $result = $stmt->fetch();

        return $result;
    }

    public function loginUser($email, $password) //Email Unique machen in der Datanbank
    {
        $sql = ("SELECT password, id, is_admin FROM users WHERE email = ?");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch();

        return $result; //Passwort prüfen in der Datenbank Abfrage?
    }

    public function getPassword($user_id) //Zum Vergleichen bei Passwortänderung
    {
        $sql = ("SELECT password FROM users WHERE id = ?");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();

        return $result;
    }
    public function changePassword($user_id, $new_password) //Password Hash fehlt
    {
        $sql = ("UPDATE users SET password = ? WHERE id = ?");
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$new_password, $user_id]);

        return $result;
    }
}
?>