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
        <div class="container-fluid"><a class="navbar-brand" id="header-links" href="index.php" style="font-size: 30px;">StudyShare</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navcol-1" style="color: rgb(255,255,255);">
            </form>
                <ul class="navbar-nav">
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
    <h1 class="faq-heading"> FAQ </h1>
    <div class="faq">
    <button class="accordion">Was ist Studyshare?</button>
        <div class="panel">
            <p>Studyshare entstand während der Corona-Pandemie als Gruppenprojekt von 5 Informatikstudenten mit dem Ziel Studienunterlagen zugänglicher zu machen und Studenten zu ermöglichen mit ihren Zusammenfassungen, von denen andere profitieren können, etwas Geld zu verdienen.</p>
        </div>

    <button class="accordion">Wie lade ich meine Dokumente hoch?</button>
        <div class="panel">
            <p>Nach erfolgreichem registrieren und einloggen haben sie Zugriff auf ihre Profilseite. Hier finden sie ein Feld, wo Sie Dokumente hochladen können und einen Titel, eine Beschreibung als auch eine Kategorie hinzufügen können um ihr Dokument besser einzuordnen.</p>
        </div>

    <button class="accordion">Wie funktioniert das Abonnement-Service?</button>
        <div class="panel">
            <p>Das Abo ist in drei flexiblen Varianten verfügbar, ein Monat, drei Monate oder ein Jahr. Genauere Infos finden Sie auf der Startseite.</p>
        </div>
    <button class="accordion">Wie schließe ich ein Abo ab?</button>
        <div class="panel">
            <p>Über Ihr Profil können Sie ganz bequem ein Abo abschließen (Regestrierung erforderlich).</p>
        </div>
    <button class="accordion">Ich habe Probleme beim herunterladen von einem Dokument, was kann ich tun?</button>
        <div class="panel">
            <p>Kontaktieren Sie unseren Support unter team@studyshare.at mit einer genauen Beschreibung ihres Problems (Korrupte Datei, Download nicht möglich, keine Datei vorhanden) und wir werden eine Lösung finden.</p>
        </div>
    <button class="accordion">Mein Dokument wurde ohne meinem Einverständnis veröffentlicht, an wen kann ich mich diesbezüglich wenden?</button>
        <div class="panel">
            <p>Bitte senden Sie uns eine Mail an team@studyshare.at mit dem Titel + Veröffentlichkeitsdatum des betroffenen Dokuments. Ein Moderator wird das Dokument erneut überprüfen auf Authentizität und Sie schnellstmöglich kontaktieren.</p>
        </div>
    <button class="accordion">Wie viel kann ich mit Studyshare verdienen?</button>
        <div class="panel">
            <p>Derzeit arbeiten wir noch an einem geeigneten System.</p>
        </div>
    </div>    
    <footer class="d-flex justify-content-end footer-basic" id="my-footer">
        <ul class="list-inline" style="background: #fe5f55;margin-top: 22px;margin-right: 30px;padding-right: 10px;padding-left: 10px;border-top-left-radius: 35px;border-top-right-radius: 35px;font-size: 24px;color: rgb(255,255,255);">
            <li class="list-inline-item"><a href="impressum.php">Impressum</a></li>
            <li class="list-inline-item"><a href="faq.php">FAQ</a></li>
        </ul>
    </footer>

    <script src="Javascript/jquery.min.js"></script>
    <script src="CSS/bootstrap/js/bootstrap.min.js"></script>
    <script src="Javascript/search.js"></script>
    <script src="Javascript/accordion.js"></script>

</body>

</html>

