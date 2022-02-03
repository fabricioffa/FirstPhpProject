<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require 'partials/nav.html' ?>


    <?php
    // Include retorna 1 no sucesso ou o retorno do código importado
    // Expression are anything that evaluets to a value;

    ob_start();
    include 'partials/nav.html';
    $nav = ob_get_clean();

    var_dump($nav);

    echo str_replace('Link', 'Outro link', $nav);

    ?>


</body>

</html>