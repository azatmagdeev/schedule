<?php
session_start();
//print_r($_POST);
include 'db.php';
//include 'arrays.php';
//
$query = "delete from `schedule` where id = {$_POST['del']}";
//
if(mysqli_query($connection,$query)){
$_SESSION['message'] = '<div class="alert-success" >Запись успешно удалена!</div>';
header('Location: ../schedule.php')     ;
}else{
    echo mysqli_error($connection);
}
//style="color: green;background-color: yellow"