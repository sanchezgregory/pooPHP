<?php namespace Models;

/**
* 
*/
class Estudiante
{
	private $id;
	private $nombre;
	private $edad;
	private $promedio;
	private $imagen;
	private $seccion_id;
	private $fecha;
	private $con;
	
	public function __construct()
	{
		$this->con = new Conexion();
	}
	public function test()
	{
		echo $this->id;
	}
	public function set($atributo, $contenido)
	{
		$this->atributo = $contenido;
	}
	public function get($atributo)
	{
		return $this->id;

	}
	public function list()
	{
		$sql = "SELECT t1.*, t2.nombre as seccion from estudiantes t1
		INNER JOIN secciones t2 ON t1.seccion_id = t2.id ";
		$resp = $this->con->consultaRetorno($sql);
		return $resp;
	}
	public function add()
	{
		$sql = "INSERT INTO estudiantes (nombre,edad,promedio,imagen,fecha,seccion_id)
				values ('{$this->nombre}','{$this->edad}','{$this->promedio}','{$this->imagen}',
				'NOW()','{$this->seccion_id}')";
		$this->con->consultaSimple($sql);
	}
	public function update()
	{
		$sql = "UPDATE estudiantes SET nombre='{$this->nombre}',edad='{$this->edad}',
				promedio='{$this->promedio}',imagen='{$this->imagen}',
				seccion_id='{$this->seccion_id}' WHERE id = '{$this->id}'";
		$this->con->consultaSimple();
	}
	public function delete()
	{
		$sql = "DELETE FROM estudiantes where id = '{$this->id}'";
		$this->con->consultaSimple($sql);
	}
	public function view($id)
	{
		$sql = "SELECT t1.*, t2.nombre as seccion FROM estudiantes t1
				INNER JOIN secciones t2 ON t1.seccion_id = t2.id 
				WHERE t1.id = '{$id}'";
		$resp = $this->con->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($resp);
		return $row;	
	}

}