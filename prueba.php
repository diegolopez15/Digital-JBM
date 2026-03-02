<?php
include('config/db.php');

$host = 'localhost'; // nombre del sevidor
$dbname = 'JBM'; //nombre de la base de datos 
$username = 'root'; // cual es el usuario para ingresar a la base de datos en  Xampp
$password = 'Zulaykevin24';



try {

$stmt = $pdo->query("select * from usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "Conexion exitosa. Registros encontrados:<br><br>";

foreach ($usuarios as $usuario) {
    echo "ID: " . $usuario['id_usuarios'] . "<br>";
    echo "Nombre: " . $usuario['nombre'] . "<br>";
    echo "Password: " . $usuario['password'] . "<br>";
    echo "Rol: " . $usuario['rol'] . "<br>";
    echo "Fecha_registro: " . $usuario['fecha_registro'] . "<br>";
    echo "Email: " . $usuario['email'] . "<br>";
    echo "ID_detalle_compra: " . $usuario['id_detalle_compra'] . "<br><br>";

}

} catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
?>
