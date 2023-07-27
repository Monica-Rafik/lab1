<?php

$department = $_GET['department'];

$data = file('data.txt');

foreach ($data as $key => $value) {

    $line = explode(':', $value);

    if($department == $line[1]){
        unset($data[$key]);
        break;
    }

}


$file = fopen('data.txt', 'w');

foreach ($data as $key => $value) {

    fwrite($file, $value);

}

fclose($file);

header('location:save.php');