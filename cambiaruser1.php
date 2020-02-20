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

#echo $nombre.'<br>';
session_start();
$ubicacion =$_SESSION[ruta];
$name=$_SESSION[name];
$ruta=$ubicacion.$name;
#echo $ruta.'<br>'.$ubicacion.'<br>'.$name;
 shell_exec("sudo chown ".$nombre." ".$ruta);
 echo "cambio exitoso";
#chown ($ruta,$nombre) ;
#echo $ruta.'<br>'.$ubicacion.'<br>'.$name;
#echo $nomviejo;
#echo $nomnew;
#exec("sudo chown ".$nombre." ".$ruta);
#echo $result;
#echo strlen($result);
#session_stop();
 #echo $ruta.'<br>'.$nombre;
#chown ($ruta,$nombre) ;
?>
    </div>
    <div>
        
    </div>
</body>
</html>