<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript">
     function handleInput(e) {
            var ss = e.target.selectionStart;
            var se = e.target.selectionEnd;
            e.target.value = e.target.value.toUpperCase();
            e.target.selectionStart = ss;
            e.target.selectionEnd = se;
}

    </script>
</head>
<body>

<?php
    session_start();
    echo("<form  action='avaliar.php'>");
    for($i = 1; $i <= $_SESSION["numero_seq"]; $i++){
        echo("<div class='cartas_div'>");
        echo("<h1>Qual o valor da carta $i?</h1>");
        echo("<input type='text' name='carta_resposta$i' oninput='handleInput(event)'><br>");
        echo("<input type='radio' id='ouros' id='txt1' name='naipe$i' value='Ouros'  >");
        echo("<label> Ouros </label>");
        echo("<input type='radio' id='espadas' onkeyup='maiuscula(this)' name='naipe$i' value='Espadas'  >");
        echo("<label> Espadas </label><br>");
        echo("<input type='radio' id='paus' onkeyup='maiuscula(this)' name='naipe$i' value='Paus' >");
        echo("<label> Paus </label>");
        echo("<input type='radio' id='copas'  name='naipe$i' value='Copas' >");
        echo("<label> Copas </label><br>");
    
       echo("</div>");
    }
    echo("<input type='submit'>");
    echo("</form>");
    //echo $_SESSION["carta$i"];
    //echo $_SESSION["numero$i"];
?>
</body>
</html>

