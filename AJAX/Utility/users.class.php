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

        return $result['id'];
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

    public function isActiveSubscriber($user_id) //gives back bool if user has a active subscription or not.
    {
        $tmp = $this->getSubscriptionDate($user_id);
        $tmpDateObj = date_create($tmp);
        $date = date_create();
        
        if($tmpDateObj > $date)
            return true;
        else
            return false;
    }

    public function getUserDocuments($user_id){
        $sql = ("SELECT * FROM documents WHERE user_id = ? ORDER BY id DESC");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll();
 
        return $result;
    }
}

//$userDebug = new user();
//$userDebug->setSubscription(2, "2021-06-30 20:15:00");
//echo $userDebug->getSubscription(2);
//var_dump($userDebug->getUserDocuments(2));

//$date = date_create();
//$date->modify('next month');
//$tmp = $date->format('Y-m-d H:i:s');
//echo $tmp;
//$date->modify('+3 months');
//$date->modify('next year');
//var_dump($date);
//$userdate = date_create($userDebug->getSubscriptionDate(2));
//var_dump($userdate);

//$bool = $userDebug->isActiveSubscriber(5);
//var_dump($bool);

?>
