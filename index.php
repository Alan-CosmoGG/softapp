<?php
session_start();

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Simulación de credenciales válidas (puedes cambiarlas)
    if ($usuario === "alan" && $contrasena === "1234") {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["ahorro_total"] = 0;
        $_SESSION["apartados"] = [];
        header("Location: home.php");
        exit;
    } else {
        $mensaje = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Ahorra Fácil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form method="post" action="">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Ingresar</button>
        </form>
        <p class="error"><?php echo $mensaje; ?></p>
    </div>
</body>
</html>
