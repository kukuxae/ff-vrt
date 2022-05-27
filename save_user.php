<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
if ($password!==$_POST['password2']){
    exit ("Введенные пароли не совпадают");
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
include ("bd.php");
// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM users rs WHERE log='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
    exit ("Введённый вами логин уже зарегистрирован.");
}
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO users (log,pas,role) VALUES('$login','$password','client')");
// есть ли ошибки
if ($result2=='TRUE')
{

    $servername = "localhost";
    $username = "root";
    $password2 = "root";
    $dbname = "base";

// создание соединения
    $conn = new mysqli($servername, $username, $password2, $dbname);
// проверка соединения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $login2=('a_'.$login);
// создание таблицы
    $sql = "CREATE TABLE $login2 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
packs int(30),
ordersoz int(30),
orderswb int(30),
ordersym int(30),
ordersali int(30),
tarif int(30)
)";

    if ($conn->query($sql) === TRUE) {
        echo "Table '$login' created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();

    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>