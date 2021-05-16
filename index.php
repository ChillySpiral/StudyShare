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
                    <form action="" class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="display: inline-block !important;">
                        <div class="input-group">
                            <input type="text" class="bg-light form-control border-0 small" placeholder="Suche Notizen, Zusammenfassungen & Mitschriften" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;" />
                        <div class="input-group-append">
                            <button type="submit" class="btn py-0" type="button" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;background: rgb(248,249,252);border-width: 1px;"><i class="fas fa-search" style="color: rgb(0,0,0);"></i></button></div>
                        </div>
                    </from>
                    </li>';}?>
                    <li class="nav-item">
                    <a class="nav-link active" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "Components/logout.php";} else {echo "Components/login.php";}?>" style="padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Logout";} else {echo "Anmelden";}?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-inline-flex" id="header-links" href="<?php if(isset($_SESSION['user'])){echo "#Profil";} else {echo "Components/signup.php";}?>" style="background: #fe5f55;border-radius: 16px;padding: 8px;"><?php if(isset($_SESSION['user'])){echo "Profil";} else {echo "Registrieren";}?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="background container-fluid" style="padding-right: 25%;padding-left: 25%; padding-top: 15%;">
            <div style="background: rgba(118,118,118,0.27);color: rgb(255,255,255);border-radius: 25px; padding: 8px;">
                <p style="font-size: 17px;text-align: center;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
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
            <div class="col-md-12"><img src="images/static-images/chat-placeholder.jpg" id="chat-pic"/></div>
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
                    <h1>Option 1</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <h1>Info</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p><button class="btn btn-primary" type="button" style="background: #fe5f55;border-top-left-radius: 15px;border-top-right-radius: 15px;border-bottom-right-radius: 15px;border-bottom-left-radius: 15px;">Kaufen</button>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-bottom: 5px;margin-top: 5px;">
                    <h1>Option 2</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <h1>Info</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p><button class="btn btn-primary" type="button" style="background: #fe5f55;border-radius: 15px;">Kaufen</button>
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-top: 5px;margin-bottom: 5px;">
                    <h1>Option 3</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <h1>Info</h1>
                    <p style="text-align: center;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p><button class="btn btn-primary" type="button" style="background: #fe5f55;border-radius: 15px;">Kaufen</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="d-flex justify-content-end footer-basic" id="my-footer">
        <ul class="list-inline" style="background: #fe5f55;margin-top: 22px;margin-right: 30px;padding-right: 10px;padding-left: 10px;border-top-left-radius: 35px;border-top-right-radius: 35px;font-size: 24px;color: rgb(255,255,255);">
            <li class="list-inline-item"><a href="#">Impressum</a></li>
            <li class="list-inline-item"><a href="#">FAQ</a></li>
        </ul>
    </footer>

</div>

    <?php include "components/profilesettings.php";?> <!-- debugging purposes -->
    <script src="Javascript/jquery.min.js"></script>
    <script src="CSS/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>