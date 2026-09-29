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
        $ano = $_GET["an"];
        $idade = 2026 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos </br>";
        $tipo = ($idade >= 18 && $idade < 65)? "OBRIGATORIO":  "NÃO OBRIGATORIO";
        echo "E dessa forma seu voto é $tipo";

        ?>
    </div>
</body>
</html>