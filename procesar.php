<?php
include("buscar.php");
$c= new buscador;
$c->conectar();
$q=$_GET['q'];
if($q==NULL){
print ("ingresa algun numero de cuenta");
}else{
$c->Buscar($q);
}

?>