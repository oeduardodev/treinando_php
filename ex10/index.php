<?php 
    $soma  = array(1.5,3.5,2,6,23.6);
    echo array_sum($soma);
    echo "<br>";
    $data = "30/02/2018";
    $novaData = explode('/', $data);
    print_r($novaData);
    $frase = "meu nome não é johnny";
    $array = explode("não", $frase);
    print_r ($array); 
?>