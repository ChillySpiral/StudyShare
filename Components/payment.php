<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../JavaScript/payment.js" defer></script>
    <script src="../JavaScript/jquery.min.js"></script>
    <script src="../CSS/bootstrap/js/bootstrap.min.js"></script>
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

<form method="POST">
<div id="Preise-Index" class="container text-center" style="text-align: center;">
        <div class="row">
            <div class="col-md-12" style="text-align: left;">            
                <h1>Kauf abschließen:</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-top: 5px;margin-bottom: 5px;">
                    <h1>1-Monat</h1>
                    <p>Du möchtest kurzseitig auf gewisse Unterlagen zugreifen? Kein Problem! Dieses Abonnement ermöglicht dir aber auch die Option, deine eigenen Mitschriften hochzuladen. Support-Priorisierung fällt bei diesem Angebot.</p>
                    <h2>14,99€</h2>
                    <input type="radio" name="subscription" value="option1">
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-bottom: 5px;margin-top: 5px; border-color: gold;">
                    <h1>PREMIUM</h1>
                    <p>Du möchtest dein komplettes Studium nur sehr gute Leistungen hinterlegen und tägliche Lernroutinen vollausgestattet ausführen? Schließe ein Jahresabonnement bei uns ab & genieße deine Support-Priorisierung!</p>
                    <h1>99,99€</h1>
                    <input type="radio" name="subscription" value="option2">
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-top: 5px;margin-bottom: 5px;">
                    <h1>3-Monate</h1>
                    <p>Du möchtest die Prüfungsphase vorbereitet starten? Mit diesem 3-MonateAbonnement vermeidest du den Stress in der Prüfungsphase, indem du rechtzeitig auf alle Unterlagen zugreifst und keine Informationen übersiehst!</p>
                    <h1>34,99€</h1>
                    <input type="radio" name="subscription" value="option3">
                </div>
            </div>
        </div>
        <hr>
        <br>
            <input type="checkbox" id="myCheck"> Hiermit akzeptiere ich die AGB           
        <br>
        <br>
            <input class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;" type="submit" onclick="checkForm()" value="Bezahlen">
        <br>
        <br>
       
    </div>
</form> 

</body>
</html>

<?php
    session_start();
    require_once('../AJAX/Utility/users.class.php');
    $user = new user();

    if(isset($_POST["subscription"])){
        $param = $_POST["subscription"];


        $date = date_create();
        $subscriber_id = $_SESSION['user'];
        $previous_subscription = date_create($user->getSubscriptionDate($subscriber_id));

        if($param == "option1"){
            if($previous_subscription < $date){
                //subscription expired, add 1 month to current timestamp
                $date->modify('next month');
                $tmp = $date->format('Y-m-d H:i:s');
                echo $tmp;
                $user->setSubscriptionDate($subscriber_id, $tmp);
            }else{
                //user has active subscription, add 1 month to existing timestamp from DB
                $previous_subscription->modify('next month');
                $tmp = $previous_subscription->format('Y-m-d H:i:s');
                echo $tmp;
                $user->setSubscriptionDate($subscriber_id, $tmp);
            }
        }
        else if($param == "option2"){
            if($previous_subscription < $date){
                //subscription expired, add 1 year to current timestamp
                $date->modify('next year');
                $tmp = $date->format('Y-m-d H:i:s');
                $user->setSubscriptionDate($subscriber_id, $tmp);
            }else{
                //user has active subscription, add 1 year to existing timestamp from DB
                $previous_subscription->modify('next year');
                $tmp = $previous_subscription->format('Y-m-d H:i:s');
                $user->setSubscriptionDate($subscriber_id, $tmp);
            }
        }
        else if($param == "option3"){
            if($previous_subscription < $date){
                //subscription expired, add 3 months to current timestamp
                $date->modify('+3 months');
                $tmp = $date->format('Y-m-d H:i:s');
                $user->setSubscriptionDate($subscriber_id, $tmp);
            }else{
                //user has active subscription, add 3 months to existing timestamp from DB
                $previous_subscription->modify('+3 months');
                $tmp = $previous_subscription->format('Y-m-d H:i:s');
                $user->setSubscriptionDate($subscriber_id, $tmp);
            }
        }
        else{
            //error?
        }
    }
?>
