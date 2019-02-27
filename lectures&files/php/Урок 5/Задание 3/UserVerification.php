<?php
function existsUser($login){

    $FileLocation = __DIR__ . '/users.txt';

    If (file_exists($FileLocation)){                // Проверяем существование файла
        $Res = fopen($FileLocation, 'a+');
        $Info = file($FileLocation, FILE_IGNORE_NEW_LINES);
        fclose($Res);
    }
    $i = 0;
    foreach ($Info as $value){
        $arrayList = explode("   ", $value);

        $UsInfo = $arrayList[0];
        If ($UsInfo == $login){
            //echo 'Такой пользователь существует!' . "\r\n";
            return 1;
        }
    }
    echo 'Ошибка. Пользователь не существует';
    return 0;
}