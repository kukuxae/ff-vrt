<?php
session_start(); //сессия
    $title = "Главная";
    include 'header.php';
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    include 'logform.php'; // Если пусты, показываем форму входа

    // Если пусты, мы не выводим ссылку
    echo "Вы вошли на сайт, как гость <br><a href='site/reg.php'>Зарегистрироваться</a>";

}

else
{

    // Проверяем роль, если админ, добавляем ссылку на админку
        include("bd.php");
        $login1 =$_SESSION['login'];
        $result = mysql_query("SELECT * FROM users WHERE log='$login1'",$db); //извлекаем из базы все данные о пользователе с введенным логином
        $myrow = mysql_fetch_array($result);
        $_SESSION['role'] = $myrow['role'];
        echo "Вы вошли на сайт, как " . $_SESSION['login'];
       ?> <a href="site/exit.php">Выйти</a> <?php

        if ($_SESSION['role']=='admin') {
           echo "<br><a href='site/adm.php'>Управление</a>";
       }

}

?>

<form action="site/lk.php">
    <input type="submit" value="Личный кабинет">
</form>

</body>
</html>