<!doctype html>
<header class="clearfix" ng-controller="MiseventosCrtl"> 
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
            <li><a href="javasciprt:void(0)">Mis eventos</a> </li>
            <li><a href="#/mistickets">Mis entradas</a></li>
            <li><a href="#/comprador_contact">Contacto</a> </li>
            <li>
              <a href="javasciprt:void(0)"> 
                {{usuario_fullname}}                </a>
              <ul class="ul-menu">
                <li><a href="#/comprador_evento?open=true"> Crear Evento </a> </li>              
                <li><a href="#/comprador_perfil"> Mi Perfil </a> </li> 
                <li><a href="#/favoritos"> Favoritos </a> </li>
                <li><a href="#" ng-click="logout()"> Cerrar sesi&oacute;n </a> </li>              
              </ul>
            </li>
                            <li><div class="fa-circle-menu"><img alt="" src="{{usuario_picture}}"></div></li>
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
        <li> <a href="javasciprt:void(0)">MIS TICKETS</a>
        </li>
        <li> <a href="#/comprador_contact">CONTACTO</a>
        </li>
        <li> 
          <a href="blog.html">  <li>
            {{usuario_fullname}}         </a>
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
            <h2 class="animated3" style="margin-top: -5px !important"> Esta es tu lista de Eventos! </h2>
            <h3 class="animated3"> <span>PRUEBALA TAMBI&Eacute;N EN TU SMARTPHONE</span> </h3>
            <p class="animated4"><a href="#/comprador_evento" class="eventos public" >CREAR NUEVO EVENTO</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
      
  <div class="section destacados" ng-init="eventos()">
    <div class="container container-update"> 
      <div class="row">
                  <div class="big-title text-center">
            <h1>A&Uacute;N NO HAY <span>eventos</span></h1>
            <p class="text-center">Ya puedes comenzar a crear y gestionar tus eventos.</p>
          </div>
          <img class="img-face-sad" src="tema/images/face-sad.png" alt="face-sad">
            
      </div>
      <!-- End Team Members --> 
    </div>
    <!-- .container --> 
  </div>
<div ng-repeat="data in datas">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="team-member modern">
                <a href="#/inicio/evento/v/maraton-de-medellin"> 
                    <div class="member-photo imgevent" style="background-image: url('{{data.event_image}}');background-size: 100% 100%;">
                        <div class="member-name color01">
                            <span>{{data.fktipetickect}}</span> 
                        </div>
                    </div>
                </a>
                <div class="member-info">
                    <div class="post-date">
                       {{data.event_stardate}}&nbsp;{{data.event_starthour}}                     
                    </div>

                    <h2><a href="#/inicio/evento/v/maraton-de-medellin"> {{data.event_name}}</a></h2>
                    <div class="post-date">{{data.event_place}} </div>
                </div>  
                <div class="member-socail"> 
                <a class="icon05" style="background: url('tema/images/system_imgs/categorys/icon-sport.png') center no-repeat;" data-toggle="tooltip" title="Deportes y bienestar" data-placement="bottom"></a> 
                <a class="icon03" data-toggle="tooltip" title="Compartir" data-placement="bottom" href="#"></a> 
                <a class="link-button" href="#/inicio/evento/v/{{data.event_url}}">ver m&aacute;s</a> 
                </div>
                  </div>
                </div>
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
         <!-- <img src="tema/images/designby.png"> -->
      </div>
    </div>
  </footer>	

<script type="text/javascript" src="tema/js/script_account.js"></script>

