<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nueva carpeta</title>
</head>
<body>
    <header>
    <div>
    <img src="imagenes/carpeta.png" border="0" width="100" height="100">
    </div>
    <div>
        <?php $ruta=$_GET[Ruta];
        #echo $ruta;
        ?>
        <?php 
        SESSION_start();
        $_SESSION['ruta']=$ruta;
        ?>
        
        <form action="crearcarpeta.php" method="GET">
        <p>Nombre<input type="text" name="nombre"></p>
        
        <p><input type="submit" value="Crear"></p>
        </form>
    </div>
</header>
</body>
</html>