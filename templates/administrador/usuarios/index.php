<!doctype html>

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
    <!-- Carousel -->
    <div id="main-slide" class="carousel00 ver-evento slide" data-ride="carousel">
      <div class="item active"> <img class="img-responsive02" src="tema/images/inner-banner01.jpg" alt="slider">
        <div class="slider-content">
          
          <div class="container-fluid">
            <div class="col-md-12 text-center">
              <h2 style="margin-top: 0px !important;">Esta es la lista de todos los usuarios</h2>
              <h3 class="help-block">ENCUENTRA A LOS USUARIOS EN EL BUSCADOR</h3>
              <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-lg-offset-1 top_10">
                <select class="form-control slc_rol">
                  <option value="">Seleccione tipo de usuario</option>
                  <option value="1">Administrador</option>
                  <option value="2">Patrocinador</option>
                  <option value="3">Usuario</option>
                  <option value="4">Proveedor</option>
                  <option value="5">Todos</option>
                </select>
              </div>
              <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 top_10">
                <a class="btn btn-sm xsbtn btn-block visible-xs visible-md visible-lg btn_filter_users">Buscar</a>
                <a class="btn cargar_ visible-sm btn_filter_users">Buscar</a>
              </div>
            </div>
          </div><!--row-->

        </div>
      </div>
    </div>
    <!-- /carousel --> 
  </section>
  <div class="section destacados">
    <div class="container container-update"> 
      <div class="row">
                      <h4 class="align_left">USUARIOS</h4>
              <div class="table-responsive new_table">
                <table class="table">
                  <thead>
                    <tr>
                      <td><p>NOMBRES</p></td>
                      <td><p>APELLIDOS</p></td>
                      <td><p>EMAIL</p></td>
                      <td><p>TEL&Eacute;FONO 1</p></td>
                      <td><p>TEL&Eacute;FONO 2</p></td>
                      <td><p>TIPO DE USUARIO</p></td>
                      <td><p>CALIFICACI&Oacute;N DEL USUARIO</p></td>
                    </tr>
                  </thead>
                  <tbody>
                                          <tr>
                        <td>Pedro</td>
                        <td>Martinez</td>
                        <td>henryacz7@gmail.com</td>
                        <td>2345678</td>
                        <td>9876543</td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">4</td>
                      </tr>
                                          <tr>
                        <td>Admin</td>
                        <td> </td>
                        <td>admin@email.com</td>
                        <td></td>
                        <td></td>
                                                <td>Administrador</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Patrocinador</td>
                        <td>Dos</td>
                        <td>miemail@email.com</td>
                        <td>123456789</td>
                        <td>111111111</td>
                                                <td>Patrocinador</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Bruce</td>
                        <td>Wayne</td>
                        <td>henry_acz7@hotmail.com</td>
                        <td>000000</td>
                        <td>3333333</td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Proveedor</td>
                        <td>Prueba</td>
                        <td>proveedor@email.com</td>
                        <td>123456789</td>
                        <td>123456</td>
                                                <td>Proveedor</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Patrocinador</td>
                        <td>Uno</td>
                        <td>prueba@patrocinador.com</td>
                        <td>5555555555</td>
                        <td>666666666</td>
                                                <td>Patrocinador</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Cristian Ramirez Martinez</td>
                        <td>Ramirez</td>
                        <td>martinez.crizz_old@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>ADIDAS</td>
                        <td></td>
                        <td>yflorezr@gmail.com</td>
                        <td>1234567</td>
                        <td>11111111</td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Yohan Esteban</td>
                        <td></td>
                        <td>faniaallstarshl@hotmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Cristian Ramirez Martinez</td>
                        <td>Ramirez Martinez</td>
                        <td>martinez.crizz@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Rubén Darío Córdoba</td>
                        <td></td>
                        <td>ruben.cordoba@hotmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Vladimir Vivas</td>
                        <td></td>
                        <td>vladovivas@hotmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Felipe Estrada</td>
                        <td></td>
                        <td>felipe.estrada.prada@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Pablo Alejandro</td>
                        <td></td>
                        <td>pdonaire1@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Ricardo Lugaresi</td>
                        <td></td>
                        <td>rflugaresi1r2@hotmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>alesmar</td>
                        <td>luis</td>
                        <td>alesmarluis2@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>rex</td>
                        <td></td>
                        <td>alesmarluis1@gmail.com</td>
                        <td>123378954</td>
                        <td>123456789</td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>ricardo </td>
                        <td>Lugaresi</td>
                        <td>rflugaresir@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Stiven</td>
                        <td>Martinez</td>
                        <td>crizz@outlook.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>del carme</td>
                        <td>luis</td>
                        <td>alesmarluis@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Edgar</td>
                        <td>Silva</td>
                        <td>edgarsilvalovera@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Guzbeny</td>
                        <td>Ramirez</td>
                        <td>guzbenyramirez@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                          <tr>
                        <td>Alexis</td>
                        <td>Sanchez</td>
                        <td>aasvdj@gmail.com</td>
                        <td></td>
                        <td></td>
                                                <td>Usuario</td>
                        <td style="text-align: center;">0</td>
                      </tr>
                                        <tr class="bluish">
                      <td class="ttl_blue">TOTAL DE USUARIOS</td>
                      <td class="ttl_blue">23</td>
                    </tr>
                  </tbody>
                </table>
              </div> 
                  </div>
      <!-- End Team Members --> 
    </div>
    <!-- .container --> 
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