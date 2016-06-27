<!doctype html>


<header class="clearfix" ng-controller="TiendaCrtl"> 
    
    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
      <div class="container-fluid">
        <div class="navbar-header"> 
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
          <!-- End Toggle Nav Link For Mobiles --> 
          <a class="navbar-brand" href="#/index.php"> <img alt="" src="tema/images/logo.png"> </a> </div>
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
            <li><a href="#/login">Inicia Sesi&oacute;n</a> </li>
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
        <li><a href="#/login">Inicia Sesion</a> </li>
      </ul>
      <!-- Mobile Menu End --> 
      
    </div>
    <!-- End Header Logo & Naviagtion --> 
    
  </header>	
<!-- Full Body Container -->
<div id="container">
  
  <!-- Start Home Page Slider -->
  <section id="inner01"> 
    <!-- Carousel -->
    <div id="main-slide" class="carousel00 ver-evento slide" data-ride="carousel">
      <div class="item active"> 
        <img class="img-responsive2 tienda1" src="tema/images/inner-banner01.jpg" alt="slider">
        <div class="slider-content">
          
          <div class="container-fluid">
              <div class="col-md-12 text-center xs1">
                <h2 style="margin-top: 0px !important;">¿Qu&eacute; necesitas para tu evento?</h2>
                <h3 class="help-block">ENCUENTRA LO QUE NECESITAS EN EL BUSCADOR</h3>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-lg-offset-1 top_10">
                <select class="form-control">
                  <option>Seleccione Categor&iacute;a </option><option value=1>aseo</option><option value=2>general</option><option value=3>comida</option>                </select>
              </div>

              <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 top_10">
                <select class="form-control">
                  <option>FILTRAR POR</option>
                </select>
              </div>

              <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 top_10">
                <input type="text" placeholder="CIUDAD" class="form-control">
              </div>

              <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12 top_10">
                <a class="btn cargar_ btn_search_products hidden-xs hidden-sm">Buscar</a>
                <a class="btn cargar_ btn-block btn_search_products hidden-md hidden-lg ">Buscar</a>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col-lg-offset-1 top_10">
                  <a href="#/login/" class="btn cargar_ btn-block"><i class="fa fa-shopping-basket"></i> Mi carrito</a>
                                </div>
          </div><!--row-->

        </div>
      </div>
    </div>
    <!-- /carousel --> 
  </section>
  <!-- End Home Page Slider -->
  <div class="section destacados" style="background:#f2f2f2;">
    <div class="container container-update"> 
      
      <!-- Start Team Members -->
      <div class="row">
                <div class="big-title text-center">
            <h1>mira algunos productos <span>destacados</span></h1>
            <p class="text-center">Estos son los productos y servicios destacados</p>
          </div>
             <!--         
          <div class="col-md-4 col-sm-6 col-lg-3">
              <div class="team-member modern">
                <a href="#/producto/v/6">
                  <div class="member-photo imgevent" style="background-image: url('#/tema/images/system_imgs/694d16d6d131d837d05b07a5228760fb8462bee5b2d7bd2066silla_1.jpg');background-size: 100% 100%;">
                    <div class="member-name color02"><span>general</span> </div>
                  </div>
                </a>
                <div class="member-info">
                  <h2><a href="#/producto/v/6"> Sillas </a></h2>
                </div>  
                <div class="member-socail"> <p class="txt_money">300,000 COP</p> <a class="link-button" href="#/tema/producto/v/6">ver m&aacute;s</a> </div>
              </div>
            </div>
          -->
                        <div class="col-md-4 col-sm-6 col-lg-3">
              <div class="team-member modern">
                <a href="#/producto/v/6">
                  <div class="member-photo imgevent" style="background-image: url('tema/images/system_imgs/16fd905c965810968055ff58b0deeb7de372c092d41a399140brooms_botom.jpg');background-size: 100% 100%;">
                    <div class="member-name color01"><span>aseo</span> </div>
                  </div>
                </a>
                <div class="member-info">
                  <h2><a href="#/producto/v/6"> Escobas</a></h2>
                </div>  
                <div class="member-socail"> <p class="txt_money">20,000 COP</p> <a class="link-button" href="#/producto/v/6">ver m&aacute;s</a> </div>
              </div>
            </div>
                  </div>
      <!-- End Team Members --> 
    </div>
    <!-- .container --> 
  </div>
    
  <div class="section purchase crowdfunding">
    <div class="container"> 
      <div class="section-video-content text-center"> 
        <!-- Start Animations Text -->
        <h3 class="h31">CREA TU PROPIO <span>EVENTO</span></h3>
        <p class="help-block">Voy A Todo te d&aacute; las herramientas necesarias para que puedas hacer toda<br />
         la gesti&oacute;n de tu eventos en su s&oacute;lo lugar</p>
        <!-- End Animations Text -->
        <div class="eventos-list eventos-list00"> <a class="eventos" href="#/login/">crear mi evento</a> </div>
      </div>
    </div>
    <!-- .container --> 
  </div>  
  
  
  
  

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
              <li><a href="#/inicio">Inicio</a></li>
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
         <!-- <img src="#/tema/images/designby.png"> -->
      </div>
    </div>
  </footer>	
	<!-- Full Body Container -->
	<!--<div id="container">
		<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
		<div id="loader">
		  <div class="spinner">
		    <img src="#/tema/images/logo.png">
		  </div>
		</div>
		<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		</script> 
		<script type="text/javascript" src="#/tema/js/script.js"></script>
	</div>
 -->

