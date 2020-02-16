<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
$nombre=$_GET["nombre"];




session_start();
$ubicacion =$_SESSION[ruta];
$nombrec=$ubicacion."/".$nombre;
mkdir($nombrec);
echo "carpeta creada";

?>
    </div>
    <div>
        <a class="boton" href="index.php"> volver al inicio</a>
    </div>
</body>
</html>