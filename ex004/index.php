<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Strings</title>
</head>
<body>
    <?php 
    
    // $nome = "Jeff"; 
    // echo "Olá $nome \u{1F596}"; aspas duplas exige interpretação do php

    // $nome = "Jeff"; 
    // echo 'Olá $nome \u{1F596}'; aspas simples não exige interpretação portanto não mostra o conteudo da variavel

    // const ESTADO = "RJ";
    // echo "moro no ESTADO"; esse não ira funcionar 
    // echo 'moro no ESTADO'; nem esse
    // interpretação interna para constantes não funciona nem com aspas duplas nem com aspas simples 
    // const ESTADO = "MG";
    // echo "Moro em ".ESTADO; constantes funcionam apenas com concatenação

    // caso queira colocar um apelido entre nome e sobrenome não use aspas antes e depois do nome, use a tecnica de sequencia de escape
    
    // $nom = "Rodrigo";
    // $snom = "Nogueira";

    // echo "$nom "Minotauro" $snom"; não dara certo
    // echo '$nom "Minotauro" $snom'; não dara certo pois aspas simples não exigem interpretação do php, portanto as variaveis não serão lidas corretamente pelo programa
    // o correto seria 
    // echo "$nom \"Minotauro\" $snom";
    
    //Heredoc
    // Não funcionara no formato HTML
    // $canal = "CursoEmVideo";
    // $ano = date('Y');

    // echo <<< TESTE
    // Estou relembrando meus aprendizados em PHP e aprendendo mais sobre as ultimas atualizações do PHP com o $canal
    //                               no ano de $ano
    //     excelente professor o
    //                           Gustavo Guanabara

    // TESTE; interpretara as variaveis

    //Nowdoc
    // Não funcionara no formato HTML
    // $canal = "CursoEmVideo";
    // $ano = date('Y');

    // echo <<< 'TESTE'
    // Estou relembrando meus aprendizados em PHP e aprendendo mais sobre as ultimas atualizações do PHP com o $canal
    //                               no ano de $ano
    //     excelente professor o
    //                           Gustavo Guanabara

    // TESTE; Não interpretara as variaveis pois contem aspas simples

    ?>
</body>
</html>