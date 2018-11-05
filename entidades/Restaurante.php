<?php
include_once './entidades/Cliente.php';
include_once './entidades/Persona.php';

class Restaurante
{
	private $clientes = array();
	private $pedidos = array();
	private $mesas = array();
	
	function __construct($mesas = NULL)
	{
		$this->setMesas($mesas);
	}

	public function entraCliente($cliente)
	{
		array_push($this->clientes, $cliente);
	}

	public function entraPedido($pedido)
	{
		array_push($this->pedidos, $pedido);
	}

	public function setMesas($mesas)
	{
		$this->mesas = $mesas;
	}

	public function getMesas()
	{
		return $this->mesas;
	}
}
?>