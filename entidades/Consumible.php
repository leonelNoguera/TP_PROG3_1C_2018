<?php
class Consumible
{
	private $nombre;
	private $precio;
	
	function __construct($nombre, $precio)
	{
		$this->setNombre($nombre);
		$this->setPrecio($precio);
	}

	public function setNombre($nombre)
	{
		//Queda pendiente tener una lista que contenga los nombres de todos los consumibles del restaurante.
		$this->nombre = $nombre;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setPrecio($precio)
	{
		$this->precio = $precio;
	}

	public function getPrecio()
	{
		return $this->precio;
	}

	public function toString()
	{
		return '{"nombre":"' . $this->getNombre() . '","precio":' . $this->getPrecio() . '}';
	}
}
?>