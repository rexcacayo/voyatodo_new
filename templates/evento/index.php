<header class="clearfix" ng-controller="EventoCrtl"> 
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
              <form autocomplete="off" role="search" method="post" class="searchform" action="#">
                <input type="text" value="" name="s" id="s" placeholder="Search the site...">
              </form>
            </div>
          </div>
          <!-- End Search --> 
          <!-- Start Navigation List -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#/inicio">INICIO</a> </li>
            <li><a href="#/tienda">TIENDA</a> </li>
            <li><a href="#/patrocinador">PATROCINADOR</a> </li>
            <li><a href="#/proveedor">PROVEEDOR</a> </li>
            <li><a href="#/comprador_contact">CONTACTO</a> </li>
            <li>
              <a href="#"> 
                {{usuario_email}}      </a>
              <ul class="ul-menu">
                <li><a href="#/prefil/{{usuario_email}}"> Mi Perfil </a> </li>
                <li><a href="#" ng-click="logout()">Cerrar sesi&oacute;n </a> </li>              
              </ul>
            </li>
                            <li><div class="fa-circle-menu"></div></li>
                 
          </ul>
          <!-- End Navigation List --> 
        </div>
      </div>
    </div>
  </header>	  
  <section id="inner01">
    <div id="main-slide" class="carousel00 slide slide_galery" data-ride="carousel">
      <div class="item active"> <img class="img-responsive02" src="tema/images/inner-banner01.jpg" alt="slider">
        <div class="slider-content">
          <div class="col-md-12 text-center">
            <h2 class="animated3" style="margin-top: 0px !important"> Esta es la lista de Eventos! </h2>
            <h3 class="animated3"> <span>PRUEBALA TAMBI&Eacute;N EN TU SMARTPHONE</span> </h3>
            <p class="animated4"><a href="#/comprador_evento" class="eventos public" >CREAR NUEVO EVENTO</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <div class="section destacados">
    <div class="container container-update"> 
      <div class="row">
                    <div class="big-title text-center">
              <h1>Lista de todos los  <span>eventos</span></h1>
        <p class="text-center">Desde aquí puedes ver todos los eventos</p>
              
            </div>
                           
                        <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="team-member modern">
                    <a href="#/inicio/evento/v/maraton-de-medellin"> 
                      <div class="member-photo imgevent" style="background-image: url('tema/images/system_imgs/7d3f20d64d652ced9b1c03e3430fb384110cd69bb1cd29b6eebanner_maraton.jpg');background-size: 100% 100%;">
                                                      <div class="member-name color01">
                                <span>GRATIS</span> 
                              </div>
                                                  </div>
                    </a>
                    <div class="member-info">
                      <div class="post-date">
                        30 Mar, 2016. 07:30                      </div>

                      <h2><a href="#/inicio/evento/v/maraton-de-medellin"> Maratón de Medellín</a></h2>
                      <div class="post-date">Avenida 33 </div>
                    </div>  
                    <div class="member-socail"> 
                       
                      <a class="icon05" style="background: url('tema/images/system_imgs/categorys/icon-sport.png') center no-repeat;" data-toggle="tooltip" title="Deportes y bienestar" data-placement="bottom"></a> 
                      <a class="icon03" data-toggle="tooltip" title="Compartir" data-placement="bottom" href="#"></a> 
                      <a class="link-button" href="#/inicio/evento/v/maraton-de-medellin">ver m&aacute;s</a> 
                    </div>
                  </div>
                </div>
              </div>
      <!-- End Team Members --> 
    </div>
    <!-- .container --> 
  </div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<script type="text/javascript">
  $(".body-category").removeClass("login-bg");
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
	<!-- Full Body Container -->
<script type="text/javascript" src="tema/js/script_sponsor.js"></script>	