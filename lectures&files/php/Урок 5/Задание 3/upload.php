<?php
if ('no' == $_COOKIE['logged_in'] or null == $_COOKIE['logged_in']){
    ?><h1><? echo 'Для загрузки картинки вам необходимо авторизоваться' ?></h1>
    <?
}



if ( isset($_FILES['picture']) ) {
    if (0 == $_FILES['picture']['error']) {
        if ("image/jpeg" == $_FILES['picture']['type'] || "image/png" == $_FILES['picture']['type']) {
            $FileName = $_FILES['picture']['name'];

            $path = __DIR__ . '/images';

            // Получаем расширение загруженного файла
            $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

            // Собираем адрес файла назначения
            $target = $path . '/' . uniqid() . '.' . $extension;

            $res = move_uploaded_file(
                $_FILES['picture']['tmp_name'],
                $target
            );


            // Запись логов загрузки в файл
            $LogLocation = __DIR__ . "/images/log.txt";
            $Res = fopen($LogLocation, 'a+');
            fwrite($Res, $_COOKIE['ClientName'] . ' ' . date('h:i:s') . ' ' . $target . "\r\n");
            fclose($Res);

            ?>
            <h1>Спасибо! Ваш файл успешно загружен</h1>
            <a href="index.php">
                <button>Вернуться на главную</button>
            </a>
            <?
        }else{?>

            <h1>Вы выбрали не правильное расширение файла!</h1>
            <a href="index.php"><button>Вернуться на главную</button></a>
            <?
        }
    }else{?>

        <h1>Ошибка загрузки файла!</h1>
        <a href="index.php"><button>Вернуться на главную</button></a>
<?
   }
} ?>

