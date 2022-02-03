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

        # Falsy
            # 0, -0, 0.0, -0.0, '', '0', [], null

        $isComplete = true;
        $isIncomplete = (string) false;
        
        echo $isComplete . '<br />';
        echo (string) $isComplete . '<br />'; // The same as above
        echo is_bool($isComplete) . '<br />'; // The same as above
        echo is_bool($isIncomplete) . '<br />'; // The same as above

    ?>

</body>
</html>