<?php 
// While & Do While

$contador = 1;
    while ($contador <= 10) {
        echo "Contador é $contador <br>";
        $contador++;
    }
echo "<hr>";
    do {
        echo "Contador é $contador <br>";
        $contador++;
    } while ($contador <= 10);
echo "<hr>";

//for & foreach

    for ($contador=0; $contador <= 5 ; $contador++) { 
       echo "o contador é: $contador <br>";
    }
echo "<hr>";
    $cores = array("verde","azul","laranja","preto");
    foreach ($cores as $index => $valor) {
        echo $index . "-" . $valor ."<br>";
    }
?>