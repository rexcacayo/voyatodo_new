<!doctype html>

<header class="clearfix"> 
    
    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
      <div class="container-fluid">
        <div class="navbar-header"> 
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
          <!-- End Toggle Nav Link For Mobiles --> 
          <a class="navbar-brand" href="#/inicio"> <img alt="" src="tema/images/logo.png"> </a> </div>
        <div class="navbar-collapse collapse"> 
          <!-- Stat Search -->
          <div class="search-side"> <a class="show-search"><i class="fa fa-search"></i></a>
            <div class="search-form">
              <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                <input type="text" value="" name="s" id="s" placeholder="Search the site...">
              </form>
            </div>
          </div>
          <!-- End Search --> 
          <!-- Start Navigation List -->
          <ul class="nav navbar-nav navbar-right">
            <li> <a class="active" href="#/inicio">Inicio</a></li>
            <li><a href="#/tienda">Tienda</a> </li>
            <li><a href="#/patrocinador">Patrocinador</a> </li>
            <li><a href="#/proveedor">Proveedor</a> </li>
            <li><a href="#/contact">Contacto</a></li>
            <li><a href="#/inicio">Inicia Sesi&oacute;n</a> </li>
          </ul>
          <!-- End Navigation List --> 
        </div>
      </div>
      
      <!-- Mobile Menu Start -->
      <ul class="wpb-mobile-menu">
        <li> <a class="active" href="#/inicio">Inicio</a>
        </li>
        <li><a href="#/tienda">Tienda</a> </li>
        <li><a href="#/patrocinador">Patrocinador</a> </li>
        <li><a href="#/proveedor">Proveedor</a> </li>
        <li><a href="#/contact">Contacto</a></li>
        <li><a href="#/inicio">Inicia Sesion</a> </li>
      </ul>
      <!-- Mobile Menu End --> 
      
    </div>
    <!-- End Header Logo & Naviagtion --> 
    
  </header>	
<!-- Contenido de la página -->

<div class="section destacados">
  <div class="container container-update"> 
    <div class="row">
      <div class="text-center">
        <form id="contact" action="#/contact" method="post">
<input type="hidden" name="_csrf" value="UlljRjV5TFUHHSwNGDIvMn8wLnUFDSQ3JysxPw1UNRF/GjMBXEoJOA==">          <h2 class="ttlwhite">CONTACTANOS</h2>
          <h3 class="ttlwhite">Desde aqu&iacute; puedes enviarnos mensajes</h3>
        </div> 

        <div class="col-md-6 col-md-offset-3">
          <div class="logi-box logicontact">
            <h3>CONTACTO</h3>
            <div class="form-group">
              <div class="controls top">
                <label>NOMBRE</label>    
                <div class="form-group field-contact-name required">

<input type="text" id="contact-name" class="form-control" name="Contact[name]" placeholder="Ingrese su nombre">

<div class="help-block"></div>
</div>              </div>
            </div>
            <div class="form-group">
              <div class="controls">
                <label>CORREO</label>
                <div class="form-group field-contact-email required">

<input type="email" id="contact-email" class="form-control event-name" name="Contact[email]" placeholder="jsonde@hotmail.com">

<div class="help-block"></div>
</div>              </div>
            </div>
            <div class="form-group">
              <div class="controls">
                <label>MENSAJE</label>    
                <div class="form-group field-contact-body required">

<input type="textarea" id="contact-body" class="form-control event-name" name="Contact[body]" placeholder="Ingrese su mensaje">

<div class="help-block"></div>
</div>              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 top">
                <center>
                  <a id="message" class="btn btn-yellow btn-block send_message" >ENVIAR MENSAJE</a>
                </center>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <!-- End Team Members --> 
    </div>
    <!-- .container --> 
  </div>

  
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script>
    $(document).ready(function(){
      $("#message").click(function(){
        $("#contact").submit();
      });
    });
  </script>	<footer>
    <div class="container">
      <div class="row footer-widgets">
        <div class="col-md-3 col-xs-12">
          <div class="footer-logo"> <img alt="" src="tema/images/logo.png" /> </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="footer-widget footer-widget01">
            <h4 class="ul-footer">Voy a Todo</h4>
            <ul class="ul-footer">
              <li><a href="#/">Inicio</a></li>
              <li><a href="#/tienda">Tienda</a></li>
              <li><a href="#/patrocinador">Patrocinador</a></li>
              <li><a href="#/login">Registro</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-xs-12">
          <div class="footer-widget footer-widget01">
            <h4 class="ul-footer">Legal</h4>
            <ul class="ul-footer">
              <li><a href="#">Terminos de servicio</a></li>
              <li><a href="#">Politicas de Privacidad</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="footer-widget footer-widget01">
            <h4 class="ul-footer">Soporte</h4>
            <ul class="ul-footer">
              <li><a href="#">Contactenos</a></li>
              <li><a href="#">Preguntas</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="footer-widget footer-widget01">
            <h4 class="ul-footer">Conectate</h4>
            <ul class="ul-footer">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Google +</a></li>
              <li><a href="#">youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="main-footer">
        <strong><center class="copy"> Copyright &copy; HAZLO TUYO SAS. Design by CRIZZ Agencia Digital</center></strong>
         <!-- <img src="web/images/designby.png"> -->
      </div>
    </div>
  </footer>	
	<!--
<script src="web/assets/1162a20a/jquery.js"></script>
<script src="web/assets/a2d710a7/yii.js"></script>
<script src="web/assets/a2d710a7/yii.validation.js"></script>-->