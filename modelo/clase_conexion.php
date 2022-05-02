<?php
class Conexion extends PDO
{
	//Atributos:
	public $host = 'localhost';
	public $db = 'cultura';
	public $password = '';
	public $user = 'root';
	public $respConex;
	public $errorConex;
	public $conex;

	//Metodos:
	function __construct()
	{
		try {
			$this->conex = parent::__construct("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
			$this->respConex = true;
		} catch (PDOException $e) {
			$this->errorConex = "Error en: ".$e;
		}
	}

	public function getRespConex()
	{
		return $this->respConex;
	}

	public function getErrorConex()
	{
		return $this->errorConex;
	}
}
?>