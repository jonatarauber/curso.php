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
        <form method="get" action="02idade.php">
            Nome: <input tupe="text" name="nome" /><br>
            Ano de Nascimento: <input type="number" name="ano" /><br>  
            <fieldset><legend>Sexo</legend>
                <input type="radio" name="sexo" id="masc" value="Homem" checked/>
                <label for="masc">Masculino</label>
                <input type="radio" name="sexo" id="fem" value="Mulher" />
                <label for="fem">Feminino</label>
            </fieldset><br>
            <input type="submit" value="Enviar" /> 
                          
        </form>
            
    </div>
</body>
</html>