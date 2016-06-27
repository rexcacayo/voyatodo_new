
<!doctype html>

  <!-- Start  Logo & Naviagtion  -->
  <header class="clearfix"> 
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
            <li> <a class="active" href="#/inicio">Inicio</a></li>
            <li><a href="#/solicitudes">Solicitudes</a> </li>
            <li><a href="#/administrador_conversaciones">Conversaciones</a> </li>
            <li>
              <a href="#">Finanzas</a>
              <ul class="ul-menu">
                <li><a href="#/parametros"> Par&aacute;metros </a> </li>              
              </ul>
            </li>
            <li><a href="#/usuarios">Usuarios</a> </li>
            <li>
              <a href="#"> 
                Admin                </a>
              <ul class="ul-menu">             
                <li><a href="#/inicio"> Cerrar sesi&oacute;n </a> </li>              
              </ul>
            </li> 
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
        <li> <a href="#/solicitudes">SOLICITUDES</a>
        </li>
        <li> <a href="#/administrador_conversaciones">CONVERSACIONES</a>
        </li>
        <li>
          <a href="#">Finanzas</a>
          <ul class="ul-menu">
            <li><a href="#/comisiones"> Comisiones </a> </li>              
          </ul>
        </li>
        <li> <a href="#/usuarios">USUARIOS</a>
        </li>
        <li> 
          <a href="">  <li>
            Admin            </a>
          <ul>
            <li><a href="#/perfil"> Mi Perfil </a> </li>              
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
          <h2 class="animated3" style="margin-top: 0px"> Esta es toda la lista de Mensajes</h2>
          <h3 class="animated3"> <span>PRUEBALA TAMBI&Eacute;N EN TU SMARTPHONE</span> </h3>
        </div>
      </div>
    </div>
  </div>
</section>  
<div class="section destacados">
  <div class="container container-update"> 
    <div class="row">
                <div class="big-title text-center">
            <h1>A&Uacute;N NO HAY MENSAJES DE <span>PATROCINADORES Y/O USUARIOS</span></h1>
          </div>
          <img class="img-face-sad" src="tema/images/face-sad.png" alt="face-sad">
              </div>
    <div class="form-group new_chat"></div>
    <!-- End Team Members --> 
  </div>
  <!-- .container --> 
</div>

<!-- Modal -->
<div class="modal fade" id="modal-edit-message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar mensaje</h4>
      </div>
      <div class="modal-body content_message">
      </div>
      <div class="modal-footer">
        <a class="btn_chat btn_modal_save">Guardar</a>
      </div>
    </div>
  </div>
</div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>  <!-- Full Body Container -->
  


<div id="container">
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script> 
    <script type="text/javascript" src="tema/js/script_admin.js"></script>
  </div>