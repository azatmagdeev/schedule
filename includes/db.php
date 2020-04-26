<?php
$connection = mysqli_connect(
'cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com',
'aor1qaagbqck8dc0',
'g957pjz6183p92u1',
'l71oqck6h7ezyshm'
);
//$connection = mysqli_connect(
//    'wz.log',
//    'root',
//    '',
//    'mydb'
//);

if ($connection == false) {
    echo 'Неудалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
}
