<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>copiar</title>
</head>
<body>
    <header>
    <div>
    <img src="imagenes/carpeta.png" border="0" width="100" height="100">
    </div>
    <div>
        <?php #$ruta=$_SESSION[ruta];
        $name=$_GET[name];
        #$base=$_GET[basica];
         #echo $ruta.$name;
        ?>
        <?php 
        SESSION_start();
        #$_SESSION['rutao']=$_SESSION[ruta];
        $_SESSION['name']=$name;
        #$_SESSION['base']=$base;
        ?>
        
        <form action="pegarc.php" method="GET">
        <p>directorio final<input type="text" name="rutaf"></p>
        
        <p><input type="submit" value="pegar"></p>
        </form>
    </div>
</header>
</body>
</html>