<?php 
    $nomes = array("Rodrigo", "Felipe", "Maria", "José");
    $familia = array(   
        "pai" => "Rodrigo",
        "primo" => "Felipe",
        "mãe" => "Maria",
        "filho" => "José"
    );
    if(is_array($nomes)):
        echo "É um array ";
    else:
        echo "não é um array" ;
    endif; 
    echo "</br>";
    if(in_array("Eduardo", $nomes)):
        echo "Tem no array";
    else:
        echo "não tem no array";
    endif;
    echo "</br>";
    $keys = array_keys($familia);
    print_r($keys)    
?>