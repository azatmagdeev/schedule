<?php
//

//$schedule = result_to_array(
//    mysqli_query($connection, construct_query(
//        $_GET['day'],
//        $_GET['lesson_id'],
//        $_GET['class_id'],
//        $_GET['discipline_id'],
//        $_GET['group_id'],
//        $_GET['tutor_id']
//    ))
//);

header("Location: ../schedule.php?day={$_POST['day']}&lesson_id={$_POST['lesson_id']}&class_id={$_POST['class_id']}&discipline_id={$_POST['discipline_id']}&group_id={$_POST['group_id']}&tutor_id={$_POST['tutor_id']}");
