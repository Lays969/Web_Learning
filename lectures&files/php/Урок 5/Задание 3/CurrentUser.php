<?php
function getCurrentUser($login, $number){
    if ($number){
        //echo 'Приветствую Вас, ' . $login . '!';
        return 1;
    } else {
        return 0;
    }
}