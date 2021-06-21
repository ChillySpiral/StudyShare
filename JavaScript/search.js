$(document).ready(function(){
    loadCategories();
    getAllDocuments();
    $('#Search_Form').keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            sendData();
            $("form").trigger("reset"); 
        }
    });
    $("#Search_Button").on("click", function(){
        sendData();
        $("form").trigger("reset");     //Resets the form after pressing submit
    })
})

function sendData()
{
    var str = $("#Search_Form").serialize(); //Puts all the form content in one string
    $.ajax({
        async: false,
        type: "POST",
        url: "./AJAX/serviceHandler.php",
        cache: false,
        data: {function: "search", param: str},
        dataType: "json",
        success: function(response)
        {
            var obj = response;
            $("#Search_Results").empty();
            for(var i = 0; i<obj.length;i++)
            {
                $("#Search_Results").append("<div class='container'><div class='row'><h1>"+obj[i].title+"</h1></div><div class='row'><div class='col-2'><img class='img-fluid' src='images/static-images/pdf.png'></div><div class='col-10'>"+obj[i].description+"</div><a href='./AJAX/uploads/"+obj[i].filename+"' download style='padding: 5px; margin-left:10px; margin-top: 5px; margin-bottom: 5px;background: #fe5f55;border-radius: 15px; color: white;'>Download</a></div></div>")
            }
        }
    })
}

function loadCategories()
{
    $.ajax({
        type: "POST",
        url: "./AJAX/serviceHandler.php",
        cache: false,
        data: {function: "categories", param: ""},
        dataType: "json",
        success: function(response)
        {
            var obj = response;
            console.log(obj);
            for(var i=0;i<obj.length;i++)
            {
                $("#feedCategories").append("<li class='list-group-item' id='"+obj[i].id+"'><span>"+obj[i].name+"</span></li>");
            }
        }
    })
}

function getAllDocuments()
{
    $.ajax({
        type: "POST",
        url: "./AJAX/serviceHandler.php",
        cache: false,
        data: {function: "AllDocs", param: ""},
        dataType: "json",
        success: function(response)
        {
            var obj = response;
            $("#Search_Results").empty();
            for(var i = 0; i<obj.length;i++)
            {
                $("#Search_Results").append("<hr class='feed-documents'><div class='container'><div class='row'><h1>"+obj[i].title+"</h1></div><div class='row'><div class='col-2'><img class='img-fluid' src='images/static-images/pdf.png'></div><div class='col-10'>"+obj[i].description+"</div><a href='./AJAX/uploads/"+obj[i].filename+"' download style='padding: 5px; margin-left:10px; margin-top: 5px; margin-bottom: 5px;background: #fe5f55;border-radius: 15px; color: white;'>Download</a></div></div>")
            }
        }
    })
}