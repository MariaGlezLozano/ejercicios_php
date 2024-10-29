<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/EjerciciosPHP/estilos.css">
    <title>Categorizacion de edades</title>
</head>
<body>
<p>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $edad = $_POST['edad'];
                if($edad < 12){
                    $categoria = "Infante";
                }else if(($edad >=12)&& ($edad <=17)){
                    $categoria = "Adolescente";
                }else if(($edad >=18) && ($edad <=60)){
                    $categoria = "Adulto";
                }else if($edad >60){
                    $categoria = "Anciano";
                }             

                // mostrar el mensaje
               echo "Según la edad introducida, usted pertenece a la categoria: " ."<strong>". $categoria .  "</strong> ";
            }

        ?>
    </p>
</body>
</html>