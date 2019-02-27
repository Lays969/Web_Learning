<?php
// Если cookie пустая, то ничего не делаем.
If (!isset($_COOKIE['ClientName'])){
    setcookie('ClientName', 'null');
}

include __DIR__ . "/UsersInfo.php";
include __DIR__ . "/CurrentUser.php";
include __DIR__ . "/UserVerification.php";
include __DIR__ . "/PasswordVerification.php";

$FileLocation = __DIR__ . '/users.txt';
If (file_exists($FileLocation)){                // Проверяем существование файла
    $Res = fopen($FileLocation, 'a+');
    $UserList = getUsersList($FileLocation);
    fclose($Res);
}

if (!isset($_POST['UserName'])){
    echo 'Для входа введите имя пользователя и пароль';
} else{
    $ResultUserVerification = existsUser($_POST['UserName']);
    $ResultPasswordVerification = CheckPassword($_POST['UserName'], $_POST['UserPassword']);
    if ($ResultUserVerification){
        if ($ResultPasswordVerification){
            setcookie('logged_in', 'yes');
            setcookie('ClientName', $_POST['UserName']);
            $UserName = getCurrentUser($_POST['UserName'], '1');

            //Перекидываем пользователя на главную страницу после входа
            sleep(3);
            header("Location: http://php6.local/index.php");

        }else{
            echo 'Введен не верный пароль!';
        }
    } else{
        $UserName = getCurrentUser($_POST['UserName'], '0');
    }
}

//if ($_COOKIE['logged_in'] === 'yes'){
//    sleep(3);
//    header("Location: http://php5.local/index.php");
//    exit;
//}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?



/* Использовал для задания логинов и паролей в файл

$FileLocation = __DIR__ . '/users.txt';
$Res = fopen($FileLocation, 'a+');
$Login = $_POST['UserName'];
$Pass = password_hash($_POST['UserPassword'], PASSWORD_DEFAULT);
var_dump($Login, $Pass);
fwrite($Res, "\r\n" . $Login . '   ' . $Pass);
fclose($Res);
*/

?>

<form method="post" enctype="multipart/form-data" action="login.php">
    <input type="text" placeholder="Введите имя пользователя" name="UserName">
    <input type="password" placeholder="Введите пароль" name="UserPassword">
    <button type="submit">Send</button>
</form>



</body>
</html>