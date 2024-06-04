<?php
    // Inicializando os arrays e adicionando elementos
    $carros = array("Veloster", "BMW", "Ferrari");
    $carros[] = "Amarok"; 
    $carros[10] = "Camaro";
    
    // Exibindo o array $carros
    echo "<pre>"; // Melhorar a visualização do array
    print_r($carros);
    echo "</pre>";
    
    // Exibindo elementos específicos e contagem
    echo "O carro da posição 10 é: " . $carros[10];
    echo ". Já a soma elementos: " . count($carros);
    echo "<br>";    

    // Inicializando o array $motos e adicionando elementos
    $motos = array();
    $motos[] = "yamaha";
    $motos[] = "honda";
    $motos[5] = "susuzi";
    
    // Exibindo o array $motos
    echo "<pre>"; // Melhorar a visualização do array
    print_r($motos);
    echo "</pre>";

    // Exibindo elementos específicos e contagem
    echo "A moto da posição 5 é: " . $motos[5];
    echo ". Já a soma elementos: " . count($motos);
    echo "<br>"; 

    // Inicializando o array $clientes
    $clientes = ["Rodrigo", "Felipe", "Bia"];
    
    // Exibindo o array $clientes
    echo "<pre>"; // Melhorar a visualização do array
    print_r($clientes);
    echo "</pre>";

    // Exibindo a variável indefinida (esta linha estava causando erro e foi corrigida)
    // echo $totalclientes; // Linha removida pois causava erro

    // Calculando e exibindo o total de clientes
    $totalClientes = count($clientes);
    echo "Total de clientes: " . $totalClientes;
    echo "<hr>";

    // Percorrendo o array $carros com foreach
    foreach ($carros as $valor) {
        echo $valor . "<br>";
    }

    // Arrays multidimensionais
    $times = array(
        "cariocas"=> array(
            "vice"=>"vasco",
            "campeao"=>"flamengo",
            "rebaixado"=>"botafogo"
        ),
        "paulistas"=> array(
            "vice"=>"santos",
            "campeao"=> "corinthians", 
            "rebaixado"=>"palmeiras"
        ),
        "baianos"=> array(
            "vice"=>"bahia",
            "campeao"=>"vitoria", 
            "rebaixado"=>"itabuna"
        )
    );
    echo "<hr>";
    echo "Times:";
    print_r($times);
    echo "<br/>";
    echo "Time campeão carioca: ";
    echo $times["cariocas"]["campeao"]; 
    echo "<br/>";
    echo "Time campeão paulistas: ";
    echo $times["paulistas"]["campeao"]; 
    echo "<br/>";
    echo "Time campeão baianos: ";
    echo $times["baianos"]["campeao"]; 

?>