<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/EjerciciosPHP/estilos.css">
    <title>Respuesta al usuario</title>
</head>
<body>
    <p>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];

            // mostrar el mensaje
            echo "Hola, " . $nombre . " ". $apellidos;
        }
      
        ?>
    </p>
</body>
</html>