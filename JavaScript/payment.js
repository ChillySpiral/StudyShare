function checkForm() {
    var option = document.forms[0];
    var chosenOption = "";
    var i;
    for (i = 0; i < option.length - 2; i++){     
        if (option[i].checked) {
          chosenOption = option[i].value; 
        }
    }
    if(document.getElementById("myCheck").checked == false) {
        alert("Bitte die AGB akzeptieren!");
    }
}