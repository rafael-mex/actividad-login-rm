<?php
session_start();
//Guardar los datos en una variable superglobal: 
//$_SESSION["nombre"]="Rafael";

//Leer la variable de sesión:
//$var= $_SESSION["nombre"];
//Destruir los datos de la sesión
//session_destroy();

//Declarar la cookie: setcookie("nombre","valor",time() [tiempo de vida de la cookie en el ordenador, en segundos]+ el tiempo extra que le queramos dar)

//Acceder a la cookie: $var= $_COOKIE["nombre"]

//Eliminar cookie: setcookie("nombre","valor",time()-1)

//


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
    <?php
    include 'dynamics/header.php';
    ?>

    <main>
        <div id="container-titulo">
            <h1>Sistema normal, completamente normal.</h1>
        </div>
        <div id="container-descripcion">
            <div id="col-iz-descripcion">
                <p>
                    Si es usted un usuario normal, no se preocupe, este sistema es completamente normal, no tiene nada raro.
                    Tal vez se perdió en el camino, no obstante, aquí tiene un enlace
                    <a href="https://www.youtube.com/watch?v=clcUZ7d_8ek">para visitar un lugar mejor</a>.
                </p>
                <p id="p-letra-diminuta">
                    Si es usted el señor presidente, diríjase al Inicio de sesión y entre con sus credenciales.
                </p>
            </div>
            <div id="col-der-imagen">
                <img src="./img/beagle_lupa.jpg" alt="Perro con lupa">
            </div>
        </div>
    </main>
</body>
</html>