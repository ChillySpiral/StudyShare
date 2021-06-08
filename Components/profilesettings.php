<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Studyshare</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../CSS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Footer-Basic.css">
    <link rel="stylesheet" href="../CSS/Login-Form-Clean.css">
    <link rel="stylesheet" href="../CSS/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../CSS/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/fonts/fontawesome5-overrides.min.css">
</head>

<?php
session_start();
require_once('../AJAX/Utility/users.class.php');
require_once('../AJAX/Utility/files.class.php');
$userObj = new user();
$fileObj = new files();

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
    $user = $userObj->getUser($user_id);
    $documents = $userObj->getUserDocuments($user_id);
}

if(isset($_POST["editSubmit"])) {
    $userObj->updateUser($_GET["id"], $_POST["email"], $_POST["username"], $_POST["firstname"], $_POST["lastname"]);

    header("location: logout.php");
}
if(isset($_GET["delete"])){ 
    $fileObj->modDelete($_GET["delete"]);
} 

if(isset($_GET["download"])){
    $doc = $fileObj->getFilebyFileID($_GET["download"]);
    $filename = $doc["filename"];
    $file = '../AJAX/uploads/' . $filename;
    if(!file_exists($file)){ // file does not exist
        die('file not found');
    } else {
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
    
        // read the file from disk
        readfile($file);
    }
} 
?>

<div id="fileupload" class="col-md-12">
    <h2>Username</h2>
    <hr>
    <!--Profilbild -->
    <div class="row">
        <div class="col-md-12"><img src="../images/static-images/profilepicture-placeholder.jpg" id="profile-pic"/></div>
    </div>
    <br>
    <?php
    if(isset($_GET["id"])){ 
    ?>
    <div class="editUser">
        <h2>Edit user:</h2>
        <form action="profilesettings.php?id=<?php echo $_GET["id"] ?>" method="post">
            <div class="form-outline mb-4">
            Username:
                <input class="form-control" type="text" name="username" value="<?php echo $user["username"] ?>" placeholder="Username" require><br>
            Email:
                <input class="form-control" type="email" name="email" value="<?php echo $user["email"] ?>" placeholder="Email-Address" require><br>
            Firstname:
                <input class="form-control" type="text" name="firstname" value="<?php echo $user["firstname"] ?>" placeholder="First Name" require><br>
            Lastname:    
                <input class="form-control" type="text" name="lastname" value="<?php echo $user["lastname"] ?>" placeholder="Last Name" require><br>
                <button class="btn btn-primary btn-block mb-4" name="editSubmit" type="submit">Save</button>
            </div>
            
        </form>
        <a href="profilesettings.php"> <button class="btn btn-warning btn-block mb-4" name="close" type="submit">Close</button></a>
        </div>
    </form>
    <?php } ?>
    <a href="?id=<?php echo $user_id?>" class="btn btn-primary" style="background: #fe5f55; border-radius: 15px;">Einstellungen</a>
    <!-- html goes brrr-->
    <br> 
    <br>
    <br>
</div>

<?php include "fileupload.php";



for($p = 0; $p < count($documents); $p++) { ?>

<div class="feed-files">
    <div class="pdf-image">
        <h1><? echo $documents[$p]["title"] ?></h1>
        <img class="pdf-image" src="../images/static-images/pdf.png"></div>
    <div class="pdf-description">
        <? echo $documents[$p]["description"] ?>
        <p><? echo $documents[$p]["subject_id"] ?></p><a href="?download=<?php echo $documents[$p]["id"]?>" class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;">Anzeigen</a>   <a href="?delete=<?php echo $documents[$p]["id"] ?>" class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;">Löschen</a>
    </div>
</div>        
<? } ?>