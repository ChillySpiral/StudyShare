<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Studyshare</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Footer-Basic.css">
    <link rel="stylesheet" href="CSS/Login-Form-Clean.css">
    <link rel="stylesheet" href="CSS/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="CSS/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/fonts/fontawesome5-overrides.min.css">
</head>

<body style="background: #f7f7ff;">
<div id="page-container">
    <nav class="navbar navbar-light navbar-expand-md sticky-top" id="my-navbar" style="background: #577399;border-radius: 0;border-bottom-right-radius: 7px;border-bottom-left-radius: 7px;">
        <div class="container-fluid"><a class="navbar-brand" id="header-links" href="" style="font-size: 30px;">StudyShare</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navcol-1" style="color: rgb(255,255,255);">
            </form>
                <ul class="navbar-nav">
                <?php if(isset($_SESSION['user']))
                { echo '
                    <li class="nav-item" style="min-height: 40px;">
                    <form id="Search_Form" class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="display: inline-block !important;">
                        <div class="input-group">
                            <input name="Search_Text" type="text" class="bg-light form-control border-0 small" placeholder="Suche Notizen, Zusammenfassungen & Mitschriften" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;" />
                        <div class="input-group-append">
                            <button id="Search_Button" type="button" class="btn py-0" type="button" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;background: rgb(248,249,252);border-width: 1px;"><i class="fas fa-search" style="color: rgb(0,0,0);"></i></button></div>
                        </div>
                    </from>
                    </li>';}?>
                    <?php
                    if(isset($_SESSION['mod']))
                    {
                    echo '
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="./Components/mod.php">Review</a>
                    </li>';
                    }
                    ?>
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "Components/logout.php";} else {echo "Components/login.php";}?>" style="padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Logout";} else {echo "Anmelden";}?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-inline-flex" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "Components/profilesettings.php";} else {echo "Components/signup.php";}?>" style="background: #fe5f55;border-radius: 16px;padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Profil";} else {echo "Registrieren";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php if(!isset($_SESSION['user']))
    { echo '
    <div class="background container-fluid" style="padding-right: 25%;padding-left: 25%; padding-top: 15%;">
            <div style="background: rgba(118,118,118,0.27);color: rgb(255,255,255);border-radius: 25px; padding: 8px;">
                <p style="font-size: 25px; text-align: center; font-weight: bolder;">Lernunterlagen in guter Qualität!</p>      
                <p style="font-size: 25px; text-align: center; font-weight: bolder;">Geld mit deinen eigenen Mitschriften verdienen!</p>
                <p style="font-size: 25px; text-align: center; font-weight: bolder;">Mit StudyShare ist alles möglich!</p>    
            </div>
    </div>

    <div id="studyshare-info" class="container text-center" style="text-align: center;">
        <div class="row">
            <div class="col-md-12">
            <div style="border-bottom-width: 1px;border-bottom-style: solid;margin-right: 10%;margin-left: 10%;margin-bottom: 5%;">
                    <h1>Wieso Studyshare?</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bubble-left">
                    <div class="bubble-content-left">
                        Ich bin schon im vorletzten Semester meines Informatik-Studiums und habe währenddessen durch meine ganzen Mitschriften
                        sehr viel Geld gemacht! Aufgrund der geringfügigen Basis war das ein unkompliziertes passives Einkommen! 
                        Normalerweise opfert man bei einem Nebenjob wichtige Lerntage, aber durch StudyShare löst man direkt das Problem!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bubble-right">
                    <div class="bubble-content-right">
                        Über StudyShare habe ich Zugriff auf sogut wie allmögliche Mitschriften, die ich für meine Prüfungen brauche!
                        Selbst bei meinem Studiengangswechsel gab es aufgrund der hohen Vielfalt immer noch ausreichend Unterlagen und ich war
                        mit meinen sehr guten Noten immer die beste! Nie mehr wieder 4 gewinnt!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Preise-Index" class="container text-center" style="text-align: center;">
        <div class="row">
            <div class="col-md-12">
                <div style="border-bottom-width: 1px;border-bottom-style: solid;margin-right: 10%;margin-left: 10%;margin-bottom: 5%;">
                    <h1>Preise</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-top: 5px;margin-bottom: 5px;">
                    <h1>1-Monat</h1>
                    <p>Du möchtest kurzseitig auf gewisse Unterlagen zugreifen? Kein Problem! Dieses Abonnement ermöglicht dir aber auch die Option, deine eigenen Mitschriften hochzuladen. Support-Priorisierung fällt bei diesem Angebot.</p>
                    <h2>14,99€</h2>
                    <button class="btn btn-primary" type="button" style="background: #fe5f55;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;">Kaufen</button>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-bottom: 5px;margin-top: 5px;">
                    <h1>PREMIUM</h1>
                    <p>Du möchtest dein komplettes Studium nur sehr gute Leistungen hinterlegen und tägliche Lernroutinen vollausgestattet ausführen? Schließe ein Jahresabonnement bei uns ab & genieße deine Support-Priorisierung!</p>
                    <h2>99,99€</h2>
                    <button class="btn btn-primary" type="button" style="background: #fe5f55;border-radius: 15px;">Kaufen</button>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-top: 5px;margin-bottom: 5px;">
                    <h1>3-Monate</h1>
                    <p>Du möchtest die Prüfungsphase vorbereitet starten? Mit diesem 3-MonateAbonnement vermeidest du den Stress in der Prüfungsphase, indem du rechtzeitig auf alle Unterlagen zugreifst und keine Informationen übersiehst!</p>
                    <h2>34,99€</h2>
                    <button class="btn btn-primary" type="button" style="background: #fe5f55;border-radius: 15px;">Kaufen</button>
                </div>
            </div>
        </div>
    </div>';}
    else if(isset($_SESSION['user']))
    {
        require './Components/feed.php';
    }
    ?>
    <footer class="d-flex justify-content-end footer-basic" id="my-footer">
        <ul class="list-inline" style="background: #fe5f55;margin-top: 22px;margin-right: 30px;padding-right: 10px;padding-left: 10px;border-top-left-radius: 35px;border-top-right-radius: 35px;font-size: 24px;color: rgb(255,255,255);">
            <li class="list-inline-item"><a href="impressum.php">Impressum</a></li>
            <li class="list-inline-item"><a href="faq.php">FAQ</a></li>
        </ul>
    </footer>

</div>

  <?php //include "components/payment.php";?> <!-- debugging purposes -->

    <script src="Javascript/jquery.min.js"></script>
    <script src="CSS/bootstrap/js/bootstrap.min.js"></script>
    <script src="Javascript/search.js"></script>

</body>

</html>