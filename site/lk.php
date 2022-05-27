<h2>Личный кабинет </h2><?php
session_start(); // Сессия
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    ?>

    <?php
    include 'logform.php'; // Если пусты, показываем форму входа

    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка доступна только зарегистрированным пользователям</a>";

}
else {
    include("bd.php");
    $login1 =$_SESSION['login'];
    $result = mysql_query("SELECT * FROM users WHERE log='$login1'",$db); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
   $_SESSION['role'] = $myrow['role'];
   $_SEASSION['tarif'] = $myrow['tarif'];
   $tarif = $_SEASSION['tarif'];
    echo "Вы вошли на сайт, как " . $_SESSION['login'];
    if ($_SESSION['role']=='client')
    { ?>
        <h3>Тариф:  <?=$tarif?><br></h3>

    <form action="../index.php" method="post">
        <input type="submit" value="Выйти">
    </form>
     
    <?php
    }
else{
}
}