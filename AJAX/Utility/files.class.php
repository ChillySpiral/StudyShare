<?php
require_once('dbConnection.php'); //Datenbankanbindung

class files extends Db
{

    public function setFile($user_id, $title, $description, $subject_id, $filename) { //uploads file info into db
        $sql = ("INSERT INTO documents (user_id, title, description, subject_id, filename) VALUES (?, ?, ?, ?, ?)");
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$user_id, $title, $description, $subject_id, $filename]);
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

    //Gets all Files which aren't reviewed yet (left joins users and subjects to documents)
    public function modGetFiles()
    {
        $sql = ("SELECT documents.id, documents.title ,subjects.name, documents.description, users.username, documents.filename FROM documents 
        LEFT JOIN users 
        ON documents.user_id = users.id
        LEFT JOIN subjects
        ON documents.subject_id = subjects.id
        WHERE documents.Review = '0'");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    //If a document has been approved it is set to 1
    public function modApprove($id){
        $sql = ("UPDATE documents SET Review = '1' WHERE id = $id");
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();

        return $result;
    }

    //Delete request from the moderator
    public function modDelete($id){
        $sql = ("DELETE FROM documents WHERE id = $id");
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute();

        return $result;
    }

    public function getFileNameByFileID($file_id) {
        $sql = ("SELECT filename FROM documents WHERE id = $file_id");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch();
        return $result;
    }

    public function getSearch($text)
    {
        $sql=("SELECT documents.id, documents.title ,subjects.name, documents.description, users.username, documents.filename FROM documents 
        LEFT JOIN users 
        ON documents.user_id = users.id
        LEFT JOIN subjects
        ON documents.subject_id = subjects.id
        WHERE documents.Review = '1' AND (documents.title LIKE '%$text%' OR documents.description LIKE '%$text%') ORDER BY documents.id DESC");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getCategories()
    {
        $sql=("SELECT * FROM subjects");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    public function getAllDocuments()
    {
        $sql = ("SELECT documents.id, documents.title ,subjects.name, documents.description, users.username, documents.filename FROM documents 
        LEFT JOIN users 
        ON documents.user_id = users.id
        LEFT JOIN subjects
        ON documents.subject_id = subjects.id
        WHERE documents.Review = '1' ORDER BY documents.id DESC");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results; 
    }
}


