<?php

//Коротышки из знаменитого Солнечного города любят читать. Читают много, как научную фантастику, так и книжки по программированию.
//А также берут друг у друга что-то почитать. Вся информация об этом фиксируется, в виде двух коллекций, borrowers и returners.
//В первой из сих замечательных коллекций содержится информация о том, кто кому дал почитать книгу. Во второй — кто кому вернул книжку.
//Выведите на экран всех коротышек, кто взял книжку и по прошествии времени не захотел вернуть.
//1. Например,
//       первая коллекция borrowers означает, что Незнайка дал книжку Ворчуну,
//       Медуница — Молчуну и т.д.
//borrowers = {"Незнайка": "Ворчун", "Медуница": "Молчун", "Винтик":
//"Синеглазка"}
//2. вторая коллекция означает, что Синеглазка вернула книжку Винтику, Ворчун — Незнайке.
//returners = {"Синеглазка": "Винтик", "Ворчун": "Незнайка"}
//А Молчун взял книжку и не вернул.

$borrowers = [
    '1' => 'Незнайка:Ворчун',
    '2' => "Медуница:Молчун",
    '3' => "Винтик:Синеглазка",
];

$returners = [
    '1' => 'Синеглазка:Винтик',
    '2' => "Ворчун:Незнайка",
];

$i = 0;
foreach ($borrowers as $value){
    $ArrBorrowers = explode(":", $value);
    $ArrBorr1[$i] = $ArrBorrowers[0];
    $ArrBorr2[$i] = $ArrBorrowers[1];
    $i++;
}

$i = 0;
foreach ($returners as $value){
    $ArrReturners = explode(":", $value);

    $ArrRet1[$i] = $ArrReturners[0];
    $ArrRet2[$i] = $ArrReturners[1];
    $i++;
}

$i = 0;
$j = 0;
foreach ($ArrBorr2 as $borrower){
    $NumbVar = 0;
    $i = 0;
    foreach ($ArrRet1 as $returner){
        If ($borrower == $returner){
            echo $ArrBorr1[$i] . ' получил свою книжку назад' . "\r\n";
            $NumbVar = 1;
        }
        $i++;
    }
    If (0 == $NumbVar){
        echo $returner . " не вернул книжку!" . "\r\n";
    }
    $j++;
}