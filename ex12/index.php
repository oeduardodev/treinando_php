<?php 

$cor = "verde";

switch ($cor):
    case "vermelho":
        echo "Sua cor preferida é o vermelho";
        break;
    case "verde":
        echo "Sua cor preferida é o verde";
        break;
    case "azul":
        echo "Sua cor preferida é azul";
        break;
    default:
        echo "Informe uma cor válida";
endswitch;

// Tambem funciona assim, com uma sintaxe parecida como do js.

// switch ($cor) {
//     case 'verde':
//         echo "Sua cor preferida é o verde";
//     break;    
//     case "azul":
//         echo "Sua cor preferida é azul";
//     break;
//     default:
//         echo "Informe uma cor válida";
//     break;
// }
?>