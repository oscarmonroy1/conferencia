<?php
include("buscar.php");
$c= new buscador;
$c->conectar();
$id=$_GET['id_alumno'];
$m =$_GET['m'];
$act = mysql_query("INSERT INTO registros (id_registro,n_cuenta,n_conferencia) VALUES('','$m','')");
if ($act) {
	print 'La conferencia se guardo exitosamente';
} else { 
	print 'Se produjo algun error';	
}
?>
