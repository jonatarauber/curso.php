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
        $estado = $_GET['estado'] ?? '';
        switch ($estado) {
            case 'Acre':
            case 'Amazonas':
            case 'Roraima':
            case 'Rondônia':
            case 'Pará':
            case 'Amapá':
            case 'Tocantins':
                echo "Você mora na região Norte do Brasil!";
                break;
            case 'Paraná':
            case 'Santa Catarina':
            case 'Rio Grande do Sul':
                echo "Você mora na região Sul do Brasil!";
                break;
            case 'São Paulo':
            case 'Rio de Janeiro':
            case 'Minas Gerais':
            case 'Espírito Santo':
                echo "Você mora na região Sudeste do Brasil!";
                break;
            case 'Mato Grosso':
            case 'Mato Grosso do Sul':
            case 'Goiás':
            case 'Distrito Federal':
                echo "Você mora na região Centro-Oeste do Brasil!";
                break;
            case 'Bahia':
            case 'Sergipe':
            case 'Alagoas':
            case 'Pernambuco':
            case 'Paraíba':
            case 'Rio Grande do Norte':
            case 'Ceará':
            case 'Piauí':
            case 'Maranhão':
                echo "Você mora na região Nordeste do Brasil!";
                break;
            default:
                echo "Estado inválido!";
        }
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>    
</body>
</html>