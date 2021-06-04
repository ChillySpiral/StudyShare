<?php
session_start();
require_once('../AJAX/Utility/users.class.php');
$userObj = new user();

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user'];
    $user = $userObj->getUser($user_id);
}

if(isset($_POST["editSubmit"])) {
    $userObj->updateUser($_GET["id"], $_POST["email"], $_POST["username"], $_POST["firstname"], $_POST["lastname"]);

    header("location: logout.php");
}
?>

<div id="fileupload" class="col-md-12">
    <h2>Username</h2>
    <hr>
    <!--Profilbild -->
    <div class="row">
        <div class="col-md-12"><img src="images/static-images/profilepicture-placeholder.jpg" id="profile-pic"/></div>
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

<?php include "fileupload.php";?>

<div class="feed-files">
        <div class="pdf-image">
            <h1>Heading</h1>
            <img class="pdf-image" src="images/static-images/pdf.png"></div>
        <div class="pdf-description">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br>
            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna <br>
            aliquyam erat, sed diam voluptua. At vero eos et accusam et <br>
            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea… <br>
            <p>Kategorie: Lorem ipsum</p><button class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;" type="button">Anzeigen</button>   <button class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;" type="button">Löschen</button>
        </div>
</div>