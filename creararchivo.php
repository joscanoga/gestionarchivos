<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo</title>
</head>
<body>
    <div>
    <?php
$nombre=$_GET["nombre"];




session_start();
$ubicacion =$_SESSION[ruta];
$nombrec=$ubicacion."/".$nombre;
session_stop;
if(file_exists($nombrec)){
    echo "ya existe archivo  con el mismo nombre en este directorio";
     
}else{
exec("touch ".$nombrec);
echo "archivo creado";
}
?>
    </div>
    <div>
        <a class="boton" href="index.php"> volver al inicio</a>
    </div>
</body>
</html>