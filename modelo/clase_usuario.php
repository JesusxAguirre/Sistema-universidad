<?php
require_once 'modelo/clase_conexion.php';
class Usuario extends Conexion
{
    //Atributes
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $tipoUsuario;

    //Methods
    public function __construct()
    {
        parent::__construct();
    }

    public function consultar()
	{
		$sql = 'SELECT * FROM usuarios ORDER BY id_usuario ASC';

		return $this->query($sql);
	}

	public function registrar()
	{
		$sql = 'INSERT INTO usuarios (nombre, apellido, correo, clave, tipo_usuario) VALUES (:nombre, :apellido, :correo, :clave, :tipo_usuario)';
		try {
			//Preparar y crear objeto PDOstatement con el codigo SQL
			$stmt = $this->prepare($sql);
			//Preparar parametros
			$stmt->bindParam(':nombre', $this->nombre);
			$stmt->bindParam(':apellido', $this->apellido);
			$stmt->bindParam(':correo', $this->correo);
			$stmt->bindParam(':clave', $this->clave);
			$stmt->bindParam(':tipo_usuario', $this->tipoUsuario);
			//Ejecutar
			$stmt->execute();

			$respArreglo = ['estado' => true];

			return $respArreglo;
		} catch (PDOException $e) {
			$error = ['estado' => false];
			$error += ['info' => "error sql:{$e}"];

			return $error;
		}
	}

	public function actualizar()
	{
		$sql = "UPDATE usuarios SET nombre = :nombre, apellido = :apellido, correo = :correo, clave = :clave, tipo_usuario = :tipoUsuario WHERE usuarios.correo = :correo2";
		try {
			$stmt = $this->prepare($sql);

			$stmt->bindParam(':nombre', $this->nombre);
			$stmt->bindParam(':apellido', $this->apellido);
			$stmt->bindParam(':correo', $this->correo);
			$stmt->bindParam(':clave', $this->clave);
			$stmt->bindParam(':tipoUsuario', $this->tipoUsuario);
			$stmt->bindParam(':correo2', $this->correo);

			$stmt->execute();

			$respArreglo = ['estado' => true];

			return $respArreglo;
		} catch (PDOException $e) {
			$error = ['estado' => false];
			$error += ['info' => "error sql:{$e}"];

			return $error;
		}
		
	}

	public function eliminar($idUsuario)
	{
		$sql = 'DELETE FROM usuarios WHERE usuarios.id_usuario = :idUsuario';

		try {
			//Preparar y crear objeto PDOstatement con el codigo SQL
			$stmt = $this->prepare($sql);
			//Preparar parametro
			$stmt->bindParam(':idUsuario', $idUsuario);
			//Ejecutar
			$stmt->execute();

			$respArreglo = ['estado' => true];

			return $respArreglo;
		} catch (PDOException $e) {
			$error = ['estado' => false];
			$error += ['info' => "error sql:{$e}"];

			return $error;
		}
	}

    public function buscar($correo, $clave = NULL){
    	if (!empty($clave)) {
    		$sql = 'SELECT * FROM usuarios WHERE correo = :correo AND clave = :clave';
    	} else {
    		$sql = 'SELECT * FROM usuarios WHERE correo = :correo';
    	}
        

		try {
			//Preparar y crear objeto PDOstatement con el codigo SQL
			$stmt = $this->prepare($sql);
			//Preparar parametro
			$stmt->bindParam(':correo', $correo);
			if (!empty($clave)) {
				$stmt->bindParam(':clave', $clave);
			}
            
			//Ejecuta la consulta
			$stmt->execute();

			//Si ecuentra una coincidendia la retorna, de lo contrario retorna false
			if ($stmt->rowCount() >= 1) {
				$respArreglo = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$respArreglo += ['estado' => true];

				return $respArreglo;
			} else {
				$respArreglo = ['estado' => false];

				return $respArreglo;
			}
		} catch (PDOException $e) {
			$error = ['estado' => false];
			$error += ['info' => "error sql:{$e}"];

			return $error;
		}
    }

    //Setter
    public function setDatos($nombre, $apellido, $correo, $clave, $tipoUsuario)
    {
    	$this->nombre = $nombre;
    	$this->apellido = $apellido;
    	$this->correo = $correo;
    	$this->clave = $clave;
    	$this->tipoUsuario = $tipoUsuario;
    }
}
?>