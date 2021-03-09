<?php
session_start();
$_SESSION["usuario"]='';
$_SESSION["patente"]='';
$_SESSION["saldo"]='';
$_SESSION["fecha"]='';
$_SESSION["zona"]='';
$_SESSION["horaInicio"]='';
$_SESSION["horaFin"]='';
$administrador= $_SESSION["usuarioAdm"];
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
    <script src="js/validarPatente.js"></script>
    <script src="js/superfish.js"></script>
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
</head>
<body>
  <!--==============================
                header
                =================================-->
                <div class='header2'>
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
                    <div v class="navigation ">
                      <nav>
                        <ul class="sf-menu">
                         <li><a href="index.html">Inicio</a></li>
                         <li><a href="informacion.html">Informaci&oacuten</a></li>
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
            <section id="content"><div class="ic"></div>

              <div class="container">
                <div class="row">
                  <div class="grid_12">
                   <br><br>
                   <div>
                    <h2 align="center">  <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">Men&uacute; Principal</font>
                    </h2>
                    <h4 align="center">  <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">Inspector: <?php echo ($administrador);?></font>
                    </h4>
                    <section class="page1_header" aling="center">
                      <div  id="contact-form">
                        <div class="container">
                          <div class="row">
                            <div class="grid_4">
                            </div>
                            <div class="grid_4">
                              <a href="inspectorPatente.html" class="banner "><div class="maxheight">
                                Consultar Patente</div>
                              </a>
                              <a href="enviarReporteGeneral.php" class="banner "><div class="maxheight">
                                Genenar Reporte</div>
                              </a>
                              <a href="ticketAdministrador.php" class="banner "><div class="maxheight">
                                Generar Ticket</div>
                              </a>
                              <a href="panico.php" class="banner "><div class="maxheight">
                                P&aacute;nico</div>
                              </a>
                            </div>
                          </div>
                          
                        </div>
                        
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
  <!--==============================
                footer
                =================================-->
                <footer id="footer">
                  <div class="container">
                    <div class="row">
                      <div class="grid_12"> 
                        <div class="copyright"><span class="brand">APP SL PARKING</span> &copy; <span id="copyright-year"></span> | UNSL
                          <div class="sub-copy">Imperiale Juan Pablo</div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </footer>
                <a href="#" id="toTop" class="fa fa-chevron-up"></a>
              </body>
              </html>
