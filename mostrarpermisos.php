<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>permisos </title>
</head>
<body>
<?php
$ruta=$_GET[rutab].$_GET[rutac];
$name=$_GET[name];
$rutab=$_GET[rutab];
#echo $rutab

?>
    <header>
<h1>los permisos </h1>
<?php 
#echo $ruta.$name;
$permisos = fileperms($ruta.$name);
#echo decoct($permisos);
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

echo $info;
?>
        
<head>
	<title>Permisos</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1000">

</head>
<style>
		table {
			width: 80%;
			height: 600px;
            background-color: gray;
            position:absolute;
            top: 100px;
            left: 200px;
			}
			th, td {
			width: 30%;
			}
</style>
<body>
	<table data-vertable="ver1" style="font-size:100px" border="20px">
		<thead>
			<tr class="row100 head">
				<th class="column100 column1" data-column="column1"></th>
				<th class="column100 column2" data-column="column2">Usuario</th>
				<th class="column100 column3" data-column="column3">Grupo</th>
				<th class="column100 column4" data-column="column4">Otros</th>

			</tr>
		</thead>
		<tbody>
			<tr class="row100">
				<td class="column100 column1" data-column="column1">r</td>
				<td class="column100 column2" data-column="column2"></td>
				<td class="column100 column3" data-column="column3"></td>
				<td class="column100 column4" data-column="column4"></td>
			</tr>
			<tr class="row100">
				<td class="column100 column1" data-column="column1">w</td>
				<td class="column100 column2" data-column="column2"></td>
				<td class="column100 column3" data-column="column3"></td>
				<td class="column100 column4" data-column="column4"></td>
			</tr>
			<tr class="row100">
				<td class="column100 column1" data-column="column1">x</td>
				<td class="column100 column2" data-column="column2"></td>
				<td class="column100 column3" data-column="column3"></td>
				<td class="column100 column4" data-column="column4"></td>
			</tr>							
			
		</tbody>
	</table>
</body>
<div>
<a href="index.php?rutac=<?php echo $_GET[rutac]?>">atras</a><a href="index.php?rutac="> raiz</a>
    </header>
</body>
</html>
