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
        // Every space counts
        # Heredoc
        $x = 2;
        $y = 3;
        $text = <<<TEXT
        Line 1 + $x
        Line 2 + $y
        Line 3 ' "
        TEXT;

        echo nl2br ($text);

        # Nowdoc
        $x = 2;
        $y = 3;
        $text = <<<'TEXT'

        Line 1 + $x
        Line 2 + $y
        Line 3 ' "
        TEXT;

        echo nl2br ($text);

    ?>

</body>
</html>