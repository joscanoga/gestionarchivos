<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>renombrar</title>
</head>
<body>
    <div>
    <?php
$nombre=$_GET["nombre"];



session_start();
$ubicacion =$_SESSION[ruta];
$name=$_SESSION[name];
$ruta=$ubicacion.$name;

#echo $nomviejo;
#echo $nomnew;
$result=exec("getent passwd | grep <".$nombre.">");
echo $result;
echo strlen($result);
session_stop;
#chown($ruta,$nombre);
?>
    </div>
    <div>
        <a class="boton" href="index.php"> volver al inicio</a>
    </div>
</body>
</html>