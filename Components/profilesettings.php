<!DOCTYPE html>
<html lang="en">

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
else
{
    header("location: ../"); 
}

if(isset($_POST["editSubmit"])) {
    $userObj->updateUser($_GET["id"], $_POST["email"], $_POST["username"], $_POST["firstname"], $_POST["lastname"]);

    header("location: logout.php");
}
if(isset($_GET["delete"])){ 
    $filename = $fileObj->getFileNameByFileID($_GET["delete"]);
    $fileObj->modDelete($_GET["delete"]);
    unlink("../AJAX/uploads/".$filename['filename']."");
    header('Location: ./Profilesettings.php');
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
<body style="background: #f7f7ff;">
<div id="page-container">
    <nav class="navbar navbar-light navbar-expand-md sticky-top" id="my-navbar" style="background: #577399;border-radius: 0;border-bottom-right-radius: 7px;border-bottom-left-radius: 7px;">
        <div class="container-fluid"><a class="navbar-brand" id="header-links" href="../" style="font-size: 30px;">StudyShare</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navcol-1" style="color: rgb(255,255,255);">
            </form>
                <ul class="navbar-nav">
                <?php
                    if(isset($_SESSION['mod']))
                    {
                    echo '
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="mod.php">Review</a>
                    </li>';
                    }
                    ?>
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "logout.php";} else {echo "";}?>" style="padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Logout";} else {echo "Anmelden";}?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-inline-flex" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "";} else {echo "signup.php";}?>" style="background: #fe5f55;border-radius: 16px;padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Profil";} else {echo "Registrieren";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div id="fileupload" class="container col-12">
    <h2><?php echo $user['username'];?></h2>
    <hr>
    <!--Profilbild -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 d-flex justify-content-center"><img src="../images/static-images/profilepicture-placeholder.jpg" id="profile-pic"/></div>
        <div class="col-md-2"></div>
    </div>
    <br>
    <?php
    if(isset($_GET["id"])){ 
    ?>
    <div class="editUser container">
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
    <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-2 d-flex justify-content-center"><a href="?id=<?php echo $user_id?>" class="btn btn-primary" style="background: #fe5f55; border-radius: 15px;">Einstellungen</a></div>
    <div class="col-md-5"></div>
    </div>
   <!-- html goes brrr ... -.- -->
    <br> 
</div>

<div class="container">
<div class="row">

<?php include "fileupload.php";?>
</div>
</div>



<?php for($p = 0; $p < count($documents); $p++) { ?>
<hr class="feed-documents">
<div class="container" <?php if($p == count($documents)-1){echo 'style="padding-bottom: 20%;"';}else{echo'style="padding-bottom: 15px;"';}?>>
    <div class="row">
    <div class="col-12 d-flex justify-content-center" ><h1><?php echo $documents[$p]["title"] ?></h1></div>
    <div class="col-12 d-flex justify-content-center">
    <div class="pdf-image col-3 d-flex justify-content-end">
        <img class="pdf-image" src="../images/static-images/pdf.png"></div>
    <div class="pdf-description col-4">
        <?php echo $documents[$p]["description"] ?>
        <p><?php echo $documents[$p]["subject_id"] ?></p><a href="?download=<?php echo $documents[$p]["id"]?>" class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;">Anzeigen</a>   <a href="?delete=<?php echo $documents[$p]["id"] ?>" class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;">Löschen</a>
    </div>
    </div>
    </div>
</div>
<?php } ?>
<footer class="d-flex justify-content-end footer-basic" id="my-footer">
        <ul class="list-inline" style="background: #fe5f55;margin-top: 22px;margin-right: 30px;padding-right: 10px;padding-left: 10px;border-top-left-radius: 35px;border-top-right-radius: 35px;font-size: 24px;color: rgb(255,255,255);">
            <li class="list-inline-item"><a href="../impressum.php">Impressum</a></li>
            <li class="list-inline-item"><a href="../faq.php">FAQ</a></li>
        </ul>
    </footer>
</div>

    <script src="../javascript/profile.js"></script>
    <script src="../Javascript/jquery.min.js"></script>
    <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>