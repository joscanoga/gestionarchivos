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


  .dropbtn2 {
    background-color: green;
    color: white;
    padding: 10px;
    font-size: 10px;
    border: none;
    }
    .dropdown2 {
    position: relative;
    display: inline-block;
    }
    .dropdown2-content {
    display: none;
    position: absolute;
    background-color: lightgrey;
    min-width: 50px;
    z-index: 1;
    }
    .dropdown2-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}
  .dropdown2-content a:hover {background-color: blue;}
  .dropdown2:hover .dropdown2-content {display: block;}
  .dropdown2:hover .dropbtn2 {background-color: blue;}
  </style>

  <body>
    <?php
    define(RUTABASE,"/home/johan/archivos/");

    $rutap="";
    $rutacomplemento=$_GET['rutac'];
    $ruta=RUTABASE . $rutacomplemento;
    #encuentra la ruta padre con la ruta del archivo
    function padre($rutai){
     # echo "entro a la funcion";
      $date=explode("/",$rutai);
    for($i=0;$i < sizeof($date)-2;$i++){
      #echo "entro al for";
     $rutap=$rutap.$date[$i]."/";
      #echo $i;
    }
    return $rutap;
  }#echo $rutacomplemento."<br>";
    $rutap=padre($rutacomplemento);
    #echo "rutap ".$rutap;
    ?>
    <header>
        <h1>Gestor de Archivos </h1>
        <div>
          <div class="dropdown">
            <button class="dropbtn">Nuevo</button>
            <div class="dropdown-content">
             
              
                <!--Funciones de crear carpeta y archivo, redireccionar a archivo php o JS-->
                <a href="nuevacarpeta.php?Ruta=<?php echo $ruta?>" >Carpeta</a>
                <a href="nuevoarchivo.php?Ruta=<?php echo $ruta?>">Archivo</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Regresar</button>
            <div class="dropdown-content">
             
              
                
                <a href="index.php" >Raiz</a>
                <a href="index.php?rutac=<?php echo $rutap ?>">Carpeta anterior</a>
            </div>
        </div>
        
        </div>
    </header>
    <div>    
      <img src="imagenes/carpeta.png" border="0" width="100" height="100">
      <h4><?php echo "ubicacion: /".$rutacomplemento?></h4>
    </div>
    <div>
      
      <?php
      $directorio = opendir($ruta);

      $archivos = array();
      $carpetas = array();
      
      //Carpetas y Archivos a excluir
      $excluir = array('.', '..', 'index.php', 'favicon.ico','folder.png','file.png','.dropbox.cache','.dropbox');
      
      while ($f = readdir($directorio)) {
          if (is_dir("$ruta/$f") && !in_array($f, $excluir)) {
              $carpetas[] = $f;
          } else if (!in_array($f, $excluir)){
              //No es una carpeta, por ende lo mandamos a archivos
              $archivos[] = $f;
          }
      }
      closedir($directorio);
      
      ?>
      <?php
      foreach($carpetas as $i){
        
        echo ' <div class="dropdown">
        '.$i.'&nbsp'.'
        <button class="dropbtn2">Carpeta</button>
        <div class="dropdown-content">
         
          
            <!--Funciones de  carpeta -->
            <a href="index.php?rutac='.$rutacomplemento.$i.'/'.'" >Abrir</a>
            <a href="renombrar.php?rutac='.$ruta.'&name='.$i.'">Renombrar</a>
            <a href="eliminarcarpeta.php?rutab='.RUTABASE.'&rutac='.$rutacomplemento.'&name='.$i.'" >Eliminar</a>
            <a href="copyc.php?rutac='.$ruta.'&name='.$i.'&basica='.RUTABASE.'" >copiar/pegar</a>
            <a href=" mostrarpermisos.php?rutac='.$ruta.'&name='.$i.'" >Ver informacion de permisos</a>
            <a href="cambiarpermisos.php?rutac='.$ruta.'&name='.$i.'" >Cambiar permisos de acceso</a>
            <a href="cambiaruser.php?rutac='.$ruta.'&name='.$i.'" >Cambiar propietario</a>
            <a href="mover.php?rutac='.$ruta.'&name='.$i.'&basica='.RUTABASE.'" >Mover</a>
        </div>
    </div><br>';
      }
      foreach($archivos as $i){
        echo ' <div class="dropdown">
        '.$i.'&nbsp'.'
        <button class="dropbtn2">Archivo</button>
        <div class="dropdown-content">
         
          
            <!--Funciones de  archivo-->
            <a href="index.php'.$rutacomplemento.$i.'" >Abrir</a>
            <a href="renombrar.php?rutac='.$ruta.'&name='.$i.'">Renombrar</a>
            <a href="eliminararchivo.php?rutac='.$ruta.'&name='.$i.'" >Eliminar</a>
            <a href="copiar.php?rutac='.$ruta.'&name='.$i.'&basica='.RUTABASE.'" >copiar/pegar</a>
            <a href="mostrarpermisos.php?rutac='.$ruta.'&name='.$i.'" >Ver informacion de permisos</a>
            <a href="cambiarpermisos.php?rutac='.$ruta.'&name='.$i.'" >Cambiar permisos de acseso</a>
            <a href="cambiaruser.php?rutac='.$ruta.'&name='.$i.'" >Cambiar propietario</a>
            <a href="mover.php?rutac='.$ruta.'&name='.$i.'&basica='.RUTABASE.'" >Mover</a>
        </div>
    </div><br>';
      }
     ?>
    </div>
    
    
  </body>

</html>