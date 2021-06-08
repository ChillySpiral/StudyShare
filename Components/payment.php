<!DOCTYPE html>
<html lang="en">

<head>
    <script src="./JavaScript/payment.js" defer></script>
    <script src="./JavaScript/jquery.min.js"></script>
    <script src="./CSS/bootstrap/js/bootstrap.min.js"></script>
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
                    <h1>Option 1</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <h1>Info</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <input type="radio" name="subscription" value="option1">
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-bottom: 5px;margin-top: 5px; border-color: gold;">
                    <h1>Option 2</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <h1>Info</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <input type="radio" name="subscription" value="option2">
                </div>
            </div>
            <div class="col-md-4">
                <div style="border-width: 1px;border-style: solid;border-radius: 45px;margin-right: 30px;margin-left: 30px;padding: 5px;margin-top: 5px;margin-bottom: 5px;">
                    <h1>Option 3</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <h1>Info</h1>
                    <p style="text-align: center;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
                    <input type="radio" name="subscription" value="option3">
                </div>
            </div>
        </div>
        <hr>
        <br>
            <input type="checkbox" id="myCheck"> Hiermit akzeptiere ich die AGB           
        <br>
        <br>
            <input class="btn btn-primary" style="background: #fe5f55;border-radius: 15px;" type="button" onclick="checkForm()" value="Bezahlen">
        <br>
        <br>
       
    </div>
</form> 

</body>
</html>

<?php
    /* $date = date_create();
    if(isset())
    $param = $_POST["subscription"];

    if($param == "option1"){
        if(date_create($user->getSubscriptionDate) < $date){
            //subscription expired, add 1 month to current timestamp
        }else{
            //user has active subscription, add 1 month to existing timestamp from DB 
        }
    }
    else if($param == "option2"){
        //same as above, just add 3 months
    }
    else if($param == "option3"){
        //same here, just add 12 months / 1 year
    }
    else{
        //error?
    } */
?>