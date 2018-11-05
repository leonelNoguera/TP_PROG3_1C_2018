<?php
//include_once './Persona.php';
include_once './entidades/Persona.php';
class Cliente extends Persona
{
	private $codigoMesa;
	
	function __construct($nombre, $apellido, $codigoMesa = NULL)
	{
		parent::__construct($nombre, $apellido);
		$this->codigoMesa = $codigoMesa;
	}

	public function setCodigoMesa($codigoMesa)
	{
		$this->codigoMesa = $codigoMesa;
	}

	public function getCodigoMesa()
	{
		return $this->codigoMesa;
	}

	public function toString()
	{
		return parent::toString() . '"codigoMesa":"' . $this->getCodigoMesa() . '"}';
	}
}
?>