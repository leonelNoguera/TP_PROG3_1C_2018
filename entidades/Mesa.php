<?php
class Mesa
{
	private $codigo;
	//private $clientes = array();

	function __construct($codigo = NULL)
	{
		if ($codigo != NULL)
		{
			$this->setCodigo($codigo);
		}
	}

	/*public function agregarCliente($cliente)
	{
		array_push($this->clientes, $cliente);
	}*/

	public function setCodigo($codigo)
	{
		if (strlen($codigo) == 5)
		{
			$this->codigo = $codigo;
		}
		else
		{
			echo "Error: El codigo debe ser de 5 caracteres.";
		}
	}

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function toString()
	{
		return '{"codigo":"' . $this->getCodigo() . '"}';
	}
}
?>