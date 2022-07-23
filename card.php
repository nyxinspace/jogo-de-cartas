<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
session_start();
$tempo = $_POST["tempo"];
$numero_seq = $_POST["numero_seq"];

//SALVANDO VARIÁVEIS PARA OUTRA PÁGINA
$_SESSION["tempo"] = $tempo;
$_SESSION["numero_seq"] = $numero_seq;

//DEFINE O TEMPO EM QUE O USUÁRIO FICARÁ NA PAGINA
header("refresh: 10;task.php");



//AQUI OCORRE O SORTEIO DAS CARTAS
for ($i = 1; $i <= $numero_seq; $i++) {
    
    echo("<div class='cartas_div'>");
    $frases2 = array(
        1 => "A",
        2 => "2",
        3 => "3",
        4 => "4",
        5 => "5",
        6 => "6",
        7 => "7",
        8 => "8",
        9 => "9",
        10 => "10",
        11 => "J",
        12 => "Q",
        13 => "K"
    );
    $numero2 = rand(1,13);
    echo "<p class='cards_text'>$frases2[$numero2]</p>";
    $_SESSION["numero$i"] = "$frases2[$numero2]";
    $frases = array(
        1 => "Ouros",
        2 => "Copas",
        3 => "Espadas",
        4 => "Paus"
    );
    $numero = rand(1,4);

    if($frases[$numero] == "Paus"){
      echo("<img style='width:30%; margin-left:35%;margin-right:35%;' src='img/paus.png'>");
    } else if ($frases[$numero] == "Ouros"){
        echo("<img style='width:30%; margin-left:35%;margin-right:35%;' src='img/ouros.png'>");
    } else if ($frases[$numero] == "Copas"){
        echo("<img style='width:30%;margin-left:35%;margin-right:35%;' src='img/copas.png'>");
    } else {
        echo("<img style='width:30%; margin-left:35%;margin-right:35%;' src='img/espadas.png'>");
    }
    echo("</div>");
    $_SESSION["carta$i"] = "$frases[$numero]";
    
  
   
}


?>
</body>
</html>