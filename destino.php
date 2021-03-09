<?php
session_start();

extract($_GET);
$_SESSION["zona"]=$variable1;
$_SESSION["costo"]=$valor;
?>
  <!DOCTYPE html>

  <html lang="en">
  <head>
  	<title>SLPARKING</title>
  	<meta charset="utf-8">
  	<meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script> 
    <script src="js/superfish.js"></script>
    <script src="js/ticket.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/tmStickUp.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/TMForm.js"></script>
    <script src="js/modal.js"></script>
    <script>
    $(window).load(function(){
      $().UItoTop({ easingType: 'easeOutQuart' });
      $('#stuck_container').tmStickUp({});  
    }); 
    </script>

  <?php 
  
  $fecha=getdate();
  $hora=$fecha['hours'];
  $_SESSION["horaActual"]=$hora;
  $dia=$fecha['mday'];
  $mes=$fecha['mon'];
  $anio=$fecha['year'];
  ?>

</head>
<body>
  <!--==============================
                header
                =================================-->
                <div class="header2">
                 <div class="container">
                   <div class="row">
                    
                   </div>
                 </div>

                 <section id="stuck_container">
        <!--==============================
                    Stuck menu
                    =================================-->
                    <div class="container">
                      <div class="row">
                        <div class="grid_12 ">
                         <div class="clear"></div>  
                       </div>
                       <div v class="navigation">
                        <nav>
                         <ul class="sf-menu">
                           <li class="current"><a href="index.html">Inicio</a></li>
                           <li><a href="informacion.html">Informaci&oacute;n</a></li>
                           <li><a href="CrearUsuario.html">Crear Cuenta</a></li>
                           <li><a href="contacts.html">Contacto</a></li>
                           
                           
                         </ul>
                       </nav>
                       <div class="clear"></div>
                     </div> 
                   </div> 
                 </div> 
               </section>
             </div>

  <!--=====================
            Content
            ======================-->
            <section id="content">
             <div class="ic"> </div>
             <div class="container">
               <div class="row">
                <div class="grid_12">
                  <br><br>
                  <div>
                  	
                  	<h2 align="center">  <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">Crear Ticket</font></h2>
                  	<h5 align="center"><?php echo ("Usuario: ".$_SESSION["usuario"]); echo " <br>  "; ?>
                     <?php echo ("Patente: ".$_SESSION["patente"]);echo " <br>  ";  ?><?php echo ("Saldo: $".$_SESSION["saldo"]); ?></h5>
                     <div>
                      

                      <form action="guarda_ticket.php" id="nuevoticket" name="nuevoticket" method="POST">
                       <blockquote class="bq1"> 
                        
                        <div align="center">
                          <?php echo ("<strong>Zona:</strong> ".$_SESSION["zona"]); ?>
                        </div>
                        <br>
                        <div align="center">
                          <?php echo ("<strong>Fecha:</strong> ".$dia."/".$mes."/".$anio); ?>
                        </div>
                        <br>
                        <div align="center">
                         <?php echo ("<strong>Precio por hora:</strong> $".$_SESSION["costo"]); ?>
                       </div>
                       <br>
                       <div align="center">
                        <?php echo ("<strong>Selecciones su per&iacute;odo de Estacionamiento</strong>" ); ?>
                      </div>
                      <br>
                      <div align="center">
                        <strong>Desde:</strong> <input type="number" max="24" id="horaInicio" name="horaInicio" min=<?php echo ($hora);?> value=<?php echo ($hora);?> /> Hs
                      </div>
                      <br>
                      <div align="center">
                        <strong>Hasta:</strong> <input type="number" max="24" id="horaFin" name="horaFin" value=<?php echo ($hora+1);?> min= <?php echo ($hora+1);?>  />Hs
                      </div>
                      <br>
                      <br>
                      
                      <div align="center">
                        <input type="button" class="btn" value="Crear" onclick=ticket(); >
                      </div>
                      
                      
                    </bockquote>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!--==============================
                footer
                =================================-->
                <div id="footer">
                  <div class="container">
                    <div class="row">
                      <div class="grid_12"> 
                        <div class="copyright">
                         <span class="brand">APP SL PARKING</span> &copy; <span id="copyright-year"></span> | UNSL
                         <div class="sub-copy">Imperiale Juan Pablo</div>
                       </div>
                     </div>
                   </div>
                 </div>  
               </div>
             </body>
             </html>
