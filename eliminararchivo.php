<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar carpeta</title>
</head>
<body>
<?php
$ruta=$_GET[rutac];
$name=$_GET[name];
?>
    <header>
<h1>Desea eliminar el archivo</h1>
<div>
<a href="index.php?rutac=<?php echo $ruta?>">no </a><a href="eliminara.php?ruta=<?php  echo $ruta ?>&name=<?php echo $name ?>"> si</a>
    </header>
</body>
</html>