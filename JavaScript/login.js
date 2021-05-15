$(document).ready(function(){
    $("#Anmelden").on("click", function(){
        sendData();
        $("form").trigger("reset");
    })
})


function sendData()
{
    var str = $("#Anmelden_Form").serialize();
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
            location.reload(); //Not working, maybe async false
        }
    })
}