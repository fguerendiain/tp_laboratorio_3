window.onload = function()
{
    var altaURL = "../views/alta.html";
    var bajaURL = "../views/baja.html";
    var modificacionURL = "../views/modificacion.html";
    var urlPath;

    var altaButtonElement = document.getElementById("menuButtonAlta");
    var bajaButtonElement = document.getElementById("menuButtonBaja");
    var modificacionButtonElement = document.getElementById("menuButtonModif");
    var divView = document.getElementById("actual-view");

    altaButtonElement.onclick = SolicitarRequest;
    bajaButtonElement.onclick = SolicitarRequest;
    modificacionButtonElement.onclick = SolicitarRequest;

    function SolicitarRequest()
    {

        urlPath = altaURL;
        viewRequest = new XMLHttpRequest();
        viewRequest.open('GET',urlPath,true);
        viewRequest.onReadyStateChange = AcknowledgeResponse;
        viewRequest.Send();
    }

    function AcknowledgeResponse()
    {
        if(viewRequest.readState == viewRequest.DONE)
        {
            divView.innerHTML = "<h1>hecho...</h1>";
        }
        else
        {
            divView.innerHTML = "<h1>cargando...</h1>";
        }
    }

}

/*    tipo de Request{
        GET 
        POST
        PUT
        DELETE
    }

    redyState de Request{
        0 (cuando todavia no se envio)
        1 (open = cuando se inicia el request)
        2 (cuando llega al servidor)
        3 (cuando el servidor esta cargando la respuesta)
        4 (cuando llego Done)
    }

    var miDivHtml;

        //declarar objeto request en js
    var req = new XMLHttpRequest();

        //metodo, url del servidor, acyncronia activada
    req.open('Get', 'http://localhost/getpost.php',true);

        //seteo que en caso del evento , se ejecuta la funcion recibir
    req.onredyStateChange = Recibir; 

        //envio al servidor la request
     req.Send();   

        //declaracion de la funcion recibir
     public function Recibir()
     {
        if(req.readState == 4)
        {
            //ya esta la respuesta del servidor
            req.responseText;
            miDivHtml.innerHTML = req.responseText;
        }
        else
        {
            miDivHtml.innerHTML = "cargando";
        }
    }*/