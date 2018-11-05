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

	public function getPedidos()
	{
		return $this->pedidos;
	}

	public function getClientes()
	{
		return $this->clientes;
	}

	public function mostrarInfo()
	{
		$retorno = "<strong>Informacion del restaurante.</strong></br>";
		
		$retorno .= "Clientes:</br></br>";

		foreach ($this->getClientes() as $c)
		{
			$retorno .= $c->toString() . "</br>";
		}

		$retorno .= "</br>Pedidos:</br></br>";

		foreach ($this->getPedidos() as $p)
		{
			$retorno .= $p->toString() . "</br>";
		}

		return $retorno;
	}
}
?>