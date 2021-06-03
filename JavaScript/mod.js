$(document).ready(function(){
    loadData();
})

function loadData()
{
    $.ajax({
        type: "POST",
        url: "../AJAX/serviceHandler.php",
        cache: false,
        data: {function: "moderator", param: "nothing"},
        dataType: "json",
        success: function(response)
        {
          var obj = response;  
          console.log(obj[0].title);
          console.log(obj[0].name);
          console.log(obj[0].description);
          console.log(obj[0].username);
          console.log(obj[0].filename);
          debugger;

          //Appending
        }
    })
}