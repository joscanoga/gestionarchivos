<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambio permisos</title>
</head>
<body>
    <div>
    <?php

$usuario=$_GET[escrituraU]+$_GET[lecturaU]+$_GET[ejecucionU];
$grupo=$_GET[escrituraG]+$_GET[lecturaG]+$_GET[ejecucionG];
$otro=$_GET[escrituraO]+$_GET[lecturaO]+$_GET[ejecucionO];
$permisos=$usuario.$grupo.$otro;



session_start();
$ubicacion =$_SESSION[ruta];
$name=$_SESSION[name];

$nombre=$ubicacion.$name;
#echo $nombre.'<br>'.$permisos;
#echo $nomviejo;
#echo $nomnew;
#echo "chmod -R ".$permisos." ".$nombre;
#echo fileowner($nombre);
if(posix_getpwuid(fileowner($nombre))[name]=="johan"){
#print_r(posix_getpwuid(fileowner($nombre))[name]);
exec("chmod -R ".$permisos." ".$nombre);
echo"cambio exitoso";
}else {
   echo "usuario no es propietario de la carpeta" ;# code...
}

session_stop();

?>
    </div>
    <div>
        
    </div>
</body>
</html>
