<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Null int = 0, string = '', array = [], boolean = false

    //null contant
    $x = null;

    echo $x . '<br />';
    var_dump($x) . '<br />';
    var_dump($x === null) . '<br />';
    var_dump(is_null($x)) . '<br />';

    //unset

    unset($x);

    echo $x;

    ?>

</body>

</html>