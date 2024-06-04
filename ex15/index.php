<?php 
// Operadores lógicos
//Nos permitem fazer comparações entre expre
//e (&& - and)
//ou (|| - or)
// ou exclusivo (xor) IMPORTANTE XOR FUNCIONA APENAS QUANDO UMA DAS OPÇÕES É VERDADEIRAS SE AS DUAS FOREM NÃO FUNCIONA 
//negação (!)
$idade = 25;
$nome = "Rodrigo";
    if(($idade == 25) and ($nome == "Rodrigo")):
        echo "É verdadeiro";
    else:
        echo "É falso";
    endif;
?>