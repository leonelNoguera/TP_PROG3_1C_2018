<?php

class Empleado
{
	$tipo;
	function __construct($tipo)
	{
		$this->tipo = $tipo;
	}

	public function SetTipo($tipo)
	{
		switch ($tipo)
		{
			case 'bartender':
			case 'cervecero':
			case 'cocinero':
			case 'mozo':
				$this->tipo = $tipo;
				break;
			default:
				echo "Error: No es un tipo de empleado valido.</br>";
				break;
		}
	}

	public function GetTipo()
	{
		return $this->tipo;
	}
}

?>