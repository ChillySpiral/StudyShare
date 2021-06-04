$(document).ready(function(){
    loadData();
    $('button').click(function(){
        var content = $(this).attr('content'); //Gets which button has been pressed
        var id = $(this).attr('id');

        sendData(content,id);
    })
})

//Loads the document data from the DB and appends the result into the table
function loadData()
{
    $.ajax({
        async:false,
        type: "POST",
        url: "../AJAX/serviceHandler.php",
        cache: false,
        data: {function: "moderator", param: "nothing"},
        dataType: "json",
        success: function(response)
        {
          var obj = response;
          debugger;
          for(var i=0;i<obj.length;i++)
          {  
            $('#content').append("<tr id='"+obj[i].id+"'><td>"+obj[i].title+"</td><td>"+obj[i].name+"</td><td>"+obj[i].description+"</td><td>"+obj[i].username+"</td><td><a href='../AJAX/uploads/"+obj[i].filename+"' download>"+obj[i].filename+"</a></td><td><button id='"+obj[i].id+"' content='mod_approve' class='btn btn-primary' style='margin-right: 5px'>Approve</button><button id='"+obj[i].id+"' content='mod_delete' class='btn btn-danger'>Delete</button></td></tr>")
          }
          //debugger;

          //Appending
        }
    })
}

//Sends the Request to the database (approve or delete)
function sendData(method,param){
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