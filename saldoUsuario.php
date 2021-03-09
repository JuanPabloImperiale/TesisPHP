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
        <script src="js/jquery.equalheights.js"></script>
        <script src="js/jquery.mobilemenu.js"></script>
        <script src="js/tmStickUp.js"></script>
        <script src="js/jquery.ui.totop.js"></script>
        <script src="js/TMForm.js"></script>
        <script src="js/ios-orientationchange-fix.min.js"></script>
        <script>
        $(window).load(function(){
          $().UItoTop({ easingType: 'easeOutQuart' });
          $('#stuck_container').tmStickUp({});  
        }); 
        </script>
        <style>
        img[usemap]{
          border: none;
          height: auto;
          max-width: 100%;
          width: auto;

        }

        </style>

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
                        <div class="navigation ">
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

                        <a href ="./prestamosAmigo.php"> <input type="button" class="btn" value="Pr&eacute;stamo Amigo" > </a>  
                        <h3 align="center"><?php echo ("Usuario: ".$_SESSION["usuario"]); echo " <br>  "; ?>
                          <?php echo ("Patente: ".$_SESSION["patente"]);echo " <br>  ";  ?><?php echo ("Saldo: $".$_SESSION["saldo"]); 
                          ?>
                        </h3>

                        <h2 align="center">  <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">Lugares Disponibles para cargar saldo</font></h2>
                      </div>
                    </div>
                    
                    <div>
                     <img src="./images/MapaSl1_tokens.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />


                   </div>

                   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                   <script src="js/jquery.rwdImageMaps.min.js"></script>


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