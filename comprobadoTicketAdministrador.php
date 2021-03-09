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
  <script src="js/ticket.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.mobilemenu.js"></script>
  <script src="js/tmStickUp.js"></script>
  <script src="js/jquery.ui.totop.js"></script>
  <script src="js/TMForm.js"></script>
  <script src="js/modal.js"></script>
  <script>
  $(window).load(function()
  {
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
                	
                	<h2 align="center">  <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">&Uacute;ltimo Ticket Vigente </font>
                  </h2>
                  
                  

                  <form action="guarda_ticket.php" id="nuevoticket" name="nuevoticket" method="POST">
                   <blockquote class="bq1"> 

                    <h5 align="center">
                      <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">
                        <?php echo ("<strong>Inspector a cargo:</strong> ".$_SESSION["usuarioAdm"]);echo " <br>  ";  ?>
                        <?php echo ("<strong>Usuario:</strong> ".$_SESSION["usuario"]);echo " <br>  ";  ?>
                        <?php echo ("<strong>Patente:</strong> ".$_SESSION["patente"]);echo " <br>  ";  ?>
                        <?php echo ("<strong>Saldo:</strong> $".$_SESSION["saldo"]); echo " <br>  "; ?>
                        <?php echo ("<strong>Zona Seleccionada:</strong> ".$_SESSION["zona"]); echo " <br>  "; ?>
                        <?php echo ("<strong>Fecha:</strong> ".$_SESSION["fecha"]); echo " <br>  "; ?>
                        <?php echo ("<strong>Hora Inicio:</strong> ".$_SESSION["horaInicio"]."hs"); echo " - - "; ?>
                        <?php echo ("<strong>Hora Fin:</strong> ".$_SESSION["horaFin"]."hs"); echo " <br>  "; ?>
                        <?php echo ("<strong>Hora de Creaci&oacute;n:</strong> ".$_SESSION["horacreacion"].":".$_SESSION["minutocreacion"]."hs"); echo " <br>  "; ?>


                      </font>
                    </h5>

                    
                  </bockquote>
                  
                </form>

                
                <div align="center">
                  <a href ="reporteAdministrador.php"> <input type="button" class="btn" value="Reportar" > </a>
                  <a href ="inspector.php"> <input type="button" class="btn" value="Inicio" > </a>
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
