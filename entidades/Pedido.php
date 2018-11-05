<?php
class Pedido
{
	private $codigoMesa;
	//private $pendiente = TRUE;
	private $coonsumibles = array();
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

	public function agregarConsumible($c)
	{
		array_push($this->coonsumibles, $c);
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

	public function getConsumibles()
	{
		return $this->coonsumibles;
	}

	public function toString()
	{
		$retorno = '{"codigoMesa":"' . $this->getCodigoMesa() . '","clientes": ';

		foreach ($this->getClientes() as $c)
		{
			$retorno .= $c->toString();
		}

		$retorno .= ',"consumibles": ';

		foreach ($this->getConsumibles() as $co)
		{
			$retorno .= $co->toString();
		}

		$retorno .= '}';
		//$retorno .= '"pendiente":"' . $this->getCodigoMesa() . '"}';

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