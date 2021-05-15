$(document).ready(function(){
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
        url: "./AJAX/serviceHandler.php",
        cache: false,
        data: {function: "login", param: str},
        dataType: "json",
        success: function(response)
        {
            console.log(str);
            location.reload();      //if the response is not NULL the user is logged in and the page refreshed
        }
    })
}