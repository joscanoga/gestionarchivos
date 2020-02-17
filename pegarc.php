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

if(file_exists($nombrec2)){
    echo "ya existe carpeta con el mismo nombre en ese directorio";
     
}else{
    //Comprobamos si ya existe la copia

    //Asignamos la carpeta que queremos copiar
    $source =$nombrec1;
    //El destino donde se guardara la copia
    $destination = $nombrec2;
    full_copy($source, $destination);
    }
    #echo $nombrec1 .'<br>'.$nombrec2;
    //Crear nuevos directorios completos
    function full_copy( $source, $target ) {
        if ( is_dir( $source ) ) {
            @mkdir( $target );
            $d = dir( $source );
            while ( FALSE !== ( $entry = $d->read() ) ) {
                if ( $entry == '.' || $entry == '..' ) {
                    continue;
                }
                $Entry = $source . '/' . $entry; 
                if ( is_dir( $Entry ) ) {
                    full_copy( $Entry, $target . '/' . $entry );
                    continue;
                }
                copy( $Entry, $target . '/' . $entry );
            }
     
            $d->close();
        
            copy( $source, $target );
        }
    }
echo "copiada y pegada exitosamente";

?>
    </div>
    <div>
        <a class="boton" href="index.php"> volver al inicio</a>
    </div>
</body>
</html>