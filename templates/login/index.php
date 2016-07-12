<header class="clearfix" ng-controller="LoginCrtl"> 
    
    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
      <div class="container-fluid">
        <div class="navbar-header"> 
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
          <!-- End Toggle Nav Link For Mobiles --> 
          <a class="navbar-brand" href="../"> <img alt="" src="tema/images/logo.png"> </a> </div>
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
                      <li> <a class="active" href="#/index.php">Inicio</a></li>
                    <li><a href="#/tienda">Tienda</a> </li>
                    <li><a href="#/patrocinador">Patrocinador</a> </li>
                    <li><a href="#/proveedor">Proveedor</a> </li>
                    <li><a href="#/contact">Contacto</a></li>
                    <li><a href="#/login">Inicia Sesi&oacute;n</a> </li>
                  </ul>
          <!-- End Navigation List --> 
        </div>
      </div>
      
      <!-- Mobile Menu Start -->
      <ul class="wpb-mobile-menu">
        <li> <a class="active" href="../">Inicio</a>
        </li>
        <li><a href="#/tienda">Tienda</a> </li>
        <li><a href="#/patrocinador">Patrocinador</a> </li>
        <li><a href="#/proveedor">Proveedor</a> </li>
        <li><a href="#/contacto">Contacto</a></li>
        <li><a href="#/login">Inicia Sesion</a> </li>
      </ul>
      <!-- Mobile Menu End --> 
      
    </div>
    <!-- End Header Logo & Naviagtion --> 
    
  </header>	<div id="container-login">
  <!-- Start Home Page Slider -->
  <section id="login-pages"> 
    <!-- Carousel -->
    <div id="main-slide0" class="carousel00 slide">
      <div class="item01">
        <div class="slider-content0">
          <div class="col-md-12 text-center">
            <h2 class="animated2"> <span>Comienza Ahora!</span> </h2>
            <h3 class="animated3"> <span>publica y gestiona tus eventos en minutos</span> </h3>
            <div class="col-md-4 hidden-xs"> </div>
            <div class="col-md-4">
              <div class="logi-box">
                <h3>INGRESAR</h3>
                <form id="login-user" name="user_login">
<input type="hidden" name="_csrf" value="bWh0SHNXWUE4LDsDXhw6JkABOXtDIzEjGBomMUt6IAVAKyQPGmQcLA==">                  <div class="form-group">
                    <div class="controls">
                      <label>E-MAIL</label>    
                      <div class="form-group field-loginform-username required">

<input type="email" id="loginform-username" class="email requiredField" name="user_email" ng-model="data.user_email" placeholder="johnsmith@mymail.com">

<div class="help-block"></div>
</div>                    </div>
                  </div>
                  <div class="form-group">
                    <div class="controls">
                      <label>CONTRASE&Ntilde;A</label>
                      <div class="form-group field-loginform-password required">

<input type="password" id="loginform-password" class="email" name="user_pass" ng-model="data.user_pass" placeholder="•••••••••••••••••••••">

<div class="help-block"></div>
</div>                    </div>
                  </div>
                  <button type="submit" id="submit" class="btn-system01" ng-click="login()">INGRESAR</button>
                </form>
                  <div id="success" style="color:#34495e;"></div>
                  <p class="link-button0"><a href="#/recuperar">&iquest;Olvidaste tu contrase&ntilde;a?</a></p>
                  <p class="text-list"> Ingresa con tu red social favorita </p>
                  <div class="social-auth-links text-center text-social">
                      
                      
                      <div id="w0" class="auth-clients" ><ul class="auth-clients clear"><li class="auth-client"><a class="auth-link google" href="" ng-click=""><i class="margin fa fa-google"></i><span class="auth-title" >Google</span></a></li>
                              <li class="auth-client" ><a class="auth-link facebook" href="" ng-click=""><i class="margin fa fa-facebook"></i><span class="auth-title">Facebook</span></a></li></ul></div> 
                 </div>
                  
                  <p class="title-n">&iquest;ERES NUEVO?</p>
                  <p><span>Reg&iacute;strate y obt&eacute;n tu cuenta gratis
                    y empieza a crear y gestionar eventos.</span></p>
                   
                  <div class="re-link"> <a href="#/registro">REGISTRARME</a> </div>
                   <div class="g-signin2" data-onsuccess=""></div>
                    
              </div>
              <div class="descarga-box">
                <p>Descarga la app:</p>
                <p class="animated5"><a href="#" class="app">app</a> &nbsp; <a href="#" class="an">an</a> </p>
              </div>
            </div>
            <div class="col-md-4 hidden-xs"> </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /carousel --> 
  </section>
  <div class="clearfix"></div>
</div> 
<footer>
    <div class="container">
      <div class="row footer-widgets">
        <div class="col-md-3 col-xs-12">
          <div class="footer-logo"> <img alt="" src="tema/images/logo.png" /> </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="footer-widget footer-widget01">
            <h4 class="ul-footer">Voy a Todo</h4>
            <ul class="ul-footer">
              <li><a href="../">Inicio</a></li>
              <li><a href="../tienda">Tienda</a></li>
              <li><a href="../patrocinador">Patrocinador</a></li>
              <li><a href="../login">Registro</a></li>
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
         <!-- <img src="../tema/images/designby.png"> -->
      </div>
    </div>
  </footer>	
	