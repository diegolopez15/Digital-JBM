<?php
// declarar las variables que 
$host = 'localhost'; // nombre del sevidor
$dbname = 'jbm'; //nombre de la base de datos 
$username = 'root'; // cual es el usuario para ingresar a la base de datos en  Xampp
$password = 'Zulaykevin24'; // contraseña de ingreso a la base de datos en Xampp
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
    $username, $password); // se establece una conexión a la base de datos usando los parámetros definidos anteriormente.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("error al conectar a la base de datos: " . $e->getMessage()); //imprime el mensaje por pantalla
}
?>

