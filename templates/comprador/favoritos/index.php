<!doctype html>
<header class="clearfix" ng-controller="FavoritosCrtl"> 
    <div class="navbar navbar-default navbar-top">
      <div class="container-fluid">
        <div class="navbar-header"> 
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
          <!-- End Toggle Nav Link For Mobiles --> 
          <a class="navbar-brand" href="#/inicio"> <img alt="" src="tema/images/logo.png"> </a> </div>
        <div class="navbar-collapse collapse mn"> 
          <!-- Stat Search -->
          <div class="search-side"> <a class="show-search"><i class="fa fa-search"></i></a>
            <div class="search-form">
              <form autocomplete="off" role="search" method="post" class="searchform" action="#">
                <input type="text" value="" name="s" id="s" placeholder="Search the site...">
              </form>
            </div>
          </div>
          <!-- End Search --> 
          <!-- Start Navigation List -->
          <ul class="nav navbar-nav navbar-right">
            <li> <a class="active" href="#/inicio_comprador">Inicio</a></li>
            <li><a href="#/comprador_tienda">Tienda</a> </li>
            <li><a href="#/miseventos">Mis eventos</a> </li>
            <li><a href="#/mistickets">Mis entradas</a></li>
            <li><a href="#/comprador_contact">Contacto</a> </li>
            <li>
              <a href="#"> 
                {{usuario_fullname}}                </a>
              <ul class="ul-menu">
                <li><a href="#/comprador_evento?open=true"> Crear Evento </a> </li>              
                <li><a href="#/comprador_perfil"> Mi Perfil </a> </li> 
                <li><a href="#"> Favoritos </a> </li>
                <li><a href="#" ng-click="logout()"> Cerrar sesi&oacute;n </a> </li>              
              </ul>
            </li>
                            <li><div class="fa-circle-menu"></div></li>
                          </ul>
          <!-- End Navigation List --> 
        </div>
      </div>
    </div>
  </header>
      
      <!-- Mobile Menu Start -->
      <ul class="wpb-mobile-menu">
        <li> <a class="active" href="#/inicio">INICIO</a>
        </li>
        <li> <a href="#/comprador_tienda">TIENDA</a>
        </li>
        <li> <a href="#/miseventos">MIS EVENTOS</a>
        </li>
        <li> <a href="#/mistickets">MIS TICKETS</a>
        </li>
        <li> <a href="#/comprador_contact">CONTACTO</a>
        </li>
        <li> 
          <a href="blog.html">  <li>
            {{usuario_fullname}}          </a>
          <ul>
            <li><a href="#/comprador_evento"> Crear Evento </a> </li>              
            <li><a href="#/comprador_perfil"> Mi Perfil </a> </li>   
            <li><a href="#/favoritos"> Favoritos </a> </li>           
            <li><a href="#/inicio"> Cerrar sesi&oacute;n </a> </li>              
          </ul>
        </li>
      </ul>
      <!-- Mobile Menu End --> 	  
  <section id="inner01">
    <div id="main-slide" class="carousel00 slide slide_galery" data-ride="carousel">
      <div class="item active"> <img class="img-responsive02" src="tema/images/inner-banner01.jpg" alt="slider">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated3"> Esta es la lista de tus Eventos Favoritos </h2>
            <h3 class="animated3"> PRUEBALA TAMBI&Eacute;N EN TU SMARTPHONE </h3>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <div class="section destacados">
    <div class="container container-update"> 
      <div class="row">
                  <div class="big-title text-center">
            <h1>A&Uacute;N NO TIENES <span>eventos favoritos</span></h1>
          </div>
          <img class="img-face-sad" src="tema/images/face-sad.png" alt="face-sad">
                </div>
      <!-- End Team Members --> 
    </div>
    <!-- .container --> 
  </div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>  	<footer>
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
              <li><a href="#/">Registro</a></li>
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
         <!-- <img src="tema/images/designby.png"> -->
      </div>
    </div>
  </footer>	<script type="text/javascript" src="tema/js/script_account.js"></script>


