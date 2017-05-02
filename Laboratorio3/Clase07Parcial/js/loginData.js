$("#document").ready(function(){

        $("#btnEnviar").click(function envioStd(){   
    
    var email = $('email').val();
    var password = $('#pass').val();

    var datosLogin = {
            email: email,
            password: password
        }

            window.location.replace("../../index.html");

    $.ajax({
        url:'http://localhost:1337/login',
        type:'POST',
        dataType: "JSON",
        data: datos
        })
    .done(function(data){
        if(data.autenticado == "si")
        {
            window.location.replace("../index.html");
        }
    })
})});