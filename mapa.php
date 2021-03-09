<?php
session_start();
//extract($_GET);
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
                     </div> 
                   </div> 
                 </section>
                 </div>
                <section id="content"><div class="ic"></div>
                  <div class="container">
                    <div class="row">
                      <div class="grid_12">
                       <br><br>
                       <div>
                        <h3 align="center">  <font face="Gotham, Helvetica Neue, Helvetica, Arial, sans-serif">Selecciona tu Zona en el Mapa </font></h3>

                        <h5 align="center"><?php echo ("<strong>Usuario:</strong> ".$_SESSION["usuario"]); echo " <br>  "; ?>
                          <?php echo ("<strong>Patente:</strong> ".$_SESSION["patente"]);echo " <br>  ";  ?><?php echo ("<strong>Saldo:</strong> $".$_SESSION["saldo"]); 
                          ?>
                        </h5>
                      </div>
                    </div>
                    <div aling="center">
                      <h3 class="head__1">Cantidad de Usuarios Activos</h3>
                      <table  bordercolor="#000000" aling="center">

                       <tr>
                         <td align="center">
                           <img src="./images/1.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                         </td>
                         <td align="center">
                          <img src="./images/2.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                        </td>
                        <td align="center">
                         <img src="./images/3.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                       </td>
                       <td align="center">
                         <img src="./images/4.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                       </td>
                       <td align="center">
                         <img src="./images/5.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                       </td>
                       <td align="center">
                         <img src="./images/6.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                       </td>
                       <td align="center">
                         <img src="./images/7.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                       </td>
                       <td align="center">
                         <img src="./images/8.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />
                       </td>
                     </tr>
                     <tr>
                       <td align="center">
                        <?php
                        
                        echo$_SESSION["v1"];

                        ?>
                      </td>
                      <td align="center">
                        <?php

                        echo$_SESSION["v2"];

                        ?>
                      </td>
                      <td align="center">
                       <?php

                       echo$_SESSION["v3"];
                       ?>
                     </td>
                     <td align="center">
                       <?php

                       echo$_SESSION["v4"];

                       ?>
                     </td>
                     <td align="center">
                       <?php

                       echo$_SESSION["v5"];

                       ?>
                     </td>
                     <td align="center">
                       <?php

                       echo$_SESSION["v6"];

                       ?>
                     </td>
                     <td align="center">
                       <?php

                       echo$_SESSION["v7"];

                       ?>
                     </td>
                     <td align="center">
                       <?php

                       echo$_SESSION["v8"];
                       ?>
                     </td>
                   </tr>


                 </table>

               </div>
               <div>
                 <img src="./images/MapaSl1 2.jpg" usemap="#mapa_zonas" alt="Mapa de San Luis" />

                 <map  name="mapa_zonas" >

                  <area shape="polygon" coords="282,92,332,317,542,291,491,66" href="destino.php?variable1=1&valor=10" />
                  <area shape="polygon" coords="76,416,349,408,386,558,124,620" href="destino.php?variable1=2&valor=10" />
                  <area shape="polygon" coords="396,564,436,720,567,680,550,600,681,565,669,508" href="destino.php?variable1=5&valor=10" />
                  <area shape="polygon" coords="437,726,629,676,669,880,489,915" href="destino.php?variable1=7&valor=10"/>
                  <area shape="polygon" coords="331,322,546,298,596,512,396,557" href="destino.php?variable1=3&valor=10" />
                  <area shape="polygon" coords="547,298,597,515,776,466,721,277" href="destino.php?variable1=4&valor=10" />
                  <area shape="polygon" coords="705,641,803,625,800,543,774,479,682,506" href="destino.php?variable1=6&valor=10" />
                  <area shape="polygon" coords="674,879,631,671,804,633,854,851" href="destino.php?variable1=8&valor=10" />
                </map>
              </div>

              <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
              <script src="js/jquery.rwdImageMaps.min.js"></script>
              <script>
              $(document).ready(function(e) {
                $('img[usemap]').rwdImageMaps();

                $('area').on('click', function() {
                //alert($(this).attr('alt') + ' clicked');
              });
              });
              </script>

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