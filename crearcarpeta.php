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
$nombre=$_GET["nombre"];




session_start();
$ubicacion =$_SESSION[ruta];

session_stop;
$nombrec=$ubicacion.'/'.$nombre;


if(file_exists($nombrec)){
    echo "ya existe carpeta con el mismo nombre en este directorio";
     
}else{
mkdir($nombrec);
echo "carpeta creada";
}
?>
    </div>
    <div>
        
    </div>
</body>
</html>