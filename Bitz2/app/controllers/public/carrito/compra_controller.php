<?php
 //Controlador para poder realizar una compra
require_once("../app/models/detalle.class.php"); 
try{ 
if(isset($_POST['comprar'])){
    $comprar = new Detalle;
      $_POST = $comprar->validateForm($_POST);
      if($comprar->setFactura($_SESSION['id_factura'])){
                  $productos = $comprar->getCarrito();
                  if ($productos){                        
                    $cantidades = count($productos);
                    $existencias = null;
                    for ($i=0; $i < $cantidades ; $i++) { 
                    if($productos[$i]['cantidad_prod']>=$productos[$i]['cantidad_producto']){    
                          $comprar->setFactura($_SESSION['id_factura']);                
                          $comprar->Comprar();
                          $existencias = ($productos[$i]['cantidad_prod']-$productos[$i]['cantidad_producto']);
                          $comprar->setProducto($productos[$i]['id_producto']);
                          $comprar->setCantidad($existencias);
                          $comprar->ModificarExistencia();     
                          Page::showMessage(1, "Compra Realizada", 'index.php');
                          $comprar->setUsuario($_SESSION['id_usuario']);
                          $comprar->createFactura();
                          $comprar->maxId();  
                          $_SESSION['id_usuario'] = $comprar->getFactura();
                        }
                  
                    else {
                      Page::showMessage(2, "No se puede realizar compra porque no hay suficientes productos",null);
                          }
                    }                
                 }else{
                    Page::showMessage(2, "ERROR EN ALGO", 'index.php');
                     }

          }else{
                 throw new Exception("NO CLIENTE");
               }
}
}catch(Exception $error){
Page::showMessage(2, $error->getMessage(), 'index.php');
}
//--------------------------------------------------------------------------
?>