<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento </h1>
    </header>
    <main>
        <?php 
        //var_dump($_GET); // Super Variavel Global $_GET, $_POST, $_COOKIES
        // A $_REQUEST é uma junção das 3 citadas acima

    $nome = $_GET["nome"] ?? "nome não informado ";
    $sobrenome = $_GET["sobrenome"] ?? "sobrenome não informado" ;
    
    echo "é um prazer te conhecer <strong> $nome $sobrenome </strong>, esté é o meu site. "

        ?>

    <p><a href="javascript:history.go(-1)">Voltar</a></p>

    </main>
</body>
</html>