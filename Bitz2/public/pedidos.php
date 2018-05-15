<!DOCTYPE html>
<html>
  <head>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
     <!--Mi CSS-->
     <link type="text/css" rel="stylesheet" href="../css/estilo_al.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Carrito</title>
  </head>

  <body>
      <!--Menú-->
      <header>
          <nav>
              <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img src="../images/logoblitz.png" height="60px" width="60px"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="../Index.html">Inicio</a></li>
                  <li><a href="productos.html">Productos</a></li>
                  <li><a href="promociones.html">Promociones</a></li>
                  <li><a href="carrito.html">Orden</a></li>
                  <li><a href="../Index.html">Cerrar Sesion</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <div class="imgmenu"><img src="../images/mobilemenu.jpg" alt=""></div>  
                  <li><a href="Index.html">Inicio</a></li>
                  <li><a href="productos.html">Productos</a></li>
                  <li><a href="promociones.html">Promociones</a></li>
                  <li><a href="carrito.html">Orden</a></li>
                  <li><a href="../Index.html">Cerrar Sesion</a></li>
                </ul>
              </div>
            </nav>
        </header>
         <!--Contenido-->
         <main>
            <img class="responsive-img"  src="../images/fondo_carrito.png" alt="fondo" id="fondo_c">
            <h1 id="titulo_c">Pedidos</h1>
         <!--Tabla-->
         <div class="container">
         <div class="row">
           <div class="col s12 m8 l6">
            <table class="bordered hoverable responsive-table tabla">
                <thead>
                  <tr>
                      <th>Pedido</th>
                      <th>Fecha</th>
                      <th>Cantidad</th>
                      <th>Total</th>
                      <th>Estado de Entrega</th>
                  </tr>
                </thead>
         <!--Columnas-->
                <tbody>
                  <tr>
                    <td> <img src="../images/promociones/monitor_ips.jpg" alt="monitos" class="monitor1"> 
                      <p class="t1"><strong>Monitor UPS Ultrawide</strong> con formato 21:9 de 72cm 
                        <br> (29 pulgadas) y resolución 2560x1080px 
                        <br><strong>Modelo:</strong> 29UM68-P</p></td>
                    <td>09/01/2018</td>
                    <td>1</td>
                    <td>$399.00</td>
                    <td>Pendiente</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td class="final"><strong>Total a pagar:</strong> $399.00 <br>(No incluye cargo de envio)</td>
                  </tr>
                </tbody>
              </table> 
         <!--Resumen-->

          <!-- Modal Trigger -->
    </div>

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Confirmar pedido</h4>
      <p><div class="row">
        <div class="col s12">
          <div class="row">
              <div class="input-field col s6 txt">
                <input placeholder="Nombres" id="first_name" type="text" class="validate">
                <label for="nombres">Nombres</label>
              </div>
              <div class="input-field col s6 txt">
                <input placeholder="Apellidos" type="text" class="validate">
                <label for="apellidos">Apellidos</label>
              </div>
              <div class="input-field col s6 txt">
                <input placeholder="Dirección" type="text" class="validate">
                <label for="direccion">Dirección</label>
              </div>
              <div class="input-field col s6 txt">
                <input placeholder="Preguntar por" type="text" class="validate">
                <label for="preguntar">Preguntar por:</label>
              </div>
          </div>
        </div>
      </div></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat Aceptar">Aceptar</a>
    </div>
  </div>
        </main>

        <footer class="page-footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">¡Siguenos en nuestras redes sociales!</h5>
                  <ul>
                    <li><a  href="#!"><span><img src="../images/fb.png" alt="" width="40px" height="40px"></span> </a><a  href="#!"><span><img src="../images/twitter.png" alt="" width="40px" height="40px"></span> </a><a  href="#!"><span><img src="../images/inst.png" alt="" width="40px" height="40px"></span> </a></li>
                  </ul>
                  <p class="grey-text text-lighten-4"><i>"Servir las mejores hamburguesas del pais es nuestro deber"</i></p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Contactanos</h5>
                  <br>
                  <ul>
                    <li>Tel. 2289-9999/2299-999</li>
                    <li>Correo. sunshineburgerssv@gmail.com</li>
                    <br>
                    <li><a class='dropdown-button btn deep-orange accent-4' href='#' data-activates='dropdown1'>Idioma</a>
                    <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Español</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Ingles</a></li>
                    </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>  
            <div class="footer-copyright">
              <div class="container">
              © 2018 Copyright Instituo Tecnico Ricaldone 
              <a class="grey-text text-lighten-4 right" href="#">Volver a Top</a>
            </div>
            </div>
          </footer>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/mijs.js"></script>
  </body>
</html>
      