<?php
class Pedido
{
	private $codigoMesa;
	private $pendiente = TRUE;
	private $elementos = array();
	private $clientes = array();

	function __construct($clientes = NULL, $codigoMesa = NULL)
	{
		if ($clientes != NULL)
		{
			foreach ($clientes as $c)
			{
				agregarCliente($c);
			}
		}
		if ($codigoMesa != NULL)
		{
			setCodigoMesa($codigoMesa);
		}
	}

	public function agregarElemento($e)
	{
		array_push($this->elementos, $e);
	}

	public function agregarCliente($cliente)
	{
		array_push($this->clientes, $cliente);
		if ($cliente->getCodigoMesa() != NULL)
		{
			$this->setCodigoMesa($cliente->getCodigoMesa());
		}
	}

	public function setCodigoMesa($codigoMesa)
	{
		$this->codigoMesa = $codigoMesa;
	}

	public function getCodigoMesa()
	{
		return $this->codigoMesa;
	}

	public function getClientes()
	{
		return $this->clientes;
	}

	public function getElementos()
	{
		return $this->elementos;
	}

	public function toString()
	{
		$retorno = '{"codigoMesa":"' . $this->getCodigoMesa() . '","clientes": ';

		foreach ($this->getClientes() as $c)
		{
			$retorno .= $c->toString();
		}

		foreach ($this->getElementos() as $e)
		{
			$retorno .= $e . ",";
		}

		return $retorno;
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