$(document).ready(function()
{

    var altaURL = "../AbmUsuario/views/alta.html";
    var bajaURL = "../AbmUsuario/views/baja.html";
    var modificacionURL = "../AbmUsuario/views/modificacion.html";


    $("#menuButtonAlta").click(function(){
        $("#actualView").load(altaURL)
        });

    $("#menuButtonBaja").click(function(){
        $("#actualView").load(bajaURL)
        });

    $("#menuButtonModif").click(function(){
        $("#actualView").load(modificacionURL)
        });

});
