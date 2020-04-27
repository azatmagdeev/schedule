<nav class="navbar border alert-info">
    <ul class="nav">
<!--        <li class="nav-item">-->
<!--            <span class="nav-link alert-primary">Приветствую, --><?// echo $_SESSION['login'] ?><!--!</span>-->
<!--        </li>-->
        <li class="nav-item">
            <a class="nav-link" href="../schedule.php">Расписание</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../groups.php">Группы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../tutors.php">Преподаватели</a>
        </li>
        <li class="nav-item">
            <form method="post" action="includes/logout.php">
                <input type="submit" name="logout" value="Выйти" class="nav-link btn btn-outline-primary">
            </form>
        </li>
    </ul>
</nav>