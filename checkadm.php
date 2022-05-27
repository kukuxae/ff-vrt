<?php
session_start();


include("bd.php");
$login1 = $_SESSION['login'];
$result = mysql_query("SELECT * FROM users WHERE log='$login1'", $db); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);

    $_SESSION['role'] = $myrow['role'];
    echo "Вы вошли на сайт, как " . $_SESSION['login'];
    if ($_SESSION['role'] == 'admin') {
        echo "<br><a href='adm.php'>Управление</a>";
    }
else
{
    exit ('Ошибка доступа');
}
?>