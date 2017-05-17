$(document).ready(function()
{

    //Urls de Vistas
    var altaURL = "../AbmUsuario/views/alta.html";
    var bajaURL = "../AbmUsuario/views/baja.html";
    var modificacionURL = "../AbmUsuario/views/modificacion.html";

/*
**
**  FUNCIONALIDADES DE INICIO
**
**
*/

    // por defecto al cargar la pagina
    // muestra el modal con el login
    MostrarModalLogin();
    ValidarLoginConBootstrap();




    //si encuentra informacion en el localstorage,
    //la valida y de ser correcta omite el login
    if(localStorage.getItem("user") && localStorage.getItem("passw"))
    {
        var user = localStorage.getItem("user");
        var pass = localStorage.getItem("passw");

        validarUsuario(user,pass);
    }




    //al precionar SingIn valida los datos ingresados
    $("#btnSingIn").click(function(){   

        loginConValoresDeUsuario();

    });

    //al precionar ENTER en cualquier campo del
    //formulario de login valida los datos ingresados
    $('#txtUsuarioLogin').keypress(function(e){
        if(e.which == 13){
            loginConValoresDeUsuario();
        }
    });
    $('#txtPasswordLogin').keypress(function(e){
        if(e.which == 13){
            loginConValoresDeUsuario();
        }
    });



/*
    //al precionar LogOut se borra el contenido
    // de localStorage y muestra Loguin modal
    $("#btnLogOut").click(function(){   
    
        localStorage.removeItem("user");    
        localStorage.removeItem("passw");    

        MostrarModalLogin();
    });

*/


/*
**
**  INTERCAMBIO DE VISTAS
**
**
*/

    //Inyecta la vista de Alta al precionar el boton
    $("#menuButtonAlta").click(function(){
        $("#actualView").load(altaURL)
        .ready(ValidarAltaConBootstrap());
    });




    //Inyecta la vista de Baja al precionar el boton
    $("#menuButtonBaja").click(function(){
        $("#actualView").load(bajaURL);
    });




    //MuInyecta la vista de Modificar al precionar el boton
    $("#menuButtonModif").click(function(){
        $("#actualView").load(modificacionURL);
    });




/*
**
**  FUNCIONES
**
**
*/

    //Despliega el modal de Login
    function MostrarModalLogin(){
        $('#loginModal').modal({
            show: true,
            backdrop: false
        });
    }




    //Tomas los datos ingresados por el usuario y los carga en localstorage
    function loginConValoresDeUsuario(){
        var user = $('#txtUsuarioLogin').val();
        var pass = $('#txtPasswordLogin').val();

        localStorage.setItem("user",user);    
        localStorage.setItem("passw",pass);    

        validarUsuario(user,pass);
    }




    //valida los datos de loguin (al momento harcodeados)
    function validarUsuario(user, pass){
    //    alert("entro a validar");
         window.location.replace("index.html?autor="+user+"&fuente=verdana&color=blue");
 

/*        $.ajax({
            url: 'http://localhost:1337/loginRecu',
            type: 'POST',
            data: {email:user,password:pass},
            dataType: "xml/html/script/json",
            contentType: "application/json"
        })
        .done(function (data) {
            alert("andooo");
           if(data.autenticado == "si" && data.role == "admin")
            {
                window.location.replace("../index.html?autor="+data.author+"&fuente="+data.font+"&color="+data.color);
            }
         })
        .fail(function(e) {
            alert("No se pudo mandar nada");
            alert(e);
        })
  */ }




    //Validaciones con Bootstrap Validator
    //---------Login Modal-------------
    function ValidarLoginConBootstrap(){
        $('#loginModal').bootstrapValidator({

            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },

            fields: {
                txtUsuarioCtrlName: {
                    validators: {
                        notEmpty: {
                            message: 'El Correo no puede estar vacio'
                        },
                        emailAddress: {
                            message: 'El Correo no es valido'
                        }
                    }
                },

                txtPasswordCtrlName: {
                    validators: {
                        notEmpty: {
                            message: 'La contraseña no puede estar vacia'
                        }
                    }
                },
            }
        });
    }




    //Validaciones con Bootstrap Validator
    //---------Alta Fomr-------------
    function ValidarAltaConBootstrap(){
        $('#altaForm').bootstrapValidator({
            
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },

            fields: {
                txtLegajoCtrlName: {
                    message: 'El Legajo no puede estar vacio ',
                    validators: {
                        notEmpty: {
                            message: 'El numero de legajo es requerido y no puede ser vacio'
                        },
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'El legajo solo puede contener numeros'
                        }
                    }
                },

                txtNombreCtrlName: {
                    validators: {
                        notEmpty: {
                            message: 'El Nombre no puede estar vacio'
                        }
                    }
                },

                txtApellidoCtrlName: {
                    validators: {
                        notEmpty: {
                            message: 'El apellido no puede estar vacio'
                        }
                    }
                },
                txtDniCtrlName: {
                    message: 'El Dni no es valido',
                    validators: {
                        regexp: {
                            regexp: /^[0-9]+$/,
                            message: 'El Dni solo puede contener números'
                        }
                    }
                },
            }
        });
    }
});
