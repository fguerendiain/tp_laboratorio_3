function AgregarUsuario(){
    alert("BOTOOOON");
    var formLegajo = $('#txtLegajo').val();
    var formNombre = $('#txtNombre').val();
    var formApellido = $('#txtApellido').val();
    var formSexo = $('input[name=rdSexo]').val();
    var formDni = $('#txtDni').val();
    var formPath_foto = $('#filePerfil').val();

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
