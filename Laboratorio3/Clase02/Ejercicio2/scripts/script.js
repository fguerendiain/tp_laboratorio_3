function Sumar()
{
    var num1 = parseInt(document.getElementById("numero1").value);
    var num2 = parseInt(document.getElementById("numero2").value);
    var txtResultado = document.getElementById("resultado");
    var resultado = num1 + num2;

    if(isNaN(resultado))
    {
        txtResultado.value = "Los datos no son validos";
    }
    else
    {
        txtResultado.value = resultado;
    }

}