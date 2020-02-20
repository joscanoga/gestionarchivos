<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nuevo archivo</title>
</head>
<body>
    <div>
    <img src="imagenes/archivo.png" border="0" width="100" height="100">
    </div>
    <div>
        <?php $ruta=$_GET[Ruta];
        echo $ruta;
        ?>
        <?php 
        SESSION_start();
        $_SESSION['ruta']=$ruta;
        #?>
        
        <form action="creararchivo.php" method="GET">
        <p>Nombre con extencion <input type="text" name="nombre"></p>
        
        <p><input type="submit" value="Crear"></p>
        </form>
    </div>
</body>
</html>