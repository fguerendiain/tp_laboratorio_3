function AgregarUsuario(){
    alert("BOTOOOON");
    var formLegajo = $('#txtLegajo').val();
    var formNombre = $('#txtNombre').val();
    var formApellido = $('#txtApellido').val();
    var formSexo = $('input[name=rdSexo]').val();
    var formDni = $('#txtDni').val();
    var formPath_foto = $('#filePerfil').val();

    $.ajax({
        url: '../AbmUsuario/server/administracion.php',
        type: 'POST',
        data: { 
            legajo: formLegajo,
            nombre: formNombre,
            apellido: formApellido,
            sexo: formSexo,
            dni: formDni,
            path_foto: formPath_foto
        },
        dataType: 'text',
        success: function (data) {
                $("#actualView").html('<h1>'+data+'</h1>');
                }
    }).fail(function() {
        alert("No se pudo mandar nada");
    })

}
