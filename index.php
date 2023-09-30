<?php

session_start();
include_once('assets/contador.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $empleado = [
        'nombre' => $_POST['txtNombre'],
        'apellido' => $_POST['txtApellido'],
        'edad' => $_POST['edad'],
        'estado' => $_POST['estado'],
        'genero' => $_POST['genero'],
        'sueldo' => $_POST['sueldo'],
    ];



    //Almacenar el empleado en un array de empleados
    $_SESSION['primo'] = $empleado;

echo "Empleado almacenado exitosamente.";
}

//$_SESSION = array();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-color: burlywood;
        }
        .container{
            margin: auto;
            margin-top: 50px;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
            background-color: bisque;
        }
        .radioc{
            display: flex;
            grid-template-columns: 1fr 1fr;
            padding-top: 10px;
            padding-bottom: 10px;
            /* font-family: 'Nunito', sans-serif;
            font-size: 16px;
            border: 2px solid black;
            border-radius: 4px;             */
        }
        #radio1 label{
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
    <title>Pruebas</title>
</head>
    <body>
    <div class="container">

    <form action="" method="post">

    <label for="idNombre">Nombre</label><br>
    <input type="text" name="txtNombre" id="idNombre"><br>
    <label for="idApellido">Apellido</label><br>
    <input type="text" name="txtApellido" id="idApellido"><br>

    <label for="idEdad">Edad</label><br>
    <input type="number" name="edad" id="idEdad">

    <div class=radioc id=radio1>
    <label for="soltero">Soltero(a)</label><br>
    <input type="radio" name="estado" id="soltero" value="s" checked><br>
    <label for="casado">Casado(a)</label><br>
    <input type="radio" name="estado" id="casado" value="c"><br>
    <label for="viudo">Viudo(a)</label><br>
    <input type="radio" name="estado" id="viudo" value="v"><br>
    </div>

    <div class=radioc id=radio1>
    <label for="femenino">Femenino</label><br>
    <input type="radio" name="genero" id="femenino" value="f"><br>
    <label for="masculino">Masculino</label><br>
    <input type="radio" name="genero" id="masculino" value="m" checked><br>
    </div>

    <div class=radioc id=radio1>
    <label for="mil">Menos de 1000 Bs.</label><br>
    <input type="radio" name="sueldo" id="mil" value="s" checked><br>
    <label for="m2k">Entre 1000 y 2500 Bs.</label><br>
    <input type="radio" name="sueldo" id="m2k" value="m"><br>
    <label for="mm2k">Mas de 2500 Bs.</label><br>
    <input type="radio" name="sueldo" id="mm2k" value="l"><br>
    </div>
    <input type="submit" value="Registro" name="btn">
    <input type="reset" value="Limpiar" name="btn">

</div>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>