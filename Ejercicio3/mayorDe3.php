<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/EjerciciosPHP/estilos.css">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero1 = $_POST['primerNumero'];
                $numero2 = $_POST['segundoNumero'];
                $numero3 = $_POST['tercerNumero'];
                
                if(($numero1 > $numero2) && ($numero1 > $numero3)){
                    $numeroMayor = $numero1;
                }else if(($numero2 > $numero1) && ($numero2 > $numero3)){
                    $numeroMayor = $numero2;
                }else{
                    $numeroMayor = $numero3;
                }

                // mostrar el mensaje
                echo "El número mayor de los tres es el: " . $numeroMayor;
            }

        ?>
    </p>
</body>
</html>