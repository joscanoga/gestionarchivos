<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar carpeta</title>
</head>
<body>
<?php
session_start();
$ruta=$_SESSION[rutab].$_SESSION[rutac];
$name=$_GET[name];
echo $ruta.$name;
?>
    <header>
<h1>Desea eliminar el archivo</h1>
<div>
<a href="eliminara.php?ruta=<?php  echo $ruta ?>&name=<?php echo $name ?>"> <img src="imagenes/ecarpeta.png" width="100" height="100"></a>
    </header>
</body>
</html>