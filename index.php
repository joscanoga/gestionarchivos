<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        *{margin: 0px;
            }
        header{
            position: relative;
            background-color: #579834;
            margin: auto;
            width: 1200px;
            
            height: 100;
            border: 2px solid black;
            
        }
        #cuerpo{
            position: relative;;
            
            margin: auto;
            width: 1200px;
            height: 500px;
            
            border: 2px solid black;
        }
        #indice{
            position:absolute;
            top:0px;
            left:0px;
            width:300px;
            height:500px;
            background:#29596E;
        }
        #contenido{
            position:absolute;
            top:0px;
            left:300px;
            width:900px;
            height:500px;
            background:#ADAE3C;
        }
        footer{
            position: relative;
            width: 1200px;
            background-color:#579834;
            margin:auto;
            margin-top: 0px;
            height: 50px;
        }
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
    <meta charset="UTF-8">
    <meta name="author" content="johan">
    <meta name="description" content="gestion de archivos">
    <meta name="keywords" content="archivos, gestion, ubuntu"
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>gestor de archivos</title>
    <link rel="icon" href="/img/icono.png"
</head>
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
    $urlcont=$_GET[urlcont];
    if (strlen($urlcont)<1){
     $urlcont="imagen.html";
    }
    ?>
    <?php 
        SESSION_start();
        $_SESSION['ruta']=$ruta;
        $_SESSION['rutab']=RUTABASE;
        $_SESSION['rutac']=$rutacomplemento
        ?>
    <header >
        <div id="atras">
        <a href="index.php"><img src="img/atras2.png" width="50" height="50"/></a>
        <a href="index.php?rutac=<?php echo $rutap ?>"><img src="img/atras1.png" width="50" height="50"/></a>
        <a href="index.php?rutac=<?php echo $rutacomplemento ?>"><img src="imagenes/act.png" width="50" height="50"/></a>
    </div>
        <h1 ><center>Gestor de archivos</center><Gestor></h1>
       
    </header>
    <div id="cuerpo">
        <div id="indice">
        <div> 
        <div class="dropdown">
            <button class="dropbtn">Nuevo</button>
            <div class="dropdown-content">
             
              
                <!--Funciones de crear carpeta y archivo, redireccionar a archivo php o JS-->
                <a href="index.php?urlcont=nuevacarpeta.php?Ruta=<?php echo $ruta?>&rutac=<?php echo $rutacomplemento?>" >Carpeta</a>
                <a href="index.php?urlcont=nuevoarchivo.php?Ruta=<?php echo $ruta?>&rutac=<?php echo $rutacomplemento?>">Archivo</a>
            </div>
        </div>
        </div>
        <?php
        echo $rutacomplemento.'<br>';
        
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
            <a href="index.php?urlcont=renombrar.php?name='.$i.'&rutac='.$rutacomplemento.'">Renombrar</a>
            <a href="index.php?urlcont=eliminarcarpeta.php?name='.$i.'&rutac='.$rutacomplemento.'" >Eliminar</a>
            <a href="index.php?urlcont=copyc.php?name='.$i.'&rutac='.$rutacomplemento.'" >copiar/pegar</a>
            <a href="index.php?urlcont=mostrarpermisos.php?name='.$i.'&rutac='.$rutacomplemento.'" >Ver informacion de permisos</a>
            <a href="index.php?urlcont=cambiarpermisos.php?name='.$i.'&rutac='.$rutacomplemento.'" >Cambiar permisos de acceso</a>
            <a href="index.php?urlcont=cambiaruser.php?name='.$i.'" >Cambiar propietario</a>
            <a href="index.php?urlcont=mover.php?name='.$i.'&rutac='.$rutacomplemento.'" >Mover</a>
        </div>
    </div><br>';
      }
      foreach($archivos as $i){
        echo ' <div class="dropdown">
        '.$i.'&nbsp'.'
        <button class="dropbtn2">Archivo</button>
        <div class="dropdown-content">
         
          
            <!--Funciones de  archivo-->
            
            <a href="index.php?urlcont=renombrar.php?name='.$i.'&rutac='.$rutacomplemento.'">Renombrar</a>
            <a href="index.php?urlcont=eliminararchivo.php?name='.$i.'&rutac='.$rutacomplemento.'" >Eliminar</a>
            <a href="index.php?urlcont=copiar.php?name='.$i.'&rutac='.$rutacomplemento.'" >copiar/pegar</a>
            <a href="index.php?urlcont=mostrarpermisos.php?name='.$i.'&rutac='.$rutacomplemento.'" >Ver informacion de permisos</a>
            <a href="index.php?urlcont=cambiarpermisos.php?name='.$i.'&rutac='.$rutacomplemento.'" >Cambiar permisos de acseso</a>
            <a href="index.php?urlcont=cambiaruser.php?name='.$i.'" >Cambiar propietario</a>
            <a href="index.php?urlcont=mover.php?name='.$i.'&rutac='.$rutacomplemento.'" >Mover</a>
        </div>
    </div><br>';
      }
     ?>
        </div>
        <div id="contenido">
        <iframe width=900 height=500 src=<?php echo $urlcont?> frameborder="0" allowfullscreen></iframe>
        </div>
        
    </div>
    





    <footer > pie de pagina</footer>
</body>
</html>