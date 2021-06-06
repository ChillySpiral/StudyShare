function checkForm() {
    var option = document.forms[0];
    var txt = "";
    var i;
    for (i = 0; i < option.length - 2; i++){     
        if (option[i].checked) {
          chosenOption = option[i].value; 
        }
    }
    if(document.getElementById("myCheck").checked == false) {
        alert("Bitte die AGB akzeptieren!");
    }
    else{
        alert(chosenOption);
        //addSubscription("GET", chosenOption); //will need to give user_id too (as an array probably, then process with array_pop), to add subscription
    }
}

function addSubscription(method, param){ //trying AJAX... not working
    $.ajax({
        type: "POST",
        url: "../AJAX/serviceHandler.php",
        cache: false,
        data: {function: method, param: param},
        dataType: "json",
        success: function(response)
        {
            $("#"+param).remove();
        }
    })
}