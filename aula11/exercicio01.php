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
        $c = 1;
        while ($c <= 15) {
            echo "$c <br>";
            $c++;
        }
        ?>
    </div>    
</body>
</html>