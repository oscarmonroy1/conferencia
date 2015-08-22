
<!--JJJJA-->
<?php
include("editar.php");
include("buscar.php");
date_default_timezone_set("America/Mexico_City");
$c= new buscador;
$c->conectar();
$q=$_GET['id_alumno'];

$c=mysql_fetch_assoc(mysql_query("SELECT * FROM datos WHERE id_alumno='$q'"));

print "<p>" . date("H:i:s") . "</p>\n";


$id =$c['id_alumno'];
$n =$c['nombre'];
$l =$c['licenciatura'];
$e =date("H:i:s");


$act = mysql_query("INSERT INTO respaldo (id_alumno,nombre,licenciatura,hora_e,hora_s) VALUES('$id','$n','$l','$e','')");

if ($act) {
	print 'el respaldo se guardo exitosamente';


} else { 
	print 'el Alumno ya esta registrado';	
	
}

$query = mysql_query("SELECT * FROM respaldo ");
		
			print '<table width="100%" border="1" cellspacing="0" cellpadding="0">
					  <tr>
					   <td>Numero de registro</td>
						<td>Numero de cuenta</td>
						<td>Nombre</td>
						<td>Licenciatura</td>
						<td>Hora de registro</td>
						<td>Hora de salida</td>
					  </tr>';
					  $u=1; $y=0;
			while ($row = mysql_fetch_assoc($query)) {
				print ' <tr>
				        <td>'.$u.'</td>
						<td>'.$row['id_alumno'].'</td>
						<td>'.$row['nombre'].'</td>
						<td>'.$row['licenciatura'].'</td>
						<td>'.$row['hora_e'].'</td>
						<td>'.$row['hora_s'].'</td>
					  </tr>';
					   $u++;
					  $y++;
			}
	        
			print '</table>';
			echo "total de ingresos ".$y;

           

?>
