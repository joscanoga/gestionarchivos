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
    $rutacomplemento="";
    ?>
    <header>
        <h1>Gestor de Archivos </h1>
          <div class="dropdown">
            <button class="dropbtn">Nuevo</button>
            <div class="dropdown-content">

              
                <!--Funciones de crear carpeta y archivo, redireccionar a archivo php o JS-->
                <a href="nuevacarpeta.php">carpeta</a>
                <a href="#FuncionQueCreeUnArchivo">Archivo</a>
            </div>
        </div>
    </header>
    <div>    
      <img src="imagenes/carpeta.png" border="0" width="100" height="100">
    </div>
    
  </body>

</html>