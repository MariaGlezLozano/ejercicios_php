<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <title>Tabla de multiplicar</title>
</head>
<body>
<p>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST['numero'];
                
                switch($numero){
                    case 1 :
                        echo "<h1>Tabla de multiplicar del 1: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 1 x " . $i . "= " . (1 * $i) . "<br>";
                        }
                        break;
                    case 2 :
                        echo "<h1>Tabla de multiplicar del 2: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 2 x " . $i . "= " . (2 * $i) . "<br>";
                        }
                        break;
                    case 3 :
                        echo "<h1>Tabla de multiplicar del 3: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 3 x " . $i . "= " . (3 * $i) . "<br>";
                        }
                        break;
                    case 4 :
                        echo "<h1>Tabla de multiplicar del 4: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 4 x " . $i . "= " . (4 * $i) . "<br>";
                        }
                        break;
                    case 5 :
                        echo "<h1>Tabla de multiplicar del 5: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 5 x " . $i . "= " . (5 * $i) . "<br>";
                        }
                        break;
                    case 6 :
                        echo "<h1>Tabla de multiplicar del 6: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 6 x " . $i . "= " . (6 * $i) . "<br>";
                        }
                        break;
                    case 7 : 
                        echo "<h1>Tabla de multiplicar del 7: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 7 x " . $i . "= " . (7 * $i) . "<br>";
                        }
                        break;
                    case 8 :
                        echo "<h1>Tabla de multiplicar del 8: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 8 x " . $i . "= " . (8 * $i) . "<br>";
                        }
                        break;
                    case 9 :
                        echo "<h1>Tabla de multiplicar del 9: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 9 x " . $i . "= " . (9 * $i) . "<br>";
                        }
                        break;
                    case 10 :
                        echo "<h1>Tabla de multiplicar del 10: </h1>";
                        for($i = 1; $i <=10; $i++){
                            echo " 10 x " . $i . "= " . (10 * $i) . "<br>";
                        }
                        break;
                    default : 
                    echo "<h1> Error </h1>";
                }

            }

        ?>
    </p>
</body>
</html>
