$(document).ready(function(){

 /*   //Validaciones con Bootstrap Validator
    //---------Login-------------
    $('#loginValues').bootstrapValidator({

        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
            emailCtrl: {
                validators: {
                    notEmpty: {
                        message: 'El Usuario no puede estar vacio'
                        },
                    emailAddress: {
                        message: 'El correo electronico no es valido'
                        }
                    }
                }
            },
    });
*/



    $("#btnEnviar").click(function(){   
    
    var mail = $('#email').val();
    var pass = $('#pass').val();

    var datosLogin = {'email':mail, 'password':pass};


        $.ajax({
            url:'http://localhost:1337/loginRecu',
            type:'GET',
            data: datosLogin,
            dataType: "xml/html/script/json",
            })
        .done(function(data){
            if(data.autenticado == "si" && data.role == "admin")
            {
                window.location.replace("../index.html?autor="+data.author+"&fuente="+data.font+"&color="+data.color);
            }
        })
   });


});



