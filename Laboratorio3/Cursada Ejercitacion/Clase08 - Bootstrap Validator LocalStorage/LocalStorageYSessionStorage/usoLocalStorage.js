    /*
        Local Storage y Session Storage
        *Son espacios de memoria que nos ofrece el browser para guardar informacion en forma de colecciones de tipo [clave : valor]
        *Local Storage, va a guardar la coleccion hasta que nosotros le digamos
        *Session Storage, va a guardar la coleccion mientras exista la ventana
        *para ver si el browser nos permite utilizar estas carateristicas utilizamos:
*/
        //  Se trata de castear Storage, y si es igual a undefined quiere desir que no se puede usar

        if(typeof(Storage)!=="undefined"){
            //En caso que este instalado

            localStorage.setItem("autor","Mariano"); //o localStorage.actor="mariano";   //Forma de guardar en el localStorage

            var autor = localStorage.getItem("autor");  //Forma de leer datos desde el localStorage

            localStorage.removeItem("autor"); //para eliminar items del localStorage

        }else
        {
            alert("no esta instalado");
        }