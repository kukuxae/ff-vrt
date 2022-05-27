<?php
session_start();// старт сессии
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
// подключаемся к базе
include("bd.php");

$result = mysql_query("SELECT * FROM users WHERE log='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysql_fetch_array($result);
if (empty($myrow['pas']))
{
    //если пользователя с введенным логином не существует
    exit ("Ошибка. Логина нет");
}

else {
    //если существует, то сверяем пароли
    if ($myrow['pas']==$password) {
        //если пароли совпадают, то запускаем пользователю сессию
        $_SESSION['login']=$myrow['log'];
        $_SESSION['id']=$myrow['id'];
        $_SEASION['role']=$myrow['role']; //
        echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
        echo "роль ".$_SEASION['role'];
    }
    else {
        //если пароли не сошлись

        exit ("Ошибка. Проверьте правильность ввода логина и пароля.");
    }
}
?>
