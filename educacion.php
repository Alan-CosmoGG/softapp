<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Educarme sobre el Ahorro</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .consejos {
            text-align: left;
            background: #f39c12;
            padding: 20px;
            border-radius: 10px;
            color: #000;
            max-width: 500px;
            margin: auto;
        }

        .consejos h3 {
            text-align: center;
        }

        .consejos ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
<div class="form-container">
    <div class="consejos">
        <h3>💡 Consejos para Aprender a Ahorrar</h3>
        <ul>
            <li>Empieza por metas pequeñas y realistas.</li>
            <li>Registra todo lo que gastas para ver en qué puedes ahorrar.</li>
            <li>Ahorra una parte de lo que ganes o te den (aunque sea poco).</li>
            <li>Evita gastos por impulso. Espera 24 horas antes de comprar algo no esencial.</li>
            <li>Usa apartados para distribuir tu dinero según objetivos.</li>
            <li>Haz del ahorro un hábito, no una obligación.</li>
        </ul>
    </div>

    <div class="nav" style="margin-top: 20px;">
        <a href="home.php">Inicio</a> |
        <a href="ver_ahorros.php">Ahorros</a> |
        <a href="apartados.php">Apartados</a> |
        <a href="cerrar.php">Cerrar Sesión</a>
    </div>
</div>
</body>
</html>

