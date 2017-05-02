$("#document").ready(function(){

    $("#addPost").click(function(){
        var urlParameter = getParameterByName();
        var titulo = $("#postTitle").val(); 
        var contenido = $("#postContent").val(); 

        var datosPost = {
            "title": titulo,
            "header": urlParameter.textheader,
            "posttext": contenido,
            "author" : urlParameter.author
        }

        $("#postview").html("<img src='image/126.gif'>");

        $.ajax({
        url:'http://localhost:1337/postearNuevaEntrada',
        type:'POST',
        dataType: "json",
        data: datosPost
        })
        .done(function(data){
        if(data.autenticado == "si")
        {

        }
        })
    })
})

function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }   

