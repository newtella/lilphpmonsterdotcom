<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My little php monster dot com</title>
</head>
<body>
    <h3>Bienvenido al modulo Basico de php</h3>
    <div id="leccion1">
        <p><b>Leccion #1</b></p>
        <p>Incrustar php dentro de codigo html: *
            <b><?php echo 'Hola Byte-Zone con php'; //Escape HTML ?></b>
        </p>
    </div>
    <div id="leccion2">
        <p><b>Leccion #2</b></p>
        <p><b>Operadores:</b></p>
        <p>Variables 5 y 3</p>
        <?php echo '<b>+Suma</b><br>'; //Escape HTML
            $x = 3;
            $y = 5;
            $z = $x+$y;
            echo "$z"; // Imprime la variable
            
            echo'</br>
            <b>-Resta</b><br>';
            echo $y-$x; //Imprime la operacion.
        ?>
    </div>
</body>
</html>