<?php
if ($_GET[Operation]== '*') {
    echo $_GET['FirstNumber']*$_GET['SecondNumber'];
} elseif ($_GET['Operation'] == '+'){
    echo $_GET['FirstNumber']+$_GET['SecondNumber'];
} elseif ($_GET[Operation]== '-'){
    echo $_GET['FirstNumber']-$_GET['SecondNumber'];
} elseif ($_GET[Operation]== '/'){
    echo $_GET['FirstNumber']/$_GET['SecondNumber'];
}