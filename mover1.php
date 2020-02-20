<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mover</title>
</head>
<body>
    <div>
    <?php
$rutaf=$_GET["rutaf"];




session_start();
$rutao =$_SESSION[ruta];
$name=$_SESSION[name];
$base=$_SESSION[rutab];
session_stop;
$nombrec1=$rutao.$name;
$nombrec2=$base.$rutaf.$name;
#echo $nombrec1 .'<br>'.$nombrec2.'<br>';
if(file_exists($base.$rutaf)){
if(file_exists($nombrec2)){
    echo "ya existe carpeta con el mismo nombre en ese directorio";
     
}else{
rename($nombrec1,$nombrec2);
echo "movido exitosamente";
}
}else{
    echo "ruta destino no existe";
}
?>
    </div>
    <div>
        
</body>
</html>