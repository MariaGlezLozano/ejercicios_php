<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/EjerciciosPHP/estilos.css">
    <title>Suma acumulativa</title>
</head>
<body>
<p>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST['num'];                          
                    $acumulativo = 0;
                    for($i= 1; $i <= $num; $i++){
                        $acumulativo += $i;
                    }
                     // mostrar el mensaje
                    echo "La suma de todos los números desde 1 hasta "  . $num . " es: <strong>". $acumulativo . "</strong> ";
                } else { 
                    // si el numero no es valido
                    echo "<h2> Por favor, introduzca un número válido </h2>";
                }
        ?>
    </p>
</body>
</html>