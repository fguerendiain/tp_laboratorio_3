$("#document").ready(function(){

        $("#btnEnviar").click(function(){   
    
    var mail = $('email').val();
    var pass = $('#pass').val();

    var datosLogin = {email:mail, password:pass}

//            window.location.replace("./index.html?autor=franco&fuente=verdana&color=blue");


    $.ajax({
        url:'http://localhost:1337/login',
        type:'POST',
        dataType: "JSON",
        data: datosLogin
        })
    .done(function(data){
        if(data.autenticado == "si")
        {
            window.location.replace("../index.html?autor="+data.author+"&fuente="+data.font+"&color="+data.color);
        }
    })
})});