<?php
class Persona
{
	private $nombre;
	private $apellido;
	
	function __construct($nombre, $apellido)
	{
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function toString()
	{
		return '{"nombre":"' . $this->getNombre() . '","apellido":' . $this->getApellido() . '",';/* + ',"marca":"' + this.marca + '","precio":' + this.precio + ',';*/
	}
}
?>