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
        $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "Sem nome";
        $ano = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
        $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "Sem sexo";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos.";
        ?>
         <a href="02exercicio.php" class="botao">Voltar</a> 
    </div>
</body>
</html>