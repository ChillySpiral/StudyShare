<?php session_start(); ?>

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

<body style="background: #f7f7ff;">
<div id="page-container">
    <nav class="navbar navbar-light navbar-expand-md sticky-top" id="my-navbar" style="background: #577399;border-radius: 0;border-bottom-right-radius: 7px;border-bottom-left-radius: 7px;">
        <div class="container-fluid"><a class="navbar-brand" id="header-links" href="../" style="font-size: 30px;">StudyShare</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navcol-1" style="color: rgb(255,255,255);">
            </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "logout.php";} else {echo "login.php";}?>" style="padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Logout";} else {echo "Anmelden";}?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-inline-flex" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "profilesettings.php";} else {echo "signup.php";}?>" style="background: #fe5f55;border-radius: 16px;padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Profil";} else {echo "Registrieren";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
if(isset($_SESSION['mod'])){ 
    echo '
    <table class="table">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Kategorie</th>
                <th>Beschreibung</th>
                <th>User</th>
                <th>File</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody id="content">
        </tbody>
    </table>';
}?>
    <footer class="d-flex justify-content-end footer-basic" id="my-footer">
        <ul class="list-inline" style="background: #fe5f55;margin-top: 22px;margin-right: 30px;padding-right: 10px;padding-left: 10px;border-top-left-radius: 35px;border-top-right-radius: 35px;font-size: 24px;color: rgb(255,255,255);">
            <li class="list-inline-item"><a href="#">Impressum</a></li>
            <li class="list-inline-item"><a href="#">FAQ</a></li>
        </ul>
    </footer>

</div>
    <script src="../Javascript/jquery.min.js"></script>
    <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
    <script src="../JavaScript/mod.js"></script>
</body>

</html>