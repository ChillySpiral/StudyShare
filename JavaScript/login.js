$(document).ready(function(){
    $("#fail_log").hide();
    $('#Anmelden_Form').keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            sendData();
            $("form").trigger("reset"); 
        }
    });
    $("#Anmelden").on("click", function(){
        sendData();
        $("form").trigger("reset");     //Resets the form after pressing submit
    })
})


function sendData()
{
    var str = $("#Anmelden_Form").serialize(); //Puts all the form content in one string
    $.ajax({
        async: false,
        type: "POST",
        url: "../AJAX/serviceHandler.php",
        cache: false,
        data: {function: "login", param: str},
        dataType: "json",
        success: function(response)
        {
            if(response == true)
            {
                $("#fail_log").hide();             //Error Message hidden if log in sucessful
                window.location.href="../";      //if the response is not NULL the user is logged in and redirected to the front page
            }
            else
            {
                $("#fail_log").show();          //show error message in case of a failed login attempt
            }

        }
    })
}