<header class="clearfix" ng-controller="LoginRegistroCrtl"> 
    
    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
      <div class="container-fluid">
        <div class="navbar-header"> 
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
          <!-- End Toggle Nav Link For Mobiles --> 
          <a class="navbar-brand" href="#/"> <img alt="" src="tema/images/logo.png"> </a> </div>
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
          <!--MENU -->
                  <ul class="nav navbar-nav navbar-right">
                      <li> <a class="active" href="#/index.php">Inicio</a></li>
                    <li><a href="#/tienda">Tienda</a> </li>
                    <li><a href="#/patrocinador">Patrocinador</a> </li>
                    <li><a href="#/proveedor">Proveedor</a> </li>
                    <li><a href="#/contact">Contacto</a></li>
                    <li><a href="#/login">Inicia Sesi&oacute;n</a> </li>
                  </ul>
                  <!-- FIN MENU --> 
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
        <li><a href="#/contact/">Contacto</a></li>
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
              <h3>REGISTRARME</h3>
              <form id="signInForm" name="User_Form">
                    
                    <div class="col-md-6">
                        <div class="checkbox" style="z-index: 9;">
                            <input type="radio" name="user_type" id="inputs" ng-model="data.user_type" ng-change="visibilityP()" value="1" class="inputradio type_user" checked="checked" > 
                                <span class="inputfalso"> 
                                    <label class="lbl_radio">
                                        PERSONA
                                    </label> 
                                </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="checkbox" style="z-index: 9;">
                            <input class="inputradio type_user" name="user_type" type="radio" value="2" ng-change="visibility()" ng-model="data.user_type">
                                <span class="inputfalso"></span>
                                    <span class="lbl_radio">
                                        EMPRESA
                                    </span>
                        </label>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="checkbox" style="z-index: 9;">
                            <input type="radio" name="user_rol" ng-model="data.user_rol" value="3" class="inputradio">
                                <span class="inputfalso">
                                    <label class="lbl_radio">
                                        COMPRADOR
                                    </label>
                                </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="checkbox" style="z-index: 9;">
                            <input class="inputradio " name="user_rol" ng-model="data.user_rol" type="radio" value="2">
                                <span class="inputfalso">
                                </span>
                                    <span class="lbl_radio">
                                        PATROCINADOR
                                    </span>
                        </label>
                    </div>
                <div class="col-md-6">
                    
                </div>

                <div class="col-md-6">
                    <label class="checkbox" style="z-index: 9;">
                        <input class="inputradio" name="user_rol" ng-model="data.user_rol" type="radio" value="4">
                            <span class="inputfalso">
                            </span>
                            <span class="lbl_radio">
                                PROVEEDOR
                            </span>
                    </label>
                </div>

                   
              <input type="hidden" value="1" name="FormUserRegister[type]" class="user_type">
              <div class="form-group">
                <div class="controls">
                <label>NOMBRE</label>    
                <div class="form-group field-formuserregister-username ">

                    <input type="text" id="inputs" class="email requiredField" name="user_name" ng-model="data.user_name" placeholder="Jhon" tema>
                    
<div class="help-block"></div>
</div>                </div>
              </div>
              <div ng-show="apellidovisibility">
              <div class="opt_people">
                <div class="form-group">
                  <div class="controls">
                    <label>APELLIDO</label>
                    <div class="form-group field-formuserregister-last_name">

<input type="text" id="inputs" class="email temaField last_name" name="user_lastname" ng-model="data.user_lastname" placeholder="Smith">

<div class="help-block"></div>
</div>                    <div id="error1" style="color:#A94452;"></div>
                  </div>
                </div>
              </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <label>E-MAIL</label>    
                  <div class="form-group field-formuserregister-email tema">

<input type="email" id="inputs" class="email requiredField" name="user_email" ng-model="data.user_email" placeholder="johnsmith@mymail.com" >

<div class="help-block"></div>
</div>                </div>
              </div>
              
              <div class="opt_people">
                <div ng-show="contrasenavisibility">
                <div class="form-group">
                  <div class="controls">
                    <label>CONTRASE&Ntilde;A</label>
                    <div class="form-group field-formuserregister-password">

<input type="password" id="inputs" class="email password" name="user_pass" ng-model="data.user_pass" placeholder="•••••••••••••••••••••" >

<div class="help-block"></div>
</div>                    <div id="error2" style="color:#A94452;"></div>
                  </div>
                </div>
                  </div>
                  <div ng-show="telf1visibility">
                <div class="form-group">
                  <div class="controls">
                    <label>TEL&Eacute;FONO 1</label>
                    <div class="form-group field-formuserregister-user_phone1">

<input type="text" id="inputs" class="email user_phone1" name="user_telf1" ng-model="data.user_telf1" placeholder="312 338 3515">

<div class="help-block"></div>
</div>                    <div id="error4" style="color:#A94452;"></div>
                  </div>
                </div>
                    </div>
                  <div ng-show="ccontrasenavisibility">
                <div class="form-group">
                  <div class="controls">
                    <label> CONFIRMAR CONTRASE&Ntilde;A</label>
                    <div class="form-group field-formuserregister-password_repeat">

<input type="password" id="inputs" class="email password_repeat" name="user_confpass" ng-model="data.user_confpass" placeholder="•••••••••••••••••••••">

<div class="help-block"></div>
</div>                    <div id="error3" style="color:#A94452;"></div>
                  </div>
                </div>
                      
                  </div>
                  <div ng-show="btmregistrovisibility">
                  <button type="submit"  id="submit" class="btn-system01" ng-click="create()">CREAR CUENTA</button>
                  </div>
                   <div ng-show="telf2visibility">  
                <div class="form-group">
                  <div class="controls">
                    <label>TEL&Eacute;FONO 2</label>
                    <div class="form-group field-formuserregister-user_phone2">

<input type="text" id="inputs" class="email user_phone2" name="user_telf2" ng-model="data.user_telf2" placeholder="Opcional">

<div class="help-block"></div>
</div>                    <div id="error5" style="color:#A94452;"></div>
                  </div>
                </div>
                  
                
                  
                <div ng-show="btmsolicitarvisibility">
                <button type="submit"  id="submit" class="btn-system01" ng-click="create()">SOLICITAR CUENTA</button>
                  </div>     
                <div id="success" style="color:#A94452;"></div>
              </div>
              
              
              <div class="opt_company hidden">
               
                </div>  
                 
                <div id="success_1" style="color:#A94452;"></div>
              </div>
              
              </form>              </div>
              <p>
                <span style="color:#FFFFFF"> 
                  Al hacer click en "Crear cuenta" confirmo que he le&iacute;do y he aceptado los
                  <a class="text-register"  href="#">T&eacute;rminos y condiciones</a> y la 
                  <a class="text-register" href="#">Pol&iacute;tica de privacidad</a> de VOY A TODO    
                </span>
              </p>
              
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
         <!-- <img src="../tema/images/designby.png"> -->
      </div>
    </div>
  </footer>	
<script>
    function LoginRegistroCrtl($scope){
        $scope.data.user_type=1;
        $scope.data.user_rol=1;
    };
</script>	
