<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

$mensaje = "";

if (!isset($_SESSION["apartados"])) {
    $_SESSION["apartados"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $cantidad = floatval($_POST["cantidad"]);

    if ($nombre && $cantidad > 0 && $cantidad <= $_SESSION["ahorro_total"]) {
        $_SESSION["apartados"][] = ["nombre" => $nombre, "cantidad" => $cantidad];
        $_SESSION["ahorro_total"] -= $cantidad;
        $mensaje = "¡Apartado creado con éxito!";
    } else {
        $mensaje = "Verifica el nombre o que el monto sea válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apartados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Crear Apartado</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre del apartado" required>
        <input type="number" name="cantidad" step="0.01" placeholder="Monto a apartar" required>
        <button type="submit">Crear apartado</button>
    </form>

    <?php if ($mensaje): ?>
        <p class="mensaje"><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <h3>Apartados existentes:</h3>
    <ul style="text-align: left;">
        <?php foreach ($_SESSION["apartados"] as $ap): ?>
            <li><?php echo $ap["nombre"]; ?> - $<?php echo number_format($ap["cantidad"], 2); ?> MXN</li>
        <?php endforeach; ?>
    </ul>

    <div class="nav">
        <a href="home.php">Inicio</a> |
        <a href="ver_ahorros.php">Ahorros</a> |
        <a href="educacion.php">Educarme</a> |
        <a href="cerrar.php">Cerrar Sesión</a>
    </div>
</div>
</body>
</html>
