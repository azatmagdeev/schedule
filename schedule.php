<?php
session_start();
if(!$_SESSION['login']){
    header('Location: index.php');
}
if (isset($_SESSION['login'])) {
    if ($_POST['logout']) {
        unset($_SESSION['login']);
        header('Location: index.php');
    }
}

//print_r($_SESSION);
include 'includes/db.php';
include 'includes/arrays.php';

?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Расписание</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
    </head>
    <body>


    <div class="container">

<?php
include "includes/nav.php";
?>
<!--        <nav class="navbar border">-->
<!--            <ul class="nav">-->
<!--                <li class="nav-item">-->
<!--                    <span class="nav-link alert-primary" >Приветствую, --><?// echo $_SESSION['login'] ?><!--!</span>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="schedule.php">Расписание</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="groups.php">Группы</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="tutors.php">Преподаватели</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <form method="post">-->
<!--                        <input type="submit" name="logout" value="Выйти" class="nav-link btn btn-outline-primary">-->
<!--                    </form>-->
<!--                </li>-->
<!--            </ul>-->

<!--            <div class="navbar-brand">Приветствую, --><?// echo $_SESSION['login'] ?><!--!</div>-->
<!--            <div>-->
<!--                <ul class="nav">-->
<!--                    <li>-->
<!--                        <a href="groups.php">Группы</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="nav-item mr-0">-->

<!--                </div>-->
<!---->
<!--            </div>-->
        </nav>
        <div class="row">
            <div class="col">
                <h1>Расписание</h1>
                <?echo $_SESSION['message'];
                        unset($_SESSION['message'])
                ?>
                <table class='table'>
                    <thead>
                    <th>№</th>
                    <th>Дата</th>
                    <th>Начало</th>
                    <th>Класс</th>
                    <th>Дисциплина</th>
                    <th>Группа</th>
                    <th>Преподаватель</th>

                    </thead>
                    <tbody>

                    <?php
                    foreach ($schedule as $item) {

                        echo "
                        <tr>
                            <td>{$item['id']}</td>
                            <td>{$item['day']}</td>
                            <td>{$lessons[$item['lesson_id']-1]['beginning']}</td>
                            <td>{$classes[$item['class_id']-1]['place']}</td>
                            <td>{$disciplines[$item['discipline_id']-1]['name']}</td>
                            <td>{$groups[$item['group_id']-1]['name']}</td>
                            <td>{$tutors[$item['tutor_id']-1]['secondName']}</td>";
                        if($_SESSION['login'] == 'admin'){
                            $id = $item['id'];
                            echo "
                            <td>
                             <form method='post' action='includes/deleteItem.php'>
                            <button type='submit' name='del' value='{$id}' class='btn btn-sm btn-outline-danger'>x</button>
                             </form>
                            </td>
                            ";
                        }
                         echo"</tr>
                ";

                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>
        <?php
        if ($_SESSION['login'] == 'admin') {
            include 'includes/addItemForm.php';
        }
        ?>

    </div>
    </body>
    </html>

    <!--                <form method="POST" action="add_student.php" class="form">-->
    <!--                    <p>Добавить студента</p>-->
    <!--                    <input type="number" name="group_id" placeholder="id группы">-->
    <!--                    <input type="text" name="firstName" placeholder="Имя">-->
    <!--                    <input type="text" name="secondName" placeholder="Фамилия">-->
    <!--                    <input type="tel" name="phone" placeholder="Телефон">-->
    <!--                    <input type="email" name="email" placeholder="Email">-->
    <!--                    <input type="submit" placeholder="Добавить">-->
    <!--                </form>-->
<?php
//print_r($_SESSION);
