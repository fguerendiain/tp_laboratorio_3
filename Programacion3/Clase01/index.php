<?php

    //EJERCICIO GUIA Nº6

    //crear un array de 5 numeros random


    // 1 - con constructor

    $arrayUno = array(rand(1,15),rand(1,15),rand(1,15),rand(1,15),rand(1,15));

    echo("<h1>Array Uno: </h1>");
    var_dump($arrayUno); //muestra el contenido del array

    echo("<br><br>");

    // 2 - entre corchetes por cada elemento

    $arrayDos = array();
    for( $i=0 ; $i < 5 ; $i++)
    {
        $arrayDos[$i] = rand(11,20);
    };

    echo("<h1>Array Dos: </h1>");
    var_dump($arrayDos);

    echo("<br><br>");

    // 3 - .array_push() para cada uno de los elementos

    $arrayTres = array();
    for( $i=0 ; $i < 5 ; $i++)
    {
        array_push($arrayTres,rand(21,30));
    };

    echo("<h1>Array Tres: </h1>");
    var_dump($arrayTres);

    echo("<br><br>");

?>