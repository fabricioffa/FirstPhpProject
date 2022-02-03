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

    # 4 scalar types
    # bool
    # int
    # float
    # string
    $status = true;
    $age = 54;
    $price = 3.5;
    $name = 'Zé';

    echo gettype($status) . '<br />';
    echo var_dump($status) . '<br />';
    echo gettype($age) . '<br />';
    echo var_dump($age) . '<br />';
    echo gettype($price) . '<br />';
    echo var_dump($price) . '<br />';
    echo gettype($name) . '<br />';
    echo var_dump($name) . '<br />';

    # compound types
    # array
    # object
    # callable
    # iterable

    $anArray = [1, 1.5, true, 'foo'];
    print_r($anArray);

    # special types
    # resource
    # null

    function sum($x, $y)
    {
        var_dump($x, $y);
        return $x + $y;
    }
    echo '<br />';
    echo sum(2, 3);
    echo '<br />';
    echo sum(2, '3');
    $result = sum(2, '3');
    echo '<br />';
    var_dump($result);
    
    function sum2(int $x, int $y)
    {
        // $x = 5.5 could change here
        var_dump($x, $y);
        return $x + $y;
    }
    echo '<br />';
    echo sum2(2, '3');
    echo '<br />';
    echo sum2(2.6, '3');
    echo '<br />';
    echo sum2(2.3, '3');
    echo '<br />';
    // echo sum2(2.3, 'car'); ERROR
    
    // declare(strict_types=1); must come first
    
    function sum3(int $x, float $y) //type hinting
    {
        var_dump($x, $y);
        return $x + $y;
    }
    echo '<br />';
    // echo sum3(2.3, '3'); Does not covert
    echo sum3(2.3, 2); // Works fine with strict mode 
    
    echo '<br />';
    echo '<br />';
    $typeCast = (int) '2';
    var_dump($typeCast);
    

    ?>
</body>

</html>