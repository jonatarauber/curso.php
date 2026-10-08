<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
    $txt = isset ($_GET["t"])? $_GET["t"]: "Testo Generico";
    $tam = isset ($_GET["tam"])? $_GET["tam"]: "12pt";
    $cor = isset ($_GET["cor"])? $_GET["cor"]: "#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>
        }
    </style>
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
        echo "<span class='texto'>$txt</span> ";
        ?>
            
    </div>
</body>
</html>