<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
    <meta name="description" content="gestor de archivos">
    <title>Gestor de Archivos</title>
    <link rel="icon" href="imagenes/carpeta.png">
  </head>
  <style>
    .dropbtn {
    background-color: green;
    color: white;
    padding: 10px;
    font-size: 10px;
    border: none;
    }
    .dropdown {
    position: relative;
    display: inline-block;
    }
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: lightgrey;
    min-width: 100px;
    z-index: 1;
    }
    .dropdown-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}
  .dropdown-content a:hover {background-color: blue;}
  .dropdown:hover .dropdown-content {display: block;}
  .dropdown:hover .dropbtn {background-color: blue;}
  </style>

  <body>
    <?php
    define(RUTABASE,"/home/johan/archivos");
    exec(RUTABASE);
    $rutacomplemento="";
    $ruta=RUTABASE . $rutacomplemento;
    
    ?>
    <header>
        <h1>Gestor de Archivos </h1>
          <div class="dropdown">
            <button class="dropbtn">Nuevo</button>
            <div class="dropdown-content">
            <script language=javascript>
              function nuevaventana (URL){
            window.open(URL,"ventana1","width=300,height=300,scrollbars=NO")
              }
              </script> 
              
                <!--Funciones de crear carpeta y archivo, redireccionar a archivo php o JS-->
                <a href="nuevacarpeta.php?Ruta=<?php echo $ruta?>" >carpeta</a>
                <a href="#FuncionQueCreeUnArchivo">Archivo</a>
            </div>
        </div>
    </header>
    <div>    
      <img src="imagenes/carpeta.png" border="0" width="100" height="100">
      <h4><?php echo "ubicacion: ".$ruta?></h4>
    </div>
    <div>
      <?php
      function mostrar_imagenes($ruta){
        // Se comprueba que realmente sea la ruta de un directorio
        if (is_dir($ruta)){
            // Abre un gestor de directorios para la ruta indicada
            $gestor = opendir($ruta);
    
            // Recorre todos los archivos del directorio
            while (($archivo = readdir($gestor)) !== false)  {
                // Solo buscamos archivos sin entrar en subdirectorios
                if (is_file($ruta."/".$archivo)) {
                    echo "<img src='".$ruta."/".$archivo."' width='200px' alt='".$archivo."' title='".$archivo."'>";
                }            
            }
    
            // Cierra el gestor de directorios
            closedir($gestor);
        } else {
            echo "No es una ruta de directorio valida<br/>";
        }
    }
    obtener_estructura_directorios($ruta);


      if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
           while (($file = readdir($dh)) !== false) {
              //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
              //mostraría tanto archivos como directorios
              //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file);
              if (is_dir($ruta . $file) && $file!="." && $file!=".."){
                 //solo si el archivo es un directorio, distinto que "." y ".."
                 echo "<br>Directorio: $ruta$file";
                 listar_directorios_ruta($ruta . $file . "/");
              }
           }
        closedir($dh);
        }
     }else{
        echo "<br>No es ruta valida";
      
  } 
      ?>
    </div>
    
  </body>

</html>