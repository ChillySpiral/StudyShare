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
        $sql = ("SELECT username, email, firstname, lastname FROM users WHERE id = ?");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();

        return $result;
    }

    public function getUserID($username)
    {
        $sql = ("SELECT id FROM users WHERE username = ?");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);
        $result = $stmt->fetch();

        return $result;
    }

    public function updateUser($id, $email, $username, $firstname, $lastname) { //updated Userdaten, wird für das bearbeiten benötigt
        $sql = ("UPDATE users SET email = ?, username = ?, firstname = ?, lastname = ? WHERE id = $id");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email, $username, $firstname, $lastname]);
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

    public function getSubscriptionDate($user_id)
    {
        $sql = ("SELECT subscription_expires_at FROM users WHERE id = ?");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();

        return $result["subscription_expires_at"];
    }

    public function setSubscriptionDate($user_id, $timestamp)
    {
        $sql = ("UPDATE users SET subscription_expires_at = ? WHERE id = ?");
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$timestamp, $user_id]);

        return $result;
    }

    public function isActiveSubscriber($user_id) //needs timestamp functions.. gives back bool if user has a active subscription or not.
    {

    }
}

//$userDebug = new user();
//$userDebug->setSubscription(2, "2021-06-30 20:15:00");
//echo $userDebug->getSubscription(2);
?>
