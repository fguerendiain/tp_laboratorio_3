function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#fotoPreview').attr('src', e.target.result);
            $('#fotoPreview').attr("style","'display:inline;'");
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function ValidarFormulario()
{

    var formLegajo = $('#txtLegajo').val();
    var formNombre = $('#txtNombre').val();
    var formApellido = $('#txtApellido').val();
    var formSexo = $('input[name=rdSexo]').val();
    var formDni = $('#txtDni').val();
    var formPath_foto = $('#filePerfil').val();


    var flag = true;
    var flagLegajo = true;
    var flagNombre = true;
    var flagApellido = true;
    var flagDni = true;
    var flagFoto = true;

  //Valido que el legajo solo contenga numeros
    if(!/^([0-9])*$/.test(formLegajo)){
        flag = false; 
        flagLegajo = false;
    }
  //Valido que el nombre solo contenga letras
    if(!/^[a-z][a-z]*/.test(formNombre)){
        flag = false; 
        flagNombre = false;
    }
  //Valido que el apellido solo contenga letras
    if(!/^[a-z][a-z]*/.test(formApellido)){
        flag = false; 
        flagApellido = false;
    }

    //Valido que el dni solo contenga numeros
    if(!/^([0-9])*$/.test(formDni)){
        flag = false; 
        flagDni = false;
    }

    //Valido que el path de la imagen no este vacio
    if(formPath_foto === ""){
        flag = false; 
        flagFoto = false;
    }

    //Informo por Alert los campos que no se ajustan a las validaciones
    if(!flag){
        var cadena = "Los siguientes datos son incorrectos:\n";

        if(!flagLegajo){cadena+="N° Legajo\n";}
        if(!flagNombre){cadena+="Nombre\n";}
        if(!flagApellido){cadena+="Apellido\n";}
        if(!flagDni){cadena+="Dni\n";}
        if(!flagFoto){cadena+="Foto de Perfil";} 
        
        alert(cadena);
        return;
    }
    alert("BOTOOOON");
    datos = { 
            legajo: formLegajo,
            nombre: formNombre,
            apellido: formApellido,
            sexo: formSexo,
            dni: formDni,
            path_foto: formPath_foto
        };

    $.ajax({
        url: '../AbmUsuario/server/administracion.php',
        type: 'POST',
        data: datos,
        dataType: 'text',
        success: function (data) {
            alert("andooo");
                $("#actualView").html('<h1>HOLA '+data+'</h1>');
                }
    }).fail(function() {
        alert("No se pudo mandar nada");
    })
}

//$('#filePerfil').change(function(){
//    $('#fotoPreview').attr("src",$('#filePerfil').val());
//    $('#fotoPreview').attr("style","'display:inline;'");
//});


