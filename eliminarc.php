<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carpeta</title>
</head>
<body>
    <div>
    <?php
$nombre=$_GET["name"];
$ruta=$_GET["ruta"];

$nombrec=$ruta."/".$nombre;



if(file_exists($nombrec)){
    exec("rm -rf ".$nombrec);
    echo "carpeta eliminada";
     
}else{
    echo "no existe carpeta con este nombre en este directorio";
}
?>
    </div>
    <div>
        <a class="boton" href="index.php"> volver al inicio</a>
    </div>
</body>
</html>