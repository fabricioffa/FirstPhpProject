<?php

function foo(): int
{
    return 1;
}

function bar(): ?int
{
    return null;
}

function mult(): int|float|array
{
    return 2;
}

function mixf(): mixed
{
    return 2;
}

function soma(int|float &$x, int|float $y = 10, int|float ...$rest): string
{
    $x++;
    $y++;
    return 'Eita';
}

$y = [1,2, 3,4,5,56];
$a = 3;
$b = 4;
$comNome = ['b' => 1, 'a' => 2];

soma($a, $b, ...$y);

function div ($a, $b) {
    return $a / $b;
}

echo div(a: $b, b: $a) . 'div 1 <br />';
echo div(...$comNome) . ' div 2 <br />';

echo $a;