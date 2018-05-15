<!--Index//-->
<?php
require_once "../app/controllers/public/controller_index.php";
$mvc = new mvcController();
$mvc -> plantilla();
Page::templateHeader("Productos");
require_once "../app/controllers/public/producto/detalle_controller.php";
require_once "../app/controllers/public/carrito/agregar_controller.php";
Page::templateFooter();
?>
<!--//Index-->