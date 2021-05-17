<?php
session_start();
require "Utility/files.class.php";
$files = new files();

if(isset($_POST['upload'])) //Upload von einem neuen Beitrag 
{

        $fileName = $_FILES['file']['name'];
        // Filepfad festlegen...
        move_uploaded_file($_FILES['file']['tmp_name'], '../AJAX/uploads/'.$fileName);

    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user'];
        $title = $_POST['title'];
        $info = $_POST['description'];
        $category = $_POST['category'];
    
        $files->setFile($user_id, $title, $info, $category, $fileName);
    }

}
header('Location: ../index.php');
?>