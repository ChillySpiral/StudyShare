<?php
require_once('dbConnection.php'); //Datenbankanbindung

class files extends Db
{

    public function setFile($user_id, $title, $info, $subject_id, $filename) { //uploads file info into db
        $sql = ("INSERT INTO documents (user_id, title, info, subject_id, filename) VALUES (?, ?, ?, ?, ?)");
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$user_id, $title, $info, $subject_id, $filename]);
        return $result;
    }

    public function getFilebyFileID($file_id) { //gets file data by file id from db for display on index
        $sql = ("SELECT * FROM documents WHERE id = $file_id");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();
        return $result;
    }

    public function getFilebyUserID($user_id) { //gets file data by user id from db for display in profileSettings
        $sql = ("SELECT * FROM documents WHERE user_id = $user_id");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getAllFiles(){ //get all files for index
        $sql = ("SELECT * FROM documents WHERE Review = 1 ORDER BY id DESC");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
}


