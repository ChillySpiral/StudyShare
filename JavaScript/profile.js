$(document).ready(function(){
    loadCategories();
})

function loadCategories()
{
    $.ajax({
        type: "POST",
        url: "../AJAX/serviceHandler.php",
        cache: false,
        data: {function: "categories", param: ""},
        dataType: "json",
        success: function(response)
        {
            var obj = response;
            console.log(obj);
            for(var i=0;i<obj.length;i++)
            {
                if(i==0)
                {
                    $("#uploadCategories").append("<option value="+obj[i].id+" selected=''>"+obj[i].name+"</option>");
                }
                else
                {
                    $("#uploadCategories").append("<option value="+obj[i].id+">"+obj[i].name+"</option>");
                }
            }
        }
    })
}