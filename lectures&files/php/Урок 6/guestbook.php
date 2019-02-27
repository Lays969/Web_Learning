<?
if (empty($_COOKIE['commentator']) or null == $_COOKIE['commentator']){
    setcookie('commentator', 'null');
}
If (isset($_COOKIE['commentator'])){
    if (md5(5) == $_COOKIE['commentator'] or !isset($_COOKIE['commentator'])){
        setcookie('commentator', 'null');
        sleep(2);
        header("Location: http://php6.local/index.php");
    }
    require __DIR__ . '/classes/Guestbook.php';
}

$FileLocation = __DIR__ . "/commentary.txt";
$GuestComments = new GuestBook($FileLocation);                  // Объявляем объект
$text = $GuestComments->getData($FileLocation);                 // На выходе получаем массив данных из файла

if (isset($_POST['Commentaries'])){
    If (!is_null($text = $GuestComments->append($text, $_POST['Commentaries'])))
    {
        $Result = $GuestComments->save($FileLocation, $_POST['Commentaries']);
        If ($Result){
            setcookie('commentator', md5(5));
            echo 'Ваш комментарий успешно добавлен!';
        } else{
            echo 'Произошла ошибка при сохранении комментария';
        }
    }else{
        echo 'оОшибка обработки данных Оо';
    }
}


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
</head>
<body>

<!--
1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:
	1. В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из ней (используйте защищенное свойство объекта для хранения данных)
	2. Метод getData() возвращает массив записей гостевой книги
	3. Метод append($text) добавляет новую запись к массиву записей
	4. Метод save() сохраняет массив в файл
2*. Продумайте - какие части функционала можно вынести в базовый (родительский) класс TextFile, а какие - сделать в унаследованном от него классе GuestBook
-->

     <table border="1px">
        <? foreach ($text as $key => $Value){?>
            <tr>
                <td>
                    <?php echo $key?>
                </td>
                <td>
                    <?php echo $Value?>
                </td>
            </tr>
        <?php }?>
     </table>

    <form method="post" >
        <textarea placeholder="Оставьте свой отзыв" rows="5" cols="30" name="Commentaries"></textarea>
        <a href="guestbook.php"><button type="submit">Отправить</button></a>
    </form>


</body>
</html>