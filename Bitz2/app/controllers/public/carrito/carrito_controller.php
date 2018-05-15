<?php
//Controlador para ver el carrito
    require_once("../app/models/detalle.class.php");
    if(isset($_SESSION['id_usuario'])){
	try{
			$detalle = new Detalle;
			if($detalle->setFactura($_SESSION['id_factura'])){
				$detalles= $detalle->readDetalle();
				if($detalles){
					 require_once("../app/views/public/carrito/carrito_view.php");
				}else{
					throw new Exception("No hay productos en el carrito");
				}
			}else{
				throw new Exception("Cliente incorrecto");
			}
		}catch(Exception $error){
		Page::showMessage(3, $error->getMessage(), "index.php");
    }
}
?>