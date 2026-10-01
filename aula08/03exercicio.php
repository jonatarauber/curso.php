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
        <form method="get" action="03cores.php">
            <label for="itxt">Texto:</label>
            <input type="text" name="t" id="itxt" /> <br>
            <label for="itam">Tamanho:</label>
            <select name="tam" id="itam">
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="20">20</option>
                <option value="24">24</option>  
            </select> <br>
            <label for="icor">Cor:</label>
            <input type="color" name="cor" id="icor" /> <br>
            <input type="submit" value="Gerar!" />         
                          
        </form>
            
    </div>
</body>
</html>