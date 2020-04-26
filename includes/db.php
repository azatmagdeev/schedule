<?php
$connection = mysqli_connect(
'wz.log',
'root',
'',
'mydb'
);

if ($connection == false) {
    echo 'Неудалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
}
