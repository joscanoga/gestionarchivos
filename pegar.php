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
$rutaf=$_GET["rutaf"];




session_start();
$rutao =$_SESSION[rutao];
$name=$_SESSION[name];
$base=$_SESSION[base];
session_stop;
$nombrec1=$rutao.$name;
$nombrec2=$base.$rutaf.$name;
echo $nombrec1 .'<br>'.$nombrec2;
if(file_exists($nombrec2)){
    echo "ya existe carpeta con el mismo nombre en ese directorio";
     
}else{
copy($nombrec1,$nombrec2);
#echo "copiado exitosamente";
}
?>
    </div>
    <div>
        <a class="boton" href="index.php"> volver al inicio</a>
    </div>
</body>
</html>