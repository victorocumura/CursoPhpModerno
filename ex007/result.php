<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
<section>
    
        <form action="result.php" method="get">

        <h1>"Gerar um numero aleatorio entre 1 e 100..."</h1>
        
        <?php 

$nale = random_int(1,100);

echo "Gerando um numero aleatorio entre 1 e 100...";

echo "<br> O valor gerado foi $nale"

?>
     
        <input type="submit" value="Gerar Numero Aleatorio">

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
     
     </form>
    
    </section>
</main>

</body>
</html>