<?php
include_once './entidades/Cliente.php';
include_once './entidades/Persona.php';
include_once './entidades/Restaurante.php';
include_once './entidades/Mesa.php';

/*$caracteres = "_-0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
for ($i=0; $i < strlen($caracteres); $i++)
{ 
	# code...
}
echo rand(0, 10);*/

/*Se inicializa el restaurante con sus respectivas mesas.*/
$mesas = array();
{
	$m = new Mesa("abc12");
	array_push($mesas, $m);
	$m = new Mesa("abc23");
	array_push($mesas, $m);
	$m = new Mesa("abc34");
	array_push($mesas, $m);
	$m = new Mesa("abc45");
	array_push($mesas, $m);
	$m = new Mesa("abc56");
	array_push($mesas, $m);
	$m = new Mesa("abc67");
	array_push($mesas, $m);
	$m = new Mesa("abc78");
	array_push($mesas, $m);
	$m = new Mesa("abc89");
	array_push($mesas, $m);
	$m = new Mesa("abc90");
	array_push($mesas, $m);
	$m = new Mesa("abc91");
	array_push($mesas, $m);	
}
$r = new Restaurante($mesas);

/*Entra un cliente al restaurante.*/
$c1 = new Cliente("Juan", "Perez");
echo $c1->toString();
$r->entraCliente($c1);
/*El cliente se sienta en una mesa.*/
$c1->setMesa("abc56");
?>