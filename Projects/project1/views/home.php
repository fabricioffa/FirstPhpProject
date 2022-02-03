<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance</title>
</head>

<body>
    <h1>Balance</h1>

    <table>
        <thead>Keep an eye on your money</thead>
        <tbody>
            <?php
            require_once APP_PATH . 'app.php';
            
            foreach ($fileContent as $i => $line) {
                if ($i === 0) {
                    echo '<tr>';
                    foreach ($line as $th) echo '<th>' . $th . '</th>';
                    echo '</tr>';
                }

                echo '<tr>';
                foreach ($line as $tr) echo '<td>' . $tr . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
            <tfoot>
                <tr>
                    <td>Total Income</td>
                </tr>
                <tr>
                    <td>Total Expense</td>
                </tr>
                <tr>
                    <td>Net Total</td>
                </tr>
            </tfoot>
    </table>
</body>

</html>