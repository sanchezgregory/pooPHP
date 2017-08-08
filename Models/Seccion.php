<?php 
namespace Models;

/**
* 
*/
class Seccion
{
	private $id;
	private $nombre;
	private $con;
	function __construct()
	{
		$this->con = new Conexion();
	}
	function set($atributo, $valor)
	{
		$this->atributo = $valor;
	}
	function get($atributo)
	{
		return $this->atributo;
	}
	function list()
	{
		$sql = "SELECT * FROM secciones";
		$resp = $this->con->consultaRetorno($sql);
		return $resp;
	}
	function add()
	{
		$sql = "INSERT INTO secciones (nombre) VALUES ('{$this->nombre}')";
		$this->con->consultaSimple($sql);
	}
	function delete()
	{
		$sql = "DELETE FROM secciones WHERE id = '{$this->id}'";
		$this->con->consultaSimple($sql);
	}
	function update()
	{
		$sql = "UPDATE secciones SET nombre = '{$this->nombre}'";
		$this->con->consultaSimple($sql);
	}
	function view()
	{
		$sql = "SELECT t1.nombre as seccion, t2.* FROM secciones t1
		INNER JOIN estudiantes t2 ON t1.id = t2.seccion_id";
		$resp = mysqli_fetch_assoc($this->con->consultaRetorno($sql));
		return $resp;
	}
}