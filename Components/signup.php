<?php session_start(); 
    if(isset($_SESSION['user']))
    {
        header("location: ../"); //Stops logged in users to log in again
    }
?>

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
                <?php if(isset($_SESSION['user']))
                { echo '
                    <li class="nav-item" style="min-height: 40px;">
                    <form action="" class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="display: inline-block !important;">
                        <div class="input-group">
                            <input type="text" class="bg-light form-control border-0 small" placeholder="Suche Notizen, Zusammenfassungen & Mitschriften" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;" />
                        <div class="input-group-append">
                            <button type="submit" class="btn py-0" type="button" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;background: rgb(248,249,252);border-width: 1px;"><i class="fas fa-search" style="color: rgb(0,0,0);"></i></button></div>
                        </div>
                    </from>
                    </li>';}?>
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "logout.php";} else {echo "login.php";}?>" style="padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Logout";} else {echo "Anmelden";}?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-inline-flex" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "#Profil";} else {echo "";}?>" style="background: #fe5f55;border-radius: 16px;padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Profil";} else {echo "Registrieren";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<section class="register-photo">
    <div class="form-container" style="background: #f7f7ff;">
        <div class="image-holder"></div>
        <form id="Registrieren_Form">
            <div class="form-group">
                <input class="form-control" type="text" id="vorname" name="vorname" placeholder="Vorname" style="border-radius: 10px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="nachname" name="nachname" placeholder="Nachname" style="border-radius: 10px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" id="username" name="username" placeholder="Username" style="border-radius: 10px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" id="email" name="email" placeholder="Email" style="border-radius: 10px;">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" id="password" name="password" placeholder="Passwort" style="border-radius: 10px;">
                </div>
            <div class="form-group">
                <input class="form-control" type="password" id="password2" name="password2" placeholder="Passwort wiederholen" style="border-radius: 10px;">
            </div>   
            <div class="form-group">
            <button type="button" class="form-control" id="Registrieren" style="background: #fe5f55;border-radius: 16px;padding: 8px; color: white;">Registrieren</button>
            </div>
            <p id="fail_log">Registrieren fehlgeschlagen! Bitte erneut versuchen</p>
        </form>
    </div>
</section>

<footer class="d-flex justify-content-end footer-basic" id="my-footer">
        <ul class="list-inline" style="background: #fe5f55;margin-top: 22px;margin-right: 30px;padding-right: 10px;padding-left: 10px;border-top-left-radius: 35px;border-top-right-radius: 35px;font-size: 24px;color: rgb(255,255,255);">
            <li class="list-inline-item"><a href="../impressum.php">Impressum</a></li>
            <li class="list-inline-item"><a href="../faq.php">FAQ</a></li>
        </ul>
    </footer>

</div>
    <script src="../javascript/signup.js"></script>
    <script src="../Javascript/jquery.min.js"></script>
    <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>