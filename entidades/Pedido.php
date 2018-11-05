<?php
class Pedido
{
	$id;
	$idMesa;
	$pendiente = TRUE;
	private $elementos = array();
	private $clientes = array();

	function __construct()
	{
		# code...
	}

	public function agregarElemento($e)
	{
		array_push($this->elementos, $e);
	}

	public function agregarCliente($cliente)
	{
		array_push($this->clientes, $cliente);
	}

	public function setMesaRelacionada($idMesa)
	{
		$this->idMesa = $idMesa;
	}

	/*public function SetID($id)
	{
		// Debería recorrer la lista de pedidos hasta encontrar un ID disponible.
		$this->id = $id;
	}*/

	/*public function llevarAPendientes()
	{
		// Debería guardar en JSON o MySQL.	
	}*/
}
?>