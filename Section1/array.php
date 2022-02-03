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

        // Array
            // Can't access negative indexs
        
        $cars = ['fusca', 'ferrari', 'kombi'];
        $sizes = array('big', 'small', 'enourmous'); // old way
        var_dump(isset($cars[4]));
        echo '<br/>';
        var_dump($cars);
        echo '<br/>';
        print_r($cars);
        echo '<br/>';
        echo '<pre>';
        print_r($cars);
        echo '</pre>';
        echo count($cars);
        $cars[] = 'eclipse';
        echo '<br/>';
        echo '<pre>';
        print_r($cars);
        echo '</pre>';
        array_push($cars, 'rolimã', 'carruagem');
        echo '<br/>';
        echo '<pre>';
        print_r($cars);
        echo '</pre>';

        // Associative arrays

        $frameworks = [
            'React' => '12.4.2',
            'ReactNative' => '8.7.2',
            'Laravel' => '13.5.2',
        ];
        
        echo '<br/>';
        echo '<pre>';
        print_r($frameworks);
        echo '</pre>';
        
        $newFramework = 'Vue';
        
        $frameworks[$newFramework] = '9.5.1';
        
        echo '<br/>';
        echo '<pre>';
        print_r($frameworks);
        echo '</pre>';

        // Can nest arrays
        // Equal keys overides
        // Keys must be either ints or strings, but it will try to cast

        $arrayCasted = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];

        echo '<br/>';
        echo '<pre>';
        print_r($arrayCasted);
        echo '</pre>';
        echo '<br/>';
        echo $arrayCasted[''];
        echo '<br/>';
        echo $arrayCasted[null];
        echo '<br/>';
        
        // Automactic assigment takes on the last biggest integer
        
        $halfAssigned = ['a', 'b', 'c', 50 => 'd', 'e', 'f'];
        
        echo '<br/>';
        echo '<pre>';
        print_r($halfAssigned);
        echo '</pre>';

        // WHen shifted, array re-index
        array_pop($halfAssigned);
        array_shift($halfAssigned);
        
        echo '<br/>';
        echo '<pre>';
        print_r($halfAssigned);
        echo '</pre>';

        // Unset does not re-index , even if all indexes are deleted

        unset($halfAssigned[2], $halfAssigned[3]); // Destroys only that index
        unset($halfAssigned); // Destroys the array

        array_key_exists(3, $halfAssigned); // If it is in the array
        isset($halfAssigned[3]); // If it is in the array and is not null

        ?>


</body>

</html>