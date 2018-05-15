<?php
class Compra extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $usuario = null;
    private $estado = null;
    private $fecha = null;
    private $total = null;

	//Métodos para sobrecarga de propiedades
	public function setId($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id;
	}
		public function setCliente($value){
		if($this->validateId($value)){
			$this->cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getUsuario(){
		return $this->cliente;
    }
    public function setEstado($value){
		if($this->validateId($value)){
			$this->estado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getEstado(){
		return $this->estado;
    }
    public function setFecha($value){
			$this->fecha = $value;
			return true;
		}
	
	public function getFecha(){
		return $this->fecha;
    }
    public function setTotal($value){
		if($this->validateId($value)){
			$this->total = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTotal(){
		return $this->total;
    }



	//Metodos para el manejo del CRUD
	public function getMax(){
		$sql = "SELECT MAX(id_factura) FROM factura WHERE id_usuario =?";
		$params = array($this->usuario);
		return Database::getRows($sql, $params);
	}
	public function searchCategoria($value){
		$sql = "SELECT * FROM tipo_producto WHERE nombre_tipo_prod LIKE ?  ORDER BY nombre_tipo_prod";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function createCompra(){
		$sql = "INSERT INTO factura(fecha,id_estado,total) VALUES(?,?,?)";
        $fechaactual = getdate();
		$params = array($fechaactual,$this->estado,$this->total);
		return Database::executeRow($sql, $params);
	}
	public function readCategoria(){
		$sql = "SELECT nombre_tipo_prod FROM tipo_producto WHERE id_tipo_prod = ?";
		$params = array($this->id);
		$categoria = Database::getRow($sql, $params);
		if($categoria){
			$this->nombre = $categoria['nombre_tipo_prod'];
			return true;
		}else{
			return null;
		}
	}
	public function updateCompra(){
		$sql = "UPDATE factura SET fecha = ?, id_estado = ?, total=? WHERE id_factura = ?";
		$estadocompra = 4;
		$fechaactual = getdate();
		$params = array($fechaactual, $estadocompra, $this->total);
		return Database::executeRow($sql, $params);
	}
	public function deleteCategoria(){
		$sql = "DELETE FROM tipo_producto WHERE id_tipo_prod = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>