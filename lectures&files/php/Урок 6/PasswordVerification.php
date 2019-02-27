<?php
function CheckPassword($login, $password){
    $FileLocation = __DIR__ . '/users.txt';

    If (file_exists($FileLocation)){                // Проверяем существование файла
        $Res = fopen($FileLocation, 'a+');
        $Info = file($FileLocation, FILE_IGNORE_NEW_LINES);
        fclose($Res);
    }

    $i = 0;
    foreach ($Info as $value){
        $arrayList = explode("   ", $value);
        if ($arrayList[0] == $login){
            if (password_verify($password, $arrayList[1])){
                return 1;
            }
        }
    }
    return 0;
}