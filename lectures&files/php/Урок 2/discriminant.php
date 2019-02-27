<?php
function descry($x, $y, $c){
    if ($y * $y > 4 * $x * $c){
        return 2;
    }elseif ($y * $y === 4 * $x * $c){
        return 1;
    }
    else return 0;
}
?>