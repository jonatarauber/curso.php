<!DOCTYPE html>
<html lang="pt-BR   ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
            /*Esse código pega o valor do ano atual que foi passado na URL e decrementa 1 para mostrar o ano anterior*/
            $atual = $_GET["aa"]; // Essa linha pega o valor do ano atual que foi passado na URL
            echo "O ano atual é $atual e o ano anterior é ". --$atual;
        ?>
    </div>
</body>
</html>