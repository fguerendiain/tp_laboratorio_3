$(document).ready(function()
{

    var altaURL = "../AbmUsuario/views/alta.html";
    var bajaURL = "../AbmUsuario/views/baja.html";
    var modificacionURL = "../AbmUsuario/views/modificacion.html";

    //por defecto al cargar la pagina muestra el modal con el login
    $('#loginModal').modal({
        show: true,
        backdrop: false
    });

    //si encuentra informacion en el localstorage, la valida y de ser correcta omite el login
    if(localStorage.getItem("user") && localStorage.getItem("passw"))
    {
//        alert("habia algo en el localstorage");
        var user = localStorage.getItem("user");
        var pass = localStorage.getItem("passw");

        validarUsuario(user,pass);
    }

    //al precionar SingIn valida los datos ingresados
    $("#btnSingIn").click(function(){   
    
//        alert("preciono boton SIngIN");
        var user = $('#txtUsuario').val();
        var pass = $('#txtPassword').val();

//        alert(user + " " + pass);
        localStorage.setItem("user",user);    
        localStorage.setItem("passw",pass);    

        validarUsuario(user,pass);

    });

    $("#menuButtonAlta").click(function(){
        $("#actualView").load(altaURL);
        });

    $("#menuButtonBaja").click(function(){
        $("#actualView").load(bajaURL);
        });

    $("#menuButtonModif").click(function(){
        $("#actualView").load(modificacionURL);
        });

//valida los datos de loguin (al momento harcodeados)
function validarUsuario(user, pass){
//    alert("entro a validar");
    if(user == "hola" && pass == "hola")
    {
        $('#loginModal').modal("hide");
    }
}

});

