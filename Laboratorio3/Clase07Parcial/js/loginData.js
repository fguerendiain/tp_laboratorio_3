$(document).ready(function(){

    if(localStorage.getItem("user"))
    {
        var mail = localStorage.getItem("user");
        window.location.replace("index.html?autor="+mail+"&fuente=verdana&color=blue");
    }

    $("#btnEnviar").click(function(){   
    
    var mail = $('#email').val();
    var pass = $('#pass').val();

 //   var datosLogin = {email:mail, password:pass}
    localStorage.setItem("user",mail);    
    window.location.replace("index.html?autor="+mail+"&fuente=verdana&color=blue");


/*    $.ajax({
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
*/})});