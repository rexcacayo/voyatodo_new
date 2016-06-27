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
        <li><a href="#/contact/">Contacto</a></li>
        <li><a href="#/login">Inicia Sesion</a> </li>
      </ul>
      <!-- Mobile Menu End --> 
      
    </div>
    <!-- End Header Logo & Naviagtion --> 
    
  </header>	

<div id="container">
  <!-- Start Home Page Slider -->
  <section id="inner01"> 
    <!-- Carousel -->
    <div id="main-slide" class="carousel00 ver-evento slide" data-ride="carousel">
      <div class="item active"> <img class="img-responsive02" src="tema/images/inner-banner01.jpg" alt="slider">
        <div class="slider-content">
          <div class="container-fluid">
            <div class="col-md-12 text-center">
              <h2 style="margin-top: 0px !important;">¿Qu&eacute; necesitas para tu evento?</h2>
              <h3 class="help-block">ENCUENTRA LO QUE NECESITAS EN EL BUSCADOR</h3>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-lg-offset-1 top_10">
              <select class="form-control">
                <option>Seleccione Categoría </option><option value=1>aseo</option><option value=2>general</option><option value=3>comida</option>              </select>
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
              <a class="btn btn-sm xsbtn btn-block visible-xs visible-md visible-lg btn_search_products">Buscar</a>
              <a class="btn cargar_ visible-sm btn_search_products">Buscar</a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 col-lg-offset-1 top_10">
              <a class="btn cargar_ btn-block hidden-xs" data-toggle="modal" data-target="#modal_information"><i class="fa fa-shopping-basket">
              </i> Mi carrito</a><div class="div_car hidden-xs">0</div>
              <a class="btn cargar_ btn-block top hidden-sm hidden-md hidden-lg" data-toggle="modal" data-target="#modal_information"><i class="fa fa-shopping-basket"></i>  Mi carrito</a><div class="div_car hidden-sm hidden-md hidden-lg">0</div>
            </div>
          </div><!--row-->

        </div>
      </div>
    </div>
    <!-- /carousel --> 
  </section>
  <!-- End Home Page Slider -->

  <!-- Modal información de compra -->
  <div class="logi-box box_modal modal fade" id="modal_information" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h3>PRODUCTOS/SERVICIOS A COMPRAR</h3>
        <div class="blog-d-right">
          <ul class="blog-d-right00">
            <div class="list_products"></div>
          </ul>
        </div>
        <div class="form-group">
          <h5 align="center"><b>Valor total a pagar</h5>
          <h1 align="center" class="ttl_blue total_pay"></h1>
        </div>
        <div class="row">
          <div class="col-md-5">
            <a class="btn cargar_ btn-block btn_next_product" data-toggle="modal" data-target="#modal_buy">SIGUIENTE</a>
          </div>
        </div>
      </div>           
    </div>
  </div>

  <!-- Modal formulario de compra -->
  <div class="logi-box box_modal modal fade" id="modal_buy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h3>INFORMACI&Oacute;N DE LA COMPRA</h3>
        <form class="body_modal" action="/voyatodotema/registro" method="post">
          <div class="form-group">
            <div class="controls">
              <label>NOMBRE</label>    
              <div class="form-group field-formuserregister-username required">
                <input type="text" id="formuserregister-username" class="email requiredField" name="FormUserRegister[username]" placeholder="Jhon">
                <div class="help-block"></div>
              </div>               
            </div>
          </div>
          <div class="form-group">
            <div class="controls">
              <label>APELLIDO</label>
              <div class="form-group field-formuserregister-last_name required">
                <input type="text" id="formuserregister-last_name" class="email requiredField" name="FormUserRegister[last_name]" placeholder="Smith">
                <div class="help-block"></div>
              </div>               
            </div>
          </div>
          <div class="form-group">
            <div class="controls">
              <label>E-MAIL</label>    
              <div class="form-group field-formuserregister-email required">
                <input type="email" id="formuserregister-email" class="email requiredField" name="FormUserRegister[email]" placeholder="johnsmith@mymail.com">
                <div class="help-block"></div>
              </div>                
            </div>
          </div>
          <div class="form-group">
            <div class="controls">
              <label>TELÉFONO</label>
              <div class="form-group required">
                <input type="tel" id="" class="email" name="" placeholder="312 333 4455">
                <div class="help-block"></div>
              </div>                
            </div>
          </div>
          <div class="form-group">
            <div class="controls">
              <label>CIUDAD</label>
              <div class="form-group required">
                <input type="text" id="" class="email" name="" placeholder="Bogotá">
                <div class="help-block"></div>
              </div>                
            </div>
          </div>
          <div class="form-group">
            <h5 align="center"><b>Valor total a pagar</h5>
            <h1 align="center" class="ttl_blue">200.000 COP</h1>
          </div>

          <div class="row">
            <div class="col-md-5 col-md-offset-1">
              <img src="tema/images/pay.png">
            </div>
            <div class="col-md-5">
              <a class="btn cargar_ btn-block btn_pay_product" data-toggle="modal" data-target="#modal_calification">PAGAR</a>
            </div>
          </div>
        </form>   
      </div>           
    </div>
  </div>

  <!-- Modal calificación -->
  <div class="logi-box box_modal modal fade" id="modal_calification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h2>Un &uacute;ltimo paso!</h2>
        <p>Esta calificaci&oacute;n puede ayudar a otros usuarios a tomar la decisi&oacute;n de compra</p>          
        <h3 class="ttl_blue">CALIFICAR PROVEEDOR</h3>            
        <input id="input-21d" value="2" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
        <hr>
        <a class="eventos btn_create">CALIFICAR</a>
        <p>23 Calificaciones</p>          
      </div>
    </div>
  </div> 

  <div class="container-fluid" style="background:#f2f2f2;">
    <div class="col-md-12 product-description-row">
      <div class="row top">
        <div class="col-md-12">
          <h2>Escobas</h2>
          <h3 class="txt_review">Una escoba es un cepillo largo para barrer o limpiar el suelo.</h3>
          <a class="category_product" href="tema/producto/categoria/aseo">aseo</a>
        </div>
        <div class="col-md-6 col-sm-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                      <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                                    </ol>
                <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                        <img src="tema/images/system_imgs/16fd905c965810968055ff58b0deeb7de372c092d41a399140brooms_botom.jpg" alt="galery_event" style="width: 100%">
                      </div>
                                                                <div class="item">
                        <img src="tema/images/system_imgs/540219f10c08e3a6ecd6cd08b33862e52a0baf191ffa2f3f2descoba_1.jpg" alt="galery_event" style="width: 100%">
                      </div>
                                                                <div class="item">
                        <img src="tema/images/system_imgs/b1cf13312d2961e6e91c0608c251ae5483a6f395e8c7d378aeescoba_2.jpg" alt="galery_event" style="width: 100%">
                      </div>
                                                          </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>                  
                      </div>
        <div class="col-md-6 col-sm-12">
          <h4>DESCRIPCI&Oacute;N</h4>
          <p>Las escobas han experimentado cambios significativos en su construcción, desde que se desarrollara a partir de un manojo de ramas o de distintas fibras naturales o sintéticas atadas por uno de sus extremos.

Las fibras usadas en escobas modernas se obtienen a partir de una planta parecida a la del maíz llamada sorgo escobero (en Chile se llama “curagüilla”). Son largas, rectas y duraderas.

El cambio principal más reciente es la escoba plana, inventada por los Shakers a principios del siglo XIX.1 Esta escoba tiene más anchura para empujar mejor la suciedad. En la actualidad, casi todas las escobas que se construyen son planas, habiendo quedado prácticamente obsoleta la escoba redonda.</p>
          <div class="row payment-details top">
            <div class="col-md-6 col-sm-6">
              <div class="price">
                <h2 class="ttl_blue"> $ 20,000 COP</h2>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 top_10">
              <div class="search-input">
                <select class="form-control qty_product">
                  <option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>                </select>
              </div>
            </div>
          </div><!--row-->
          <div class="row top">
            <div class="col-md-6 col-sm-6">
              <div class="addcart">
                <a class="eventos carrito" name="8">AGREGAR AL CARRITO</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 top_10">
              <div class="search-input">
                <select class="form-control date_product">
                  <option>2016-04-13</option><option>2016-04-23</option><option>2016-04-30</option>                </select>
              </div>
            </div>
          </div>
          <div class="row top">
            <div class="col-md-6 col-sm-6">
              <div class="buynow">
                                  <a href="tema/login" class="eventos">COMPRAR AHORA</a>
                                </div>
            </div>
            <div class="col-md-6 col-sm-6 top_10">
              <img src="tema/images/pay.png">
            </div>
          </div><!--row-->
          <div class="row top">
            <div class="col-xs-12 col-sm-12 visible-xs visible-sm">
              <h3>INFORMACI&Oacute;N DEL VENDEDOR</h3>
              <div class="col-md-2">
                <p>
                  Calificaci&oacute;n del Vendedor:
                </p>
              </div>
              <div class="col-md-10">
                                <input id="input-21d" value="4" type="number" readonly="true" class="rating" min=0 max=5 step=1 data-size="xs"> 
              </div>
              <div class="col-md-2">
                <p>Ventas efectuadas:</p>
              </div>
              <div class="col-md-10">
                <p class="ttl_blue">0</p>
              </div>
              <div class="col-md-2">
                <p>
                  Tiempo en Voy a Todo: 
                </p>
              </div>
              <div class="col-md-10">
                <p class="ttl_blue">
                  86 días.                </p>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 top_10">
              <h3>T&Eacute;RMINOS Y CONDICIONES</h3>
              <p>Las fibras usadas en escobas modernas se obtienen a partir de una planta parecida a la del maíz llamada sorgo escobero (en Chile se llama “curagüilla”). Son largas, rectas y duraderas.</p><br />
            </div>
          </div><!--row-->
        </div><!--col-->
        <div class="container-fluid top hidden-sm hidden-xs">
          <div class="col-md-12 col-sm-12">
            <h3>INFORMACI&Oacute;N DEL VENDEDOR</h3>
            <div class="col-md-3" style="text-align:right;">
              <p>
                Calificaci&oacute;n del Vendedor:
              </p>
            </div>
                        <input id="input-21d" value="4" type="number" readonly="true" class="rating" min=0 max=5 step=1 data-size="xs"> 
            <div class="col-md-3" style="text-align:right;">
              <p>Ventas efectuadas:</p>
            </div>
            <div class="col-md-9">
              <p class="ttl_blue">0</p>
            </div>
            <div class="col-md-3" style="text-align:right;">
              <p>
                Tiempo en Voy a Todo: 
              </p>
            </div>
            <div class="col-md-9">
              <p class="ttl_blue">
                86 días.              </p>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 top_10">
            <h3>T&Eacute;RMINOS Y CONDICIONES</h3>
            <p>Las fibras usadas en escobas modernas se obtienen a partir de una planta parecida a la del maíz llamada sorgo escobero (en Chile se llama “curagüilla”). Son largas, rectas y duraderas.</p><br />
          </div>
        </div><!--container-fluid-->
      </div>
    </div><!--row-->        
    <!-- End Team Members --> 
  </div>
</div>

<div class="section purchase crowdfunding">
  <div class="container"> 
    <div class="section-video-content text-center"> 
      <!-- Start Animations Text -->
      <h3 class="h31">CREA TU PROPIO <span>EVENTO</span></h3>
      <p class="help-block">Voy A Todo te d&aacute; las herramientas necesarias para que puedas hacer toda<br />
       la gesti&oacute;n de tu eventos en su s&oacute;lo lugar</p>
       <!-- End Animations Text -->
       <div class="eventos-list eventos-list00"> <a class="eventos" href="tema/account/evento">crear mi evento</a> </div>
     </div>
   </div>
   <!-- .container --> 
 </div>
</div>

<script type="text/javascript" src="tema/js/script_buy.js"></script>
<script src="tema/js/star-rating.min.js" type="text/javascript"></script>


<script>
  $(document).ready(function () {

    $('.carousel').carousel();

    $('.btn_create').click(function(){
      alert($('#input-21d').val());
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
         <!-- <img src="tema/images/designby.png"> -->
      </div>
    </div>
  </footer>	
	<!-- Full Body Container -->
	<!--<div id="container">
		<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
		<div id="loader">
		  <div class="spinner">
		    <img src="tema/images/logo.png">
		  </div>
		</div>
		<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		</script> 
		<script type="text/javascript" src="tema/js/script.js"></script>
	</div>-->
