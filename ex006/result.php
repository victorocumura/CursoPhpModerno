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

<?php 

$nrec = $_GET["nrec"] ?? "numero não informado";
$antc = $nrec - 1;
$susc = $nrec + 1;

echo "Numero informado $nrec <br> Antecessor $antc <br> Sucessor $susc"

?>

<p><a href="javascript:history.go(-1)">Voltar</a></p>

</main>

</body>
</html>