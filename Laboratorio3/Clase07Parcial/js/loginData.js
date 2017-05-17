$(document).ready(function(){

    $('#loginmodal-container').bootstrapValidator({

        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
            emailCtrl: {
                validators: {
                    emailAddress: {
                        message: 'El correo electronico no es valido'
                        }
                    }
                }
            },
    });

    $("#btnEnviar").click(function(){   
    
            var mail = $('#email').val();
            var pass = $('#pass').val();

            var datosLogin = {email:mail, password:pass};

            $.ajax({
                url:'http://localhost:1337/loginRecu',
                type:'POST',
                data: JSON.stringify(datosLogin)
                })
            .done(function(data){
                if(data.autenticado == "si" && data.role == "admin")
                {
                    window.location.replace("../index.html?autor="+data.author+"&fuente="+data.font+"&color="+data.color);
                }
            })
            .fail(function(){
                window.location.replace("index.html?autor="+mail+"&fuente=verdana&color=blue");
            })

    })
});