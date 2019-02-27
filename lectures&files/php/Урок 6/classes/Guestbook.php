<?php

require __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{

    public function __construct($FileLocation)      // Передаем путь до файла, считываем защищенные данные
    {
        $this->FileLocation = $FileLocation;
        $Res = fopen($FileLocation, 'a+');
        fclose($Res);
    }

    public function getData($Res)               // Получаем данные из файла
    {
        //Чтение файла
        $lines = file($Res, FILE_IGNORE_NEW_LINES);
        return $lines;
    }

    public function append($text, $comment)           // Добавляет новую запись к массиву записей
    {
        if ($TextVariable !== array_pop($FileCont)) {
            $ArrayLenght = count($text);
            array_push($text, $comment);

        }if ($ArrayLenght < $ArrayLenght + 1) {
            return $text;
        } else {
        return null;
    }
    }

    public function save($FileLocation, $text)                  // Сохраняем массив в файл
    {
        $Res = fopen($FileLocation, 'a+');
        fwrite($Res, "\r\n" . $text);
        fclose($Res);
        return 1;
    }
}