<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Nave32";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "¡Login exitoso!";
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>

