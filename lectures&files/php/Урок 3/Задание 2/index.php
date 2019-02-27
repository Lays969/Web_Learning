<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galery</title>
</head>
<body>
<!--
2. Создайте примитивную фотогалерею из двух страниц
	a. Пусть на главной странице галереи выводятся 3-4 изображения
	b. Каждое из них пусть будет ссылкой вида /image.php?id=42, где 42 - условный номер изображения
	c. На странице image.php вы по номеру понимаете, какое изображение вывести в браузер и выводите его.
	    Я ожидаю, что для этого пункта программы вы создатите массив вида [1 => 'cat.jpg', 2=>'dog.jpg', ... ], однако вы можете предложить и другое решение.
	    Кстати, этот же массив вы используете и в пункте 1 - для вывода изображений!
	    -->
    <?php
    $ImageArray[1] = '/image/CS2000.jpg';
    $ImageArray[2] = '/image/fasadnaya-teksturnaya-kraska.jpg';
    $ImageArray[3] = '/image/foot.jpg';?>

    <form method="get">
        Введите номер изображения:<input type="text" name="ImageNumber">
        <br>
        <button type="submit">Получить результат</button>
        <?php

        if(isset($_GET['ImageNumber']) && isset($_GET['ImageNumber'])) {
            foreach ($ImageArray as $key => $Value){
                if ($_GET['ImageNumber'] == $key){ ?>
                    <div class = "blok_img">
                        <img src="<?php echo $Value;?>?id=<?php echo $key;?>" class="pimg" title="" width="400px">
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </form>

<!--  Добавлен второй вариант, более короткий  -->
    <form method="post">
    <?php
        if(isset($_GET['ImageNumber']) && isset($_GET['ImageNumber'])) { ?>
            <div class = "blok_img">
                    <img src="<?php echo $ImageArray[ intval($_GET['ImageNumber'])];?>?id=<?php echo $key;?>" class="pimg" title="" width="400px">
                </div>
        <?php } ?>
    </form>

</body>
</html>