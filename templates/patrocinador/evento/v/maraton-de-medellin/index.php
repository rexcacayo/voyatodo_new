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
            <li><a href="#">eventos</a> </li>
            <li><a href="#/conversaciones">conversaciones</a> </li>
            <li><a href="#">alertas</a> </li>
            <li>
              <a href="#"> 
                Patrocinador Dos              </a>
              <ul class="ul-menu">
                <li><a href="#/perfil"> Mi Perfil </a> </li>
                <li><a href="#/"> Cerrar sesi&oacute;n </a> </li>              
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
        <li> <a href="#">EVENTOS</a>
        </li>
        <li><a href="#/conversaciones">CONVERSACIONES</a> </li>
        <li><a href="#">ALERTAS</a> </li>
        <li> 
          <a href="blog.html">  <li>
            Patrocinador Dos          </a>
          <ul>
            <li><a href="#/perfil"> Mi Perfil </a> </li>              
            <li><a href="tema/site/logout"> Cerrar sesi&oacute;n </a> </li>              
          </ul>
        </li>
      </ul>
      <!-- Mobile Menu End --> 	<script src="tema/js/jquery.validate.js"></script>
<div id="container">
  <section id="inner01">
    <div id="main-slide" class="carousel00 slide slide_galery" data-ride="carousel">
      <div class="item active"> <img class="img-responsive02" src="tema/images/inner-banner01.jpg" alt="slider">
        <div class="slider-content">
          <div class="col-md-4 col-md-offset-2 col-xs-12 pull-left">
            <label style="font-size: 15px;">A&ntilde;ade al calendario:</label>
            <a id="btn-cal" class="icons_calendar"><i class="fa fa-windows"></i></a>
            <a id="btn-cal" class="icons_calendar"><i class="fa fa-google"></i></a>
            <a id="btn-cal" class="icons_calendar"><i class="fa fa-apple"></i></a>
            <a id="btn-cal" class="icons_calendar"><i class="fa fa-yahoo"></i></a>
          </div>
          <div class="col-md-2 col-xs-12 col-md-offset-3 top">
            <a class="btn btn-block btn_buy" data-toggle="modal" id="btn_valtickets" data-target="#modal-form-tickets">COMPRAR AHORA</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comienza la primera opción del menú -->

  <div class="menu-modal summary-modal dashboard-modal scrollbar" id="opcion1">
    <div class="separator">
    </div>
    <div class="row">
      <div class="col-md-7 col-sm-6 col-xs-6">
        <h4>RESUMEN DEL EVENTO</h4>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 summary-images">
        <div>
          <img src="tema/images/pie.png">
          <p>0</p>
          <p>VISITAS</p>
        </div>

        <div>
          <img src="tema/images/buyers.png">
          <p>12</p>
          <p>COMPRAS</p>
        </div>
      </div>
      <div class="col-md-6 summary-images">
        <div>
          <img src="tema/images/basket.png">
          <p>200.000</p>
          <p>DINERO RECIBIDO</p>
        </div>

        <div>
          <img src="tema/images/assistants.png">
          <p>200</p>
          <p>ASISTENTES</p>
        </div>
      </div>
    </div>
    <div class="separator"></div>
    <h4 class="align_left">RESUMEN DE VISITAS Y REGISTROS</h4>
    <table class="table">
      <tr>
        <td><p>PERIODO</p></td>
        <td><p>VISITANTES</p></td>
        <td><p>CLICS</p></td>
      </tr>
      <tr>
        <td>Hoy</td>
        <td>10</td>
        <td>9</td>
      </tr>
      <tr>
        <td>Ayer</td>
        <td>6</td>
        <td>4</td>
      </tr>
      <tr>
        <td>Esta semana</td>
        <td>20</td>
        <td>10</td>
      </tr>
      <tr>
        <td>Semana pasada</td>
        <td>19</td>
        <td>7</td>
      </tr>
      <tr>
        <td>Mes pasado</td>
        <td>1</td>
        <td>6</td>
      </tr>
      <tr class="bluish">
        <td class="ttl_blue">TOTAL</td>
        <td class="ttl_blue">56</td>
        <td class="ttl_blue">36</td>
      </tr>
    </table>
    <div class="separator"></div>
    <h4 class="align_left">RESUMEN DE CAMPA&Ntilde;A</h4>
    <table class="table">
      <tr>
        <td><p>BANNER</p></td>
        <td><p>IMPRESIONES</p></td>
        <td><p>CLICS</p></td>
      </tr>
      <tr>
        <td>PREFERENCIAL</td>
        <td>300</td>
        <td>36</td>
      </tr>
      <tr>
        <td>VALOR IMPRESI&Oacute;N</td>
        <td>140 COP</td>
      </tr>
      <tr class="bluish">
        <td class="ttl_blue">TOTAL A PAGAR</td>
        <td class="ttl_blue">42000 COP</td>
      </tr>
    </table>
  </div>

  <!-- Comienza la segunda opción del menú -->


  <form id="form-sponsor" action="tema/evento/v/maraton-de-medellin?openchat=true" method="post" enctype="multipart/form-data">
<input type="hidden" name="_csrf" value="SHh2eVJFdngaDDkvKxIxHhAiNSYxNTc9HDohNygjLCccHSYxNSsYEQ==">
    <div class="menu-modal bank-modal summary-modal dashboard-modal bank_acount scrollbar" id="opcion2">

      <div class="separator"></div>

      <h4 class="h4_left">M&Eacute;TODOS DE PAGO </h4>

      <div class="row div_cards">
                <div id="new"></div>
      </div>

      <div class="separator"></div>

        <h4>EDITAR TARJETA DE CR&Eacute;DITO PARA PAGOS</h4>
        <p class="description_social" style="margin-top: 40px; margin-bottom: 50px;">
          VoyATodo recibir&aacute; los pagos de la pauta publicitaria y <br />
          se cargar&aacute;n a tu tarjeta de cr&eacute;dito. Podr&aacute;s verla en tu <br />
          extracto como VOYATODO SAS, s&oacute;lo se cobrar&aacute; el valor <br />
          que hayas avalado en tu banner publicitario
        </p>

        <div class="row">
          <div class="form-group">
            <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">NOMBRE</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
               <div class="form-group field-formsponsor-creditcard_titularname">

<input type="text" id="formsponsor-creditcard_titularname" class="form-control intittularname" name="FormSponsor[creditcard_titularname]">

<div class="help-block"></div>
</div>            </div>
          </div>
          <div class="form-group">
            <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">N° TARJETA</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
               <div class="form-group field-formsponsor-creditcard_numbercard">

<input type="text" id="formsponsor-creditcard_numbercard" class="form-control innumbercard" name="FormSponsor[creditcard_numbercard]">

<div class="help-block"></div>
</div>            </div>
          </div>
          <div class="form-group">
            <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">TIPO DE TARJETA</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                            <div class="form-group field-formsponsor-creditcard_type">

<select id="formsponsor-creditcard_type" class="form-control intype" name="FormSponsor[creditcard_type]">
<option value=""></option>
<option value="MASTERCARD">MASTERCARD</option>
<option value="VISA">VISA</option>
<option value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
<option value="DINNERS">DINNERS</option>
</select>

<div class="help-block"></div>
</div>            </div>
          </div> 
        </div><!--row end-->
        <div class="row">
          <a class="btn btn-yellow btn-block set_target_sponsor">A&Ntilde;ADIR TARJETA</a>
        </div>
        <div class="alert alert-danger hidden message" role="alert">
          <strong>Tu tarjeta no se guardo</strong>
        </div>

      <div class="separator"></div>

      <h4 class="h4_left">PAGO DE CRÉDITO ACTUAL</h4>

      <div class="row div_pays">  
                <div id="new1"></div>
         
      </div><!--row end-->
    </div>

    <div class="menu-modal bank-modal summary-modal dashboard-modal edit_target hidden scrollbar"  id="opcion-1">
        
        <div class="separator"></div>

        <h4>EDITAR TARJETA DE CR&Eacute;DITO PARA PAGOS</h4>
        <p class="description_social" style="margin-top: 40px; margin-bottom: 50px;">
          VoyATodo recibir&aacute; los pagos de la pauta publicitaria y <br />
          se cargar&aacute;n a tu tarjeta de cr&eacute;dito. Podr&aacute;s verla en tu <br />
          extracto como VOYATODO SAS, s&oacute;lo se cobrar&aacute; el valor <br />
          que hayas avalado en tu banner publicitario
        </p>

        <div class="row">
          <div class="form-group">
            <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">NOMBRE</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
               <div class="form-group field-formsponsor-creditcard_titularname">

<input type="text" id="formsponsor-creditcard_titularname" class="form-control titularname" name="FormSponsor[creditcard_titularname]">

<div class="help-block"></div>
</div>            </div>
          </div>
          <div class="form-group">
            <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">N° TARJETA</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
               <div class="form-group field-formsponsor-creditcard_numbercard">

<input type="number" id="formsponsor-creditcard_numbercard" class="form-control target" name="FormSponsor[creditcard_numbercard]">

<div class="help-block"></div>
</div>            </div>
          </div>
          <div class="form-group">
            <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">TIPO DE TARJETA</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
                            <div class="form-group field-formsponsor-creditcard_type">

<select id="formsponsor-creditcard_type" class="form-control type" name="FormSponsor[creditcard_type]">
<option value=""></option>
<option value="MASTERCARD">MASTERCARD</option>
<option value="VISA">VISA</option>
<option value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
</select>

<div class="help-block"></div>
</div>            </div>
          </div> 
        </div><!--row end-->
        <div class="row">
          <a class="btn btn-yellow btn-block update_target">ACTUALIZAR TARJETA</a>
        </div>
        <div class="row" id="response">
          <label></label>
        </div>
    </div><!--modal end-->

    <!-- Comienza la tercera opción del menú -->

    <div class="menu-modal share-modal summary-modal dashboard-modal scrollbar" id="opcion3">

      <div class="separator"></div>

      <h3>COMPARTIR POR REDES SOCIALES</h3>
      <p class="description_social">
        Ahora puedes invitar a tus amigos, seguidores y <br>
        contactos a trav&eacute;s de las redes sociales
      </p>
      <span>
        <a href="" class="text-facebook ico red_margin share_facebook"> <i class="fa fa-facebook"></i> </a>
        <a href="https://twitter.com/share"class="text-twitter ico red_margin share_twitter"> <i class="fa fa-twitter"></i> </a>
        <a href="" class="text-linkedin ico red_margin share_linkedin"> <i class="fa fa-linkedin"></i> </a>
        <a href="" class="text-google ico red_margin share_google"> <i class="fa fa-google-plus"></i> </a>
      </span>

      <div class="separator"></div>

      <h3>COMPARTIR POR E-MAIL</h3>
      <p class="description_social">
        Copia y pega el siguiente enlace en tu correo para <br>
        que tus invitados registren el evento:
      </p>
      <div class="col-md-12">
        <div class="form-group field-formsponsor-event_url">

<textarea id="txt_url" class="text-area" name="FormSponsor[event_url]" readonly>http://voyatodo.comtema/evento/v/maraton-de-medellin?openchat=true</textarea>

<div class="help-block"></div>
</div>      </div>
      <div class="col-md-12 top">
        <a class="btn btn-yellow btn-block btn-url" data-clipboard-target="#txt_url">COPIAR ENLACE</a>
      </div>
    </div>

    <!-- Comienza la cuarta opción del menú -->

    <div class="menu-modal sponsor-modal summary-modal dashboard-modal scrollbar" id="opcion4">

      <div class="separator"></div>

      <h3>PROPUESTA PATROCINIO</h3>
      <div class="row">
        <input type="hidden"  name="FormSponsor[pkcreditcard]" class="pkcreditcard" value="">
                    <div class="form-group">
              <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">ESPECIE</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <div class="form-group field-formsponsor-proposal_contributions">

<input type="text" id="formsponsor-proposal_contributions" class="form-control align_right ttl_blue val_contributions" name="FormSponsor[proposal_contributions]" value="Zapatos">

<div class="help-block"></div>
</div>              </div>
            </div>
            <div class="form-group">
              <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">DINERO</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <div class="form-group field-formsponsor-proposal_neto1">

<input type="number" id="formsponsor-proposal_neto1" class="form-control align_right ttl_blue val_money" name="FormSponsor[proposal_neto1]" value="200000">

<div class="help-block"></div>
</div>              </div>
            </div>
            <div class="form-group">
              <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">COMISI&Oacute;N</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <div class="form-group field-formsponsor-creditcard_numbercard">

<input type="number" id="formsponsor-creditcard_numbercard" class="form-control align_right ttl_blue val_comision" name="FormSponsor[creditcard_numbercard]" readonly>

<div class="help-block"></div>
</div>              </div>
            </div>
            <div class="form-group">
              <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">TOTAL ENVIADO</label>
              <div class="col-md-9 col-sm-9 col-xs-9">
                <div class="form-group field-formsponsor-proposal_total1">

<input type="number" id="formsponsor-proposal_total1" class="form-control align_right ttl_blue val_total" name="FormSponsor[proposal_total1]" value="193400" readonly>

<div class="help-block"></div>
</div>              </div>
            </div>
                  </div><!--row end-->
      <div class="row">
        <a class="btn btn-yellow btn-block send_proposal">ENVIAR PROPUESTA</a>
        <p class="description_social">
          Una vez el cliente acepta la propuesta se cargar&aacute; tu <br>
          banner y empezará a funcionar tu pauta.
          <input type="hidden"  id="pkevent" value="26">
        </p>
      </div>
      <div class="form-group">
        <label class="col-md-12 top">Maratón de Medellín</label>
                    <div class="col-md-12">
              <div class="area-message">
                                      <div class="col-md-8 div_message1">
                        Hola                      </div>
                                          <div class="col-md-8 div_message1">
                        Mi número es ######                      </div>
                                          <div class="col-md-8 div_message2">
                        Hola                      </div>
                                          <div class="col-md-8 div_message1">
                        ########## - Este mensaje no cumple con las politicas de voy a todo                      </div>
                                          <div class="col-md-8 div_message1">
                        hola                      </div>
                                          <div class="col-md-8 div_message1">
                        Viendo si este mensaje se deja enviar.                      </div>
                                    <div class="message_new"></div>
              </div>
            </div>
                </div>
      <textarea class="form-control align_left text-input-message" autofocus=""></textarea>
      <div class="col-md-12 top">
        <a class="btn btn-yellow btn-block send_message">ENVIAR MENSAJE</a>
      </div>
      <p class="description_social" style="margin-top:-10px;">
        Todos los mensajes ser&aacute;n aprobados previamente por Voy A Todo, antes de ser reflejados.
      </p>
    </div>

  </form>
  <!-- Contenido de la página -->
  <section id="photo" class="dashboard-row">
    <img class="responsive-image" style="opacity: 1" src="tema/images/system_imgs/7d3f20d64d652ced9b1c03e3430fb384110cd69bb1cd29b6eebanner_maraton.jpg"/>
    <div class="shadow" ></div>

    <!-- Menu -->
    <div class="col-xs-2 col-md-2 col-sm-1 dashboard-column">
      <div class="dashboard-content col-sm-12">
        <div class="col-md-12 col-xs-0 col-md-offset-0 dashboard-element" id="dashboard-summary">
          <a class="img_click" name="summary-" style="cursor: pointer">
            <img class="img_summary-" src="tema/images/summary-gray.png">
            <p class="hidden-sm hidden-xs">DASHBOARD</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-bank">
          <a class="img_click" name="bank-" style="cursor: pointer">
            <img class="img_bank-" src="tema/images/bank-gray.png">
            <p class="hidden-sm hidden-xs">BANCO</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 col-sm-offset-0  dashboard-element" id="dashboard-share">
          <a class="img_click" name="share-" style="cursor: pointer">
            <img class="img_share-" src="tema/images/share-gray.png">
            <p class="hidden-sm hidden-xs">COMPARTIR</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 col-sm-offset-1 dashboard-element" id="dashboard-sponsor">
          <a class="img_click" id="click_sponsor" name="sponsor-" style="cursor: pointer">
            <img class="img_sponsor-" src="tema/images/sponsor-gray.png">
            <p class="hidden-sm hidden-xs">PATROCINADOR</p>
          </a>
        </div>
      </div>
    </div>
    <!-- End Menu -->

    <div class="contenido-evento col-md-10">
      <h1 style="color: white"> Maratón de Medellín </h1>
      <div class="detalles">
        <div class="fecha">
          <i class="fa fa-calendar"></i>
          <label> 
            Miercoles 30 de Marzo del 2016          </label>
          <br>
          <i class="fa fa-calendar"></i>
          <label> 
            Sábado 30 de Abril del 2016          </label>
        </div>
        <div class="hora">
          <i class="fa fa-clock-o"></i>
          <label> 
            07:30          </label>
          <br>
          <i class="fa fa-clock-o"></i>
          <label>
            08:30          </label>
        </div>
      </div>
      <div class="ubicacion">
        <i class="fa fa-map-marker"></i>
        <label> 
          Avenida 33,  
        </label>
        <label>
          Medellin,         </label>
        <label>
          Colombia        </label>
        <br>
        <label> 
          Plaza Mayor  
        </label>
      </div>
    </div>
  </section>

  <div class="section destacados" style="background:#f2f2f2;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="blog-d">
            <p>COMPARTIR POR REDES SOCIALES &nbsp; &nbsp;
              <span>
                <a href="" class="text-facebook ico share_facebook"> <i class="fa fa-facebook"></i> </a>
                <a href="https://twitter.com/share" class="text-twitter ico share_twitter"> <i class="fa fa-twitter"></i> </a>
                <a href="" class="text-linkedin ico share_linkedin"> <i class="fa fa-linkedin"></i> </a>
                <a href="" class="text-google share_google"> <i class="fa fa-google-plus"></i> </a>
              </span>
            </p>
            <h3 class="review"> Es una carrera de larga distancia que consiste en correr una distancia de 42 195 metros. </h3>
                            <div class="video">
                  <iframe class="text-youtube"  id="ytplayer" type="text/html" width="200" height="100%"
                    src="https://www.youtube.com/embed/fju5ubdzEmE" frameborder="0" allowfullscreen>
                  </iframe>
                </div>
                            <div class="blog-text">
              <p>
                Su origen se encuentra en el mito de la gesta del soldado griego Filípides, quien en el año 490 a. C. habría muerto de fatiga tras haber corrido unos 37 km desde Maratón hasta Atenas para anunciar la victoria sobre el ejército persa. En realidad Filípides recorrió el camino desde Atenas hasta Esparta para pedir refuerzos, lo que serían unos 225 kilómetros. Aun así, el mito ganó mucha popularidad sobre lo que realmente sucedió.              </p>
              <div class="row">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                  <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                                                </ol>
                      <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                              <img src="tema/images/system_imgs/4b1fb1a94d71ae223bb1d4e9e1ac21a80bfe5f2c64631b31bagalery_2.jpg" alt="galery_event" style="width: 100%">
                            </div>
                                                                                  <div class="item">
                              <img src="tema/images/system_imgs/c72192b7c64ced382b4a1ce9b4d6bd862bcbaaeb4dc690b4c6galery1.jpg" alt="galery_event" style="width: 100%">
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
                                    <div class="clearfix"></div>
                <br />
                <div class="clearfix"></div>
                <div class="col-md-12"> 
                  <div class="map_canvas" style="height:350px; margin-top: 60px;"></div>
                </div>
                <div class="clearfix"></div>
                <br />
                                <div class="col-md-12 top">
                  <h5>T&Eacute;RMINOS Y CONDICIONES</h5>
                  <p> Al conocer esto, los griegos decidieron que si las mujeres de Atenas no recibían la noticia de la victoria griega antes de 24 horas, coincidiendo con la puesta del Sol, serían ellas mismas quienes matarían a sus hijos y se suicidarían a continuación. Los griegos ganaron la batalla, pero les llevó más tiempo del esperado, así que corrían el riesgo de que sus mujeres, por ignorarlo, ejecutasen el plan y matasen a los niños y se suicidasen después. </p>
                  <br />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="blog-d-right">
            <ul class="blog-d-right00">
                          </ul>
          </div>
          <div class="opor">
            <h5>ORGANIZADO POR</h5>
            <div class="blog-d-right">
              <div class="blog-d-right-w">
                <h5>
                  Cristian Ramirez Martinez Ramirez                </h5>
                <div style="background-size:100% 100%;background-image:url('tema/images/system_imgs/10153909709939093.jpg');background-repeat: no-repeat;" class="blog-d-right-w-img img_p"></div>
                <h6>Email</h6>
                <a target="_blank" href="mailto:martinez.crizz_old@gmail.com">
                  martinez.crizz_old@gmail.com                </a> 
                <br />
                <br />
                <div class="blog-d-right-w-img">
                  <a target="_blank" href="" class="text-facebook"> 
                    <i class="fa fa-facebook"></i> 
                  </a>
                  <a target="_blank" href="" class="text-twitter"> 
                    <i class="fa fa-twitter"></i> 
                  </a>
                  <a target="_blank" href="" class="text-you"> 
                    <i class="fa fa-youtube-play"></i> 
                  </a>
                  <a target="_blank" href="" class="text-google"> 
                    <i class="fa fa-google-plus"></i> 
                  </a>
                 </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- End Team Members -->
    </div>
    <!-- .container -->
  </div>

  <!-- Modal tickets -->
  <div class="logi-box box_modal modal fade" id="modal-form-tickets" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h3>ENTRADAS</h3>
        <div class="blog-d-right">
          <ul class="blog-d-right00">
            <div class="list_tickets"></div>
          </ul>
        </div>
        <div class="form-group">
          <h5 align="center"><b>Valor total a pagar</h5>
          <h1 align="center" class="ttl_blue total_pay"></h1>
        </div>
        <div class="row btn_buy_hidden hidden">
          <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-block btn_buy" id="btn_comprar" data-toggle="modal" data-target="#modal-form-dinamic">SIGUIENTE</a>                
          </div>
        </div>
      </div>           
    </div>
  </div>

  <!-- Modal formulario dinámico -->
  <div class="logi-box box_modal modal fade" id="modal-form-dinamic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <h3>REGISTRARME AL EVENTO</h3>
        <div class="content_form"></div>
      </div>           
    </div>
  </div>

</div>

      <!--
      
<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
<script type="text/javascript" src="tema/js/script_buy.js"></script>

<script>
  $(document).on("click",".save_proposal",function(){
    $("#form-sponsor").submit();
  });
  $(document).ready(function() { 
    
    new Clipboard('.btn-url');

    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

    function load_map() {
      var myLatlng = new google.maps.LatLng(6.242268188654924, -75.57723373174667);
      var myOptions = {
          zoom: 16,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
      };
      map = new google.maps.Map($(".map_canvas").get(0), myOptions);
      var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: ''
      });
    }
    load_map();
  });
</script>  	
      
      -->
      
      
      
      
      
      
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

<script type="text/javascript" src="tema/js/script_sponsor.js"></script>

<!--
<script src="tema/assets/1162a20a/jquery.js"></script>
<script src="tema/assets/a2d710a7/yii.js"></script>
<script src="tema/assets/a2d710a7/yii.validation.js"></script>
<script src="tema/assets/a2d710a7/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#form-sponsor').yiiActiveForm([{"id":"formsponsor-creditcard_titularname","name":"creditcard_titularname","container":".field-formsponsor-creditcard_titularname","input":"#formsponsor-creditcard_titularname","validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^.{5,100}$/,"not":false,"message":"Mínimo 5 y máximo 100 caracteres","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/[^a-zA-Z_ -]/,"not":true,"message":"Sólo se aceptan letras","skipOnEmpty":1});}},{"id":"formsponsor-creditcard_numbercard","name":"creditcard_numbercard","container":".field-formsponsor-creditcard_numbercard","input":"#formsponsor-creditcard_numbercard","validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^.{5,11}$/,"not":false,"message":"Mínimo 5 y máximo 11 caracteres","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});}},{"id":"formsponsor-creditcard_titularname","name":"creditcard_titularname","container":".field-formsponsor-creditcard_titularname","input":"#formsponsor-creditcard_titularname","validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^.{5,100}$/,"not":false,"message":"Mínimo 5 y máximo 100 caracteres","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/[^a-zA-Z_ -]/,"not":true,"message":"Sólo se aceptan letras","skipOnEmpty":1});}},{"id":"formsponsor-creditcard_numbercard","name":"creditcard_numbercard","container":".field-formsponsor-creditcard_numbercard","input":"#formsponsor-creditcard_numbercard","validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^.{5,11}$/,"not":false,"message":"Mínimo 5 y máximo 11 caracteres","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});}},{"id":"formsponsor-creditcard_numbercard","name":"creditcard_numbercard","container":".field-formsponsor-creditcard_numbercard","input":"#formsponsor-creditcard_numbercard","validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^.{5,11}$/,"not":false,"message":"Mínimo 5 y máximo 11 caracteres","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});}}], []);
});</script>
-->