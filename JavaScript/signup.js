$(document).ready(function(){
    $("#fail_log").hide();
    $("#Registrieren").on("click", function(){
        sendData();
        $("form").trigger("reset");     //Resets the form after pressing submit
    })
})


function sendData()
{
    var str = $("#Registrieren_Form").serialize(); //Puts all the form content in one string
    $.ajax({
        async: false,
        type: "POST",
        url: "../AJAX/serviceHandler.php",
        cache: false,
        data: {function: "signup", param: str},
        dataType: "json",
        success: function(response)
        {
            if(response == true)
            {
                $("#fail_log").hide();             //Error Message hidden if signup sucessful
                window.location.href="login.php";      //if the response is not NULL the user is registred and redirected to the login page
            }
            else
            {
                $("#fail_log").show();          //show error message in case of a failed signup attempt
            }

        }
    })
}