<?php

    //EJERCICIO GUIA Nº6

    //crear un array de 5 numeros random

    $arratTres;

    // 1 - con constructor
    $arrayUno = array(rand(1,15),rand(1,15),rand(1,15),rand(1,15),rand(1,15));

    echo("Array Uno: ");
    var_dump($arrayUno);

    echo("<br><br>");

    // 2 - entre corchetes por cada elemento
    $arrayDos = array();

    for( $i=0 ; $i < 5 ; $i++)
    {
        $arrayDos[$i] = rand(11,20);
    };

    echo("Array Dos: ");
    var_dump($arrayDos);

    echo("<br><br>");

    // 3 - .Push() para cada uno de los elementos

    $arrayTres = array();
    for( $i=0 ; $i < 5 ; $i++)
    {
        $arrayTres.array_push($arrayTres,rand(21,30));
    };
    
    echo("Array Tres: ");
    var_dump($arrayTres);

    echo("<br><br>");

    // mostrar el contenido de un array



    /*<------------------------------------------------->
        var_dump() muestra el contenido del array

        */

?>