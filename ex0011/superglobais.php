<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>SuperGlobais</title>
</head>
<body>
    
<main>

<pre>
    <?php
    
    setcookie("dia-da-semana", "Segunda", time() + 3600);
    session_start();
    $_SESSION["test"] = "Funcionou";

    //Pega Dados pela URL
    echo "<h1>Super Global Get</h1>";
    var_dump($_GET);
    
    //Pega dados pelo cabeçalho
    echo "<h1><br>Super Global Post</h1>";
    var_dump($_POST);
    
    //Pega Dados em GET e POST
    echo "<h1><br>Super Global Request</h1>";
    var_dump($_REQUEST);
    
    //Salva dados do perfil e compornamentais
    echo "<h1><br>Super Global Cookie</h1>";
    var_dump($_COOKIE);

    //Mantem sua sessão ativa
    echo "<h1><br>Super Global Session</h1>";
    var_dump($_SESSION);

    //Mostra as variaveis de ambiente
    echo "<h1><br>Super Global ENV</h1>";
    var_dump($_ENV);
    /* foreach (getenv() as $c => $v) {
        echo "<br> $c -> $v";
    };*/

    //mostra as variaveis do seu servidor
    echo "<h1><br>Super Global Server</h1>";
    var_dump($_SERVER);

    //Pega o conteudo de todas as outras Globais
    echo "<h1><br>Super Global Globals</h1>";
    var_dump($GLOBALS);

    ?>
</pre>

</main>

</body>
</html>