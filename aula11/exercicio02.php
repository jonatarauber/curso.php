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
        <form method="get" action="02-parte2.php">
        <?php 
        $c = 1;
        while ($c <= 5) {
            echo "<label for='v$c'>Valor $c: </label>";
            echo "<input type='number' name='v$c' id='v$c' max='100' min='0' value='0'><br>";
            $c++;
        }
        ?>
        <input type="submit" value="Enviar">
        </form>
    </div>    
</body>
</html>