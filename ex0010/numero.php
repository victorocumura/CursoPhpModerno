<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de numero real</title>
</head>
<body>
    <main>

    <h1>Analisador de Numero Real</h1>
    
    <?php
    
    $num = $_POST["n"] ?? 0;

    echo "<p> Analisando o Número <strong>". number_format($num, 3, ",",".") ."</strong> informado pelo usuario </p>";
    
    $int = (int) $num;
    $fra = $num - $int;

    echo "<ul><li> a parte inteira do numero é <strong>". number_format($int, 0, ",",".") ."</strong></li>";

    echo "<li>A parte frácionária do número é <strong>".number_format($fra, 3, ",",".")."</strong></li></ul>";

    ?>

    <button onclick="javascript:history.go(-1)">Voltar</button> 

    </main>
</body>
</html>