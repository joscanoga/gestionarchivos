<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambiar permisos</title>
    <style>

header, footer { width: 900px; height: 100px; background: #666; font-size: 2em; text-align: center; clear: both; }

section { position: relative; }

#iz { position: relative; width: 300px; top: 0; left: 0; background: #ccc; float: left; height: 500px; }

#der { position: relative; width: 50%; top: 0; right: 0; background: #ddf; float: right; height: 200px; }

.esqinfder { position: absolute; bottom: 5px; right: 5px; background: #ff0; }

</style>
</head>
<body>
<?php $ruta=$_GET[rutac];
        $name=$_GET[name];
         echo $ruta.$name;
        ?>
        <?php 
        SESSION_start();
        $_SESSION['ruta']=$ruta;
        $_SESSION['name']=$name;
        $_SESSION['namec']=$ruta.$name;
        ?>
<div id="body">
<form name="permisos" action="cambiarpermisos1.php " method="GET">
<header>
<h2 >configurar permisos</h2> <br>
</header>
<div id="iz">
<h3>permisos usuarios</h3><br>

<h4>permisos de escritura</h4><br>
<input type="radio" name="escrituraU" value=4>si</input>

<input type="radio" name="escrituraU" value=0 > No</input>
<br>


<h4>permisos de lectura</h4><br>
<input type="radio" name="lecturaU" value=2>si</input>

<input type="radio" name="lecturaU" value=0 > No</input>
<br>


<h4>permisos de ejecucion</h4><br>
<input type="radio" name="ejecucionU" value=1>si</input>

<input type="radio" name="ejecucionU" value=0 > No</input>
<br>
</div>
<div id="iz">
<h3>permisos grupo</h3><br>

<h4>permisos de escritura</h4><br>
<input type="radio" name="escrituraG" value=4>si</input>

<input type="radio" name="escrituraG" value=0 > No</input>
<br>


<h4>permisos de lectura</h4><br>
<input type="radio" name="lecturaG" value=2>si</input>

<input type="radio" name="lecturaG" value=0 > No</input>
<br>


<h4>permisos de ejecucion</h4><br>
<input type="radio" name="ejecucionG" value=1>si</input>

<input type="radio" name="ejecucionG" value=0 > No</input>
<br>
</div>
<div id="iz">
<h3>permisos otros</h3><br>

<h4>permisos de escritura</h4><br>
<input type="radio" name="escrituraO" value=4>si</input>

<input type="radio" name="escrituraO" value=0 > No</input>
<br>


<h4>permisos de lectura</h4><br>
<input type="radio" name="lecturaO" value=2>si</input>

<input type="radio" name="lecturaO" value=0 > No</input>
<br>


<h4>permisos de ejecucion</h4><br>
<input type="radio" name="ejecucionO" value=1>si</input>

<input type="radio" name="ejecucionO" value=0 > No</input>
<br>
</div>
<footer>

<p><input type="submit" value="aceptar"></p>

</footer>

</div>
</div>

<br><br>


</form>
</body>
</html>