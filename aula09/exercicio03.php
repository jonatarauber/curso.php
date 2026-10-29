<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $m = ($n1 + $n2) / 2;
        if( $m < 5){
            echo "Sua média foi $m. Você está reprovado!";
        } elseif ($m >= 5 && $m < 7) {
            echo "Sua média foi $m. Você está de recuperação!";
        } else {
            echo "Sua média foi $m. Parabéns, você está aprovado!";
        }
        ?>
    </div>    
</body>
</html>