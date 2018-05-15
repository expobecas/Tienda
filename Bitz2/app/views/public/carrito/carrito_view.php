<!--Viista del carrito-->
<div class="container">
<table class=" highlight white" >
<!--Elementos que poseerá la tabla-->
    <thead>
      <tr>
          <th>Producto</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
      </tr>
<?php
    $total=null;
    $subtotal= null;
    foreach($detalles as $detalle){
        $subtotal= $detalle['precio_prod']* $detalle['cantidad_producto'];
        $total= $subtotal + $total;
        //Información de las tablas
        print("       
        </thead>
        <tbody>
          <tr>
            <td>$detalle[nombre_prod]</td>
            <td>$detalle[precio_prod]</td>
            <td>$detalle[cantidad_producto]</td>
            <td>$subtotal</td>
            <td>
            <a  href='update_carrito.php?id=$detalle[id_detalle]'class='blue-text' ><i class='material-icons'>mode_edit</i></a>
            <a href='delete_carrito.php?id=$detalle[id_detalle]' class='red-text'><i class='material-icons'>delete</i></a>
            </td>
          </tr>
        ");
    }
?>
<!--Seccion donde se muestra el total-->
</table>                   
<div class="row ">
    <div class="col s12 m6 l12 ">
      <div class="card  grey lighten-3 ">
        <div class="card-content black-text ">                                                                 
           <?php print("<p class='right'> <b>TOTAL  </b>  $total ");?>
         </div>                                   
      </div>
      <form method='post'>
      <!--Botón para realizar compra-->
        <button type='submit' name='comprar' class='btn waves-effect waves-light cyan tooltipped right' data-tooltip='Realizar compra'>Realizar compra</button>
      </form>
    </div>
</div>  
</div>                     
</div>