<?php

function getUsersList($Res){
    $i = 0;
    $Info = file($Res, FILE_IGNORE_NEW_LINES);

    foreach ($Info as $value){
        $arrayList = explode("   ", $value);

        $UsInfo[1][$i] = $arrayList[0];
        $UsInfo[2][$i] = $arrayList[1];
        $i++;
    }

    return $UsInfo;
}