<?php
session_start();
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<html lang="en">
<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

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
  <script src="js/validarmail.js"></script>
  <script src="js/superfish.js"></script>
  <script src="js/jquery.equalheights.js"></script>
  <script src="js/jquery.mobilemenu.js"></script>
  <script src="js/tmStickUp.js"></script>
  <script src="js/jquery.ui.totop.js"></script>
  <script src="js/TMForm.js"></script>
  <script src="js/modal.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSKHmA-Hh_9reGNi0cTOTDGj_zd7b2Ahg"></script>

  <script>
  $(window).load(function(){
    $().UItoTop({ easingType: 'easeOutQuart' });
    $('#stuck_container').tmStickUp({});  
  }); 
  </script>
  <style>
  #map
  {
    width: 100%;
    height: 300px;
    border: 1px solid #d0d0d0;
  }

  </style>


      <!--=====================
      Procesamiento de mapa 
      ======================-->
      <script>
      var LL;
      var TT;
      function localize()
      {
        if (navigator.geolocation)
        {
          navigator.geolocation.getCurrentPosition(mapa,error);
        }
        else
        {
          alert('Tu navegador no soporta geolocalización.');
        }
      }

      function mapa(pos)
      {
        /************************ Aqui están las variables que te interesan***********************************/
        var latitud = pos.coords.latitude;
        var longitud = pos.coords.longitude;
        var precision = pos.coords.accuracy;
        LL=latitud;
        TT=longitud;
        document.getElementById("LAT").value = LL;
        document.getElementById("LON").value = TT;

        var contenedor = document.getElementById("map")

        var centro = new google.maps.LatLng(latitud,longitud);

        var propiedades =
        {
          zoom: 15,
          center: centro,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(contenedor, propiedades);

        var marcador = new google.maps.Marker({
          position: centro,
          map: map,
          title: "Tu posición actual"
        });

      }

      function error(errorCode)
      {
        if(errorCode.code == 1)
          alert("No has permitido buscar tu localizacion")
        else if (errorCode.code==2)
          alert("Posición no disponible")
        else
          alert("Ha ocurrido un error")
      }
      function onclickhandler() {
        document.getElementById("LAT").value = LL;
        document.getElementById("LON").value = TT;
      }

      </script>

    </head>
    <body onLoad="localize()">
      <!--==============================
       http://maps.google.es/?ie=UTF8&ll=-19.435514,48.603516&spn=17.554213,29.882813&z=5&om=1
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
                <section id="content"><div class="ic"></div>
                  <div class="container">
                    <div class="row">
                      <div class="grid_12">
                        <h1>Google Maps Geoposicionamiento</h1>
                        <div id="map" ></div>

                        <form action="enviarPanico.php" id="panico" name="panico" method="get">


                          <input name="LAT" id="LAT" type="hidden" runat="server" value="LL"/>
                          <input name="LON" id="LON" type="hidden" runat="server" value="TT"/>

                          <input type="submit" title="submit" value="Alertar" class="btn"  >
                          <a href ="./inspector.php"> <input type="button" class="btn" value="Inicio" > </a>

                        </form>

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