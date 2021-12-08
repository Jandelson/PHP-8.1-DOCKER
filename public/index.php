<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Fiber;
use App\Teste;

$objeto = new Teste();
$retorno = $objeto->stringNumber('string');
var_dump($retorno);


print "<pre>";

$array = [2, 4, 6];
$extra = 10;

$newNumbers = array_map(function ($i) use ($extra) {
    return $i * $extra;
}, $array);


$newNumbers = array_map(fn($i) => $i * $extra, $newNumbers);

var_dump($newNumbers);


$someNumbers = [2, 10, 1];
$numbers = [1, ...$someNumbers, 5];
print_r($numbers);


echo $objeto->soma(...$someNumbers);