<?php
class buscador{

 var $host='localhost';
 var $user='root';
 var $pass='';
 var $base='alumnos';
 var $c_servidor='se conecto con el servidor correctamente',$i_servidor='no se conecto con el servidor';
 var $c_db='se conecto correctamente la base de datos',$i_db='no se conecto con la base de datos';

function conectar ()
{
if (!@mysql_connect($this->host,$this->user,$this->pass)){
	print $this->i_servidor;
}else{
	if (!@mysql_select_db($this->base)){
    print $this->i_db;
	}
}
}
function Buscar($q) {
		$query = mysql_query("SELECT * FROM datos WHERE id_alumno LIKE '%$q%'");
		if (mysql_num_rows($query)<=0){
			print 'No se encontro ningun resultado';
			
		} else {
			print '<table width="100%" border="1" cellspacing="0" cellpadding="0">
					  <tr>
						<td>Numero de cuenta</td>
						<td>Nombre</td>
						<td>Licenciatura</td>
					  </tr>';
			while ($row = mysql_fetch_assoc($query)) {
				print ' <tr>
						<td>'.$row['id_alumno'].'</td>
						<td>'.$row['nombre'].'</td>
						<td>'.$row['licenciatura'].'</td>
						<td><span style="cursor:pointer;" onclick="Respaldo('.$row['id_alumno'].');">*Guardar entrada </span><br><span style="cursor:pointer;" onclick="Confirmar('.$row['id_alumno'].');">*Guardar salida</span></td>
					  </tr>';
			}
			print '</table>';
		}

}




}
?>