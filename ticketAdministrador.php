<?php
session_start();
extract($_GET);
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
    <script src="js/valizarTicketInspector.js"></script>
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
    
    
  <!--++[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
     </a>
  </div>
  <![endif]-->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <link rel="stylesheet" media="screen" href="css/ie.css">
  <![endif]-->
  <?php 
  $fecha=getdate();
  $hora=$fecha['hours'];
  $dia=$fecha['mday'];
  $mes=$fecha['mon'];
  $anio=$fecha['year'];
  ?>
  <script>
  var global=<?echo $dia;?>
  </script>
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
                           <li><a href="index.html">Inicio</a></li>
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
                  	
                  	<h2 align="center">  <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">Ticket Inspector</font></h2>
                  	<h4 align="center"><?php echo ("Inspector: ".$_SESSION["usuarioAdm"]); ?> </h4>

                     <div>

                      <div id="contact-form" aling="center">
                        <form action="guarda_ticketInspector.php" id="nuevoticket" name="nuevoticket" method="POST">
                         <blockquote class="bq1"> 
                         <br>
                          <div align="center">
                            <label >
                            <input type="text" name="patente" placeholder="Ingrese una Patente:" value="" id="patente"/>
                            </label>
                          </div>
                        </br>
                        <br>
                      </br>
                          <br>
                          <div align="center">
                            <?php echo ("<strong>Fecha:</strong>  ".$dia."/".$mes."/".$anio); ?>
                          </div>
                          </br>
                          <div align="center">
                            <?php echo ("<strong>Selecciones el per&iacute;odo de Estacionamiento</strong> " ); ?>
                          </div>
                          <br>
                          <div align="center">
                          <strong>Desde:</strong>  <input type="number" name="horaInicio" min=<?php echo ($hora) ?> value=<?php echo ($hora) ?>  max="24"id="horaInicio"/> Hs
                          </div>
                          </br>
                          <div align="center">
                          <strong>Hasta:</strong>  <input type="number" name="horaFin" min=<?php echo ($hora+1) ?> value=<?php echo ($hora+1) ?> max="24" id="horaFin"/>Hs
                          </div>
                          <br>
                          <div align="center">
                          <strong> Zona:</strong> <input type="number" max="8" id="zona" name="zona" min="1" value="1"/> 
                          </div>
                          <div align="center">
                            <input type="button" class="btn" value="Crear" onclick=ticket(); >
                            <a href ="./inspector.php"> <input type="button" class="btn" value="Inicio" > </a>
                          </div>
                        </bockquote>
                      </form>
                    </div>
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
