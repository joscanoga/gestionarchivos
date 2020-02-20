<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>permisos </title>
    <style>
		table {
			width: 900px;
			height: 500px;
            background-color: gray;
            position:absolute;
            top:00px;
            left: 00px;
			}
			th, td {
			width: 30px;
			}
</style>
</head>
<body>
<?php
session_start();
$ruta=$_SESSION[ruta];
$name=$_GET[name];
#$rutab=$_GET[rutab];
#echo $rutab;
$rutac=$_GET[rutac];
?>
    <header>

<?php 
$ruta.$name;
$permisos = fileperms($ruta.$name);
echo decoct($permisos);
switch ($perms & 0xF000) {
    case 0xC000: // Socket
        $info = 's';
        break;
    case 0xA000: // Enlace simbólico
        $info = 'l';
        break;
    case 0x8000: // Normal
        $info = 'r';
        break;
    case 0x6000: // Bloque especial
        $info = 'b';
        break;
    case 0x4000: // Directorio
        $info = 'd';
        break;
    case 0x2000: // Carácter especial
        $info = 'c';
        break;
    case 0x1000: // Tubería FIFO pipe
        $info = 'p';
        break;
    default: // Desconocido
        $info = 'u';
}
$info.=" ";
// Propietario
$info .= (($permisos & 0x0100) ? 'r' : '-');
$info .= (($permisos & 0x0080) ? 'w' : '-');
$info .= (($permisos & 0x0040) ?
            (($permisos & 0x0800) ? 's' : 'x' ) :
            (($permisos & 0x0800) ? 'S' : '-'));
$info.=" ";
// Grupo
$info .= (($permisos & 0x0020) ? 'r' : '-');
$info .= (($permisos & 0x0010) ? 'w' : '-');
$info .= (($permisos & 0x0008) ?
            (($permisos & 0x0400) ? 's' : 'x' ) :
            (($permisos & 0x0400) ? 'S' : '-'));

// Mundo
$info.=" ";
$info .= (($permisos & 0x0004) ? 'r' : '-');
$info .= (($permisos & 0x0002) ? 'w' : '-');
$info .= (($permisos & 0x0001) ?
            (($permisos & 0x0200) ? 't' : 'x' ) :
            (($permisos & 0x0200) ? 'T' : '-'));


#echo $info;
$permisos=explode(" ",$info);
#echo substr($permisos[1],1,1).$permisos[1]
?></header>
<table data-vertable="ver1" style="font-size:auto" border="2px">
<thead>
    <tr class="row100 head">
        <th class="column100 column1" data-column="column1">permisos</th>
        <th class="column100 column2" data-column="column2">Usuario</th>
        <th class="column100 column3" data-column="column3">Grupo</th>
        <th class="column100 column4" data-column="column4">Otros</th>

    </tr>
</thead>
<tbody>
    <tr class="row100">
        <td class="column100 column1" data-column="column1">lectura</td>
        <td class="column100 column2" data-column="column2"><?php echo substr($permisos[1],0,1) ?> </td>
        <td class="column100 column3" data-column="column3"><?php echo substr($permisos[2],0,1) ?></td>
        <td class="column100 column4" data-column="column4"><?php echo substr($permisos[3],0,1) ?></td>
    </tr>
    <tr class="row100">
        <td class="column100 column1" data-column="column1">escritura</td>
        <td class="column100 column2" data-column="column2"><?php echo substr($permisos[1],1,1) ?></td>
        <td class="column100 column3" data-column="column3"><?php echo substr($permisos[2],1,1) ?></td>
        <td class="column100 column4" data-column="column4"><?php echo substr($permisos[3],1,1) ?></td>
    </tr>
    <tr class="row100">
        <td class="column100 column1" data-column="column1">ejecucion</td>
        <td class="column100 column2" data-column="column2"><?php echo substr($permisos[1],2,1) ?></td>
        <td class="column100 column3" data-column="column3"><?php echo substr($permisos[2],2,1) ?></td>
        <td class="column100 column4" data-column="column4"><?php echo substr($permisos[3],2,1) ?></td>
    </tr>							
    
</tbody>
</table>

<div>
<?php #$ruta.$name;?>
    
</div>
</body>
</html>
