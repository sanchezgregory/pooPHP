<?php namespace Models;

/**
* 
*/
class Conexion
{
	private $datos = array(
			"host" => "localhost",
			"user" => "root",
			"pass" => "123",
			"db"   => "poo"
		);
	private $con;
	
	function __construct()
	{
		$this->con = new \mysqli($this->datos['host'],$this->datos['user'],$this->datos['pass'],$this->datos['db']);
			
	}
	public function consultaSimple($sql)
	{
		$this->con->query($sql);
	}
	public function consultaRetorno($sql)
	{
		$query = $this->con->query($sql);
		return $query;
	}
}

