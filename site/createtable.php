<?php
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

// создание таблицы
$sql = "CREATE TABLE '$login' (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
packs int(30),
ordersoz int(30),
orderswb int(30),
ordersym int(30),
ordersali int(30),
tarif int(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>