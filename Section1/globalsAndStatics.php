<?php

$x = 5;

function foo()
{
    // global $x;
    // echo $x;
    echo $GLOBALS['x'];
}

foo();

function getValue() {
    static $value = null;
    
    if ($value === null) {
        $value = someExpensiveCalc();
    } 
    
    return $value;
}

function someExpensiveCalc() {
    sleep(2);

    echo 'uma vez';

    return 10;
}

echo getValue() . '<br />';
echo getValue() . '<br />';
echo getValue() . '<br />';