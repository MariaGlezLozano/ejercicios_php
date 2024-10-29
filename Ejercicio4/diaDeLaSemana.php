<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/EjerciciosPHP/estilos.css">
    <title>Día de la semana</title>
</head>
<body>
<p>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST['numero'];
                
                switch($numero){
                    case 1 :
                        $numeroSemana = "Lunes";
                        break;
                    case 2 :
                        $numeroSemana = "Martes";
                        break;
                    case 3 :
                        $numeroSemana = "Miercoles";
                        break;
                    case 4 :
                        $numeroSemana = "Jueves";
                        break;
                    case 5 :
                        $numeroSemana = "Viernes";
                        break;
                    case 6 :
                        $numeroSemana = "Sábado";
                        break;
                    case 7 : 
                        $numeroSemana = "Domingo";
                        break;
                }

                // mostrar el mensaje
               echo "El número que ha introducido pertenece al: " ."<strong>". $numeroSemana .  "</strong> ";
            }

        ?>
    </p>
</body>
</html>