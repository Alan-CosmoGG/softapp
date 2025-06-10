<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto = floatval($_POST["monto"]);
    if ($monto > 0) {
        $_SESSION["ahorro_total"] += $monto;
        $mensaje = "¡Monto agregado exitosamente!";
    } else {
        $mensaje = "Ingresa un monto válido.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Ahorro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <h2>Ingresar más dinero a tu cuenta</h2>

    <form method="post">
        <input type="text" name="tarjeta" placeholder="Ingresa número de tarjeta" required>
        <div class="row">
            <input type="text" name="vencimiento" placeholder="Vencimiento" required>
            <input type="text" name="cvv" placeholder="CVV" required>
        </div>
        <input type="number" name="monto" step="0.01" placeholder="Ingresa el monto" required>
        <label><input type="checkbox" name="guardar_tarjeta"> ¿Guardar tarjeta para futuros ahorros?</label>
        <button type="submit">¡QUIERO AHORRAR!</button>
    </form>

    <?php if ($mensaje): ?>
        <p class="mensaje"><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <div class="nav">
        <a href="ver_ahorros.php">Ver Ahorros</a> |
        <a href="apartados.php">Apartados</a> |
        <a href="educacion.php">Educarme</a> |
        <a href="cerrar.php">Cerrar Sesión</a>
    </div>
</div>
</body>
</html>
