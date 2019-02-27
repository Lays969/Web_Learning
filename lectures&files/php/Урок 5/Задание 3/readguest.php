<?php
function reading($FileLoc){
    $lines = file($FileLoc, FILE_IGNORE_NEW_LINES);
    return $lines;
}
?>