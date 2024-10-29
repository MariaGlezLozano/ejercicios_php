<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/EjerciciosPHP/estilos.css">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $distancia = $_POST['distancia'];
                $velocidad = $_POST['velocidad'];

                $tiempoTotal = ($distancia * 1)/$velocidad;

                // mostrar el mensaje
                echo "El tiempo que tomará el viaje en horas es: " . $tiempoTotal;
            }

        ?>
    </p>
</body>
</html>


