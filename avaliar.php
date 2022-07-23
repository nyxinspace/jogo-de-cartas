<?php
 session_start();
  
 echo("<h1>O que você digitou</h1>");
  for($i=1;$i<= $_SESSION["numero_seq"];$i++){
      echo $_GET["naipe$i"] . " ";
      echo $_GET["carta_resposta$i"] . "<BR>";
  }
  ECHO("<BR><BR>");
  echo("<h1>Resposta correta</h1>");
  for($i=1;$i<= $_SESSION["numero_seq"];$i++){
    echo $_SESSION["carta$i"] . " ";
    echo $_SESSION["numero$i"] . "<BR>";
}
for($i=1;$i<= $_SESSION["numero_seq"];$i++){
    if($_GET["naipe$i"] == $_SESSION["carta$i"] &&  $_GET["carta_resposta$i"] == $_SESSION["numero$i"]){
        echo("Resposta $i: correta" . "<br>");
    } else {
        echo("Resposta $i: errada" . "<br>" );
    }

   
}


?>