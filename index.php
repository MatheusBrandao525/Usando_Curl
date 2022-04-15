<?php

    // Aula de Curl

    $curl = curl_init(); //iniciando o Curl

    curl_setopt($curl, CURLOPT_URL,"http://localhost/Usando_Curl/request.php"); // pegando a URL
    curl_setopt($curl, CURLOPT_POST, 1); // Definindo o valor 1 para ficar ativado

    curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array('request'=> 'name_return')));

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


    $server_output = curl_exec($curl);

    curl_close($curl);

    $resultado = json_decode($server_output);

    //print_r($resultado);
    echo $resultado->resultado;


?>