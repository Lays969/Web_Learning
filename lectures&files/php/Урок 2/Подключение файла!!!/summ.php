<?php

function sum($x, $y)
{
    return $x + $y;
}
/*  Базовая проверка работы функции  */
assert(1 === sum(0,1))
assert(1 === sum(1,0))
assert(13 === sum(8,5))
?>