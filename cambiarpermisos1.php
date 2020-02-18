<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambio permisos</title>
</head>
<body>
    <div>
    <?php

$usuario=$_GET[escrituraU]+$_GET[lecturaU]+$_GET[ejecucionU];
$grupo=$_GET[escrituraG]+$_GET[lecturaG]+$_GET[ejecucionG];
$otro=$_GET[escrituraO]+$_GET[lecturaO]+$_GET[ejecucionO];
$permisos=$usuario.$grupo.$otro;



session_start();
$ubicacion =$_SESSION[ruta];
$name=$_SESSION[name];

$nombre=$ubicacion.$name;
#echo $nomviejo;
#echo $nomnew;
echo "chmod -R ".$permisos." ".$nombre;
exec("chmod -R".$permisos." ".$nombre);
echo"cambio exitoso";
session_stop;

?>
    </div>
    <div>
        <a class="boton" href="index.php?rutac="> volver al inicio</a>
    </div>
</body>
</html>
