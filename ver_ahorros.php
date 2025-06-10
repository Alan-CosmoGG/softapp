<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

$ahorro = $_SESSION["ahorro_total"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Ahorro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Mi Ahorro Total</h2>
    <p style="font-size: 24px;">$<?php echo number_format($ahorro, 2); ?> MXN</p>

    <div class="nav">
        <a href="home.php">Inicio</a> |
        <a href="apartados.php">Apartados</a> |
        <a href="educacion.php">Educarme</a> |
        <a href="cerrar.php">Cerrar Sesión</a>
    </div>
</div>
</body>
</html>
