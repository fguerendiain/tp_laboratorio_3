$(document).ready(function(){

    $("#acambiarcolor").attr("style='color:"+ getParameterByName('color')+"'");


    $("#btnlogout").click(function(){
        window.location.replace("login.html");
    });

});
 
function ValidarFormulario(){
    $('#myModal').modal("hide");
       var nom = $("#txtNombre").val();
       var mail = $("#txtEmail").val();
       var site = $("#txtWebSite").val();
       var ubic = $("#txtUbicacion").val();

       var anterior = $('#postview').html();

       $('#postview').html(anterior +
            "<div><label>Nombre: "+nom+"</label></div>"+
            "<div><label>Email: "+mail+"</label></div>"+
            "<div><label>Sitio: "+site+"</label></div>"+
            "<div><label>Direccion: "+ubic+"</label></div><br><br>"
       );
}

function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }   
