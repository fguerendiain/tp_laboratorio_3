<?php
    include_once ("funciones.php"); //el once a diferencia del include, solo incluye una vez
 //   include_once ("calculadora.php");
 //   require ("funciones.php");
 
    $resultado = Sumar(2,2);

    echo $resultado;
    echo ("<br>");
    
    $resultado2 = calculadora::Sumar(3,3);

    echo $resultado2;

?>