<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php echo "\nHello" ?>
        <?php echo "\nHello" ?>
        <?= '\nHello' ?>
    </h1>

    <?php
    $car = 'fusca';
    echo '<p>' . 'É assim que meu ' . $car . ' anda.' . '</p>';

    define('STATUS', 'open');
    echo defined('STATUS');

    const ROOM = 1404; // Defined at compile time. Not permitted in control structures, whereas the define function can

    if (ROOM === 1404) {
        echo '<p>' . 'Esse quarto é do mal' . '</p>';
    }

    echo '<p>' . 'The store is ' . STATUS . '.' . '</p>';

    define('CAR_' . ROOM, 'fURGÃO');

    // echo CAR_1404;
    
    echo PHP_VERSION; // predefined constnts
    echo __FILE__; // magic constnts
    $foo = 'bar';
    $$foo = 'tolomeu';
    echo '<br>';
    echo $foo , $bar;
    echo '<br>';
    echo $foo , $$foo;
    echo '<br>';
    echo "$foo , $$foo"; // DO not work
    echo '<br>';
    echo "$foo , {$$foo}";
    echo '<br>';
    echo "$foo , ${$foo}";
    echo '<br>';
    ?>


</body>

</html>