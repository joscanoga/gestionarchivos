
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
$nomviejo=$ubicacion.$name;
$nomnew=$ubicacion.$nombre;
#echo $nomviejo;
#echo $nomnew;

session_stop;
if(file_exists($ubicacion."/".$nombre)){
    echo "ya existe archivo/carpeta con el mismo nombre en este directorio";
     
}else{
    rename($nomviejo,$nomnew);
    echo "renombrado exitoso";
}
?>
    </div>
    <div>
        
    </div>
</body>
</html>