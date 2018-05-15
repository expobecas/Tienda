<?php
class Detalle extends Validator{
	//Declaración de propiedade
	private $id = null;
	private $estado = null;
    private $producto = null;
    private $cantidad = null;
	private $factura= null;
	private $existencias = null;
	private $usuario =null;
    

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
	public function setFactura($value){
		if($this->validateId($value)){
			$this->factura = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFactura(){
		return $this->factura;
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
    public function setProducto($value){
		if($this->validateId($value)){
			$this->producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getProducto(){
		return $this->producto;
    }
    public function setCantidad($value){
        if($this->validateId($value)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	
	public function getCantidad(){
		return $this->cantidad;
    }
	public function setExistencias($value){
        if($this->validateId($value)){
			$this->existencias = $value;
			return true;
		}else{
			return false;
		}
		}
	
	public function getExistencias(){
		return $this->existencias;
	}
	public function setUsuario($value){
        if($this->validateId($value)){
			$this->usuario = $value;
			return true;
		}else{
			return false;
		}
		}
	
	public function getUsuario(){
		return $this->usuario;
    }
 
	//Metodos para el manejo del CRUD
	public function createDetalle(){
		$sql = "INSERT INTO detalle_venta( id_producto, id_factura, cantidad_producto) VALUES(?,?,?)";
		$params = array( $this->producto, $this->factura, $this->cantidad);
		return Database::executeRow($sql, $params);
	}
	public function readDetalle(){
		$sql = "SELECT id_detalle, nombre_prod, precio_prod, cantidad_producto, cantidad_prod,id_estado FROM detalle_venta INNER JOIN producto USING(id_producto) INNER JOIN factura ON factura.id_factura = detalle_venta.id_factura WHERE detalle_venta.id_factura = ? AND id_estado=3 ";
		$params = array($this->factura);
		return Database::getRows($sql, $params);
		
	}
	public function readProducto(){
		$sql = "SELECT  id_producto, id_factura, cantidad_producto, cantidad_prod FROM detalle_venta INNER JOIN producto USING(id_producto) WHERE id_detalle = ?";
		$params = array($this->id);
		$productos = Database::getRow($sql, $params);
		if($productos){
			$this->producto = $productos['id_producto'];
			$this->factura = $productos['id_factura'];
			$this->cantidad= $productos['cantidad_producto'];
			$this->existencias= $productos['cantidad_prod'];
			return true;
		}else{
			return null;
		}
	}
	public function createFactura(){
		$sql = "INSERT INTO factura(id_usuario, fecha, id_estado) VALUES(?, ?, ?)";
		$fechas = date('y-m-d');
		$estados = 3;
		$params = array($this->usuario, $fechas, $estados);
		return Database::executeRow($sql, $params);
	}
	public function updateDetalle(){
		$sql = "UPDATE detalle_venta SET cantidad_producto = ? WHERE id_producto = ? AND id_factura= ?";	
		$params = array($this->cantidad, $this->producto, $this->factura);
		return Database::executeRow($sql, $params);
	}
	public function deleteDetalle(){
		$sql = "DELETE FROM detalle_venta WHERE id_detalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
	public function readExistencias(){
		$sql = "SELECT cantidad_prod FROM detalle_venta INNER JOIN producto USING(id_producto) WHERE id_detalle = ?";
		$params = array($this->id);
		return Database::getRows($sql, $params);
}
public function readCarrito(){
        $sql = "SELECT id_producto, detalle_venta.id_factura, cantidad_producto, id_estado FROM detalle_venta INNER JOIN factura ON factura.id_factura = detalle_venta.id_factura WHERE id_producto = ? AND detalle_venta.id_factura = ? AND id_estado =3 ";
		$params = array($this->producto , $this->factura);
		return Database::getRows($sql, $params);
	}
	public function ModificarExistencia(){
		    $sql = "UPDATE producto SET cantidad_prod = ? WHERE id_producto = ?";
			$params = array($this->cantidad, $this->producto);
			return Database::executeRow($sql, $params);
		}
	public function getExistenciaas(){
			$sql = "SELECT cantidad_prod FROM producto WHERE id_producto = ?";
			$params = array($this->producto);
			return Database::getRows($sql, $params);
			}
	public function getCarrito(){
			$sql = "SELECT id_detalle, nombre_prod , precio_prod, cantidad_prod, detalle_venta.id_producto ,cantidad_producto FROM detalle_venta INNER JOIN producto USING(id_producto) WHERE id_factura=?";
			$params = array($this->factura);
			return Database::getRows($sql, $params);
				}
	public function Comprar(){
			$sql = "UPDATE factura SET fecha=?, id_estado = ?  WHERE id_factura = ?";
			$fechas = date('y/m/d');
			$enviado = 1;
		    $params = array($fechas,$enviado,$this->factura);
		    return Database::executeRow($sql, $params);
					}
	public function readHistorialdetalle(){
			$sql = "SELECT id_detalle, nombre_prod, precio_prod, cantidad_producto, cantidad_prod FROM detalle_venta INNER JOIN producto USING(id_producto) WHERE id_factura =?";
			$params = array($this->factura);
			return Database::getRows($sql, $params);
						
					}
	public function maxId(){
		$sql = "SELECT id_factura FROM factura WHERE id_factura= (SELECT MAX(id_factura) FROM factura) AND id_usuario = ?";
		$params = array($this->usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->factura = $data['id_factura'];	
			return true;
		}else{
			return false;
		}
	}
	public function readHistorial(){
		$sql = "SELECT id_factura, id_usuario,fecha, nombre_estado_envio FROM factura INNER JOIN estado_envio ON factura.id_estado= estado_envio.id_estado_envio  WHERE id_usuario = ? AND id_estado = 4";
		$params = array($this->usuario);
		return Database::getRows($sql, $params);
					
				}
	  

}
?>