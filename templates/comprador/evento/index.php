<header class="clearfix" ng-controller="CompradorEventoCrtl"> 

	<!-- Start  Logo & Naviagtion  -->
  <header class="clearfix headerEvent" > 
    <div class="navbar navbar-default navbar-top">
      <div class="container-fluid">
        <div class="navbar-header"> 
          <!-- Stat Toggle Nav Link For Mobiles -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
          <!-- End Toggle Nav Link For Mobiles --> 
          <a class="navbar-brand" href="#/inicio_comprador"> <img alt="" src="tema/images/logo.png"> </a> </div>
      </div>
    </div>
  </header>
      	
<div id="container">
  <section id="inner01">
    <div id="main-slide" class="carousel00 slide slide_galery" data-ride="carousel">
      <div class="item active"> <img class="img-responsive1" src="tema/images/inner-banner01.jpg" alt="slider">
        <div class="slider-content">
          <div class="col-md-12 textEvent">
            <h3 class="animated3"> <span>estado de tu evento:</span> </h3>
            <p class="animated4"><a class="eventos public" >PUBLICAR</a> <a  ng-click="guardar_evento(data)" class="eventos save" >GUARDAR</a> </p>
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
      <div class="col-md-5">
        <a class="btn btn-left">DESCARGAR REPORTE</a>
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
          <p>0</p>
          <p>COMPRAS</p>
        </div>
      </div>
      <div class="col-md-6 summary-images">
        <div>
          <img src="tema/images/basket.png">
          <p>0</p>
          <p>DINERO RECIBIDO</p>
        </div>

        <div>
          <img src="tema/images/assistants.png">
          <p>0</p>
          <p>ASISTENTES</p>
        </div>
      </div>
    </div>
    <div class="separator"></div>
    <h4 class="align_left">RESUMEN DE INGRESOS</h4>
    <table class="table">
      <tr>
        <td><p>BOLETA</p></td>
        <td><p>VALOR</p></td>
        <td><p>VENDIDAS</p></td>
      </tr>
      <tr>
        <td>------</td>
        <td>------</td>
        <td>------</td>
      </tr>
      <tr>
        <td>TOTAL</td>
        <td>0 COP</td>
      </tr>
      <tr>
        <td><p>COMISI&Oacute;N (4.5%)</p></td>
        <td><p>0 COP</p></td>
      </tr>
      <tr class="bluish">
        <td class="ttl_blue">TOTAL A RECIBIR</td>
        <td class="ttl_blue">0 COP</td>
      </tr>
    </table>
  </div>
  
  
  
  <!--PESTAÑA DE INFORMACION DEL EVENTO -->

  <!-- Comienza la segunda opción del menú -->

  <form id="save-form" action="tema/account/guardar" method="post" enctype="multipart/form-data">      
  </form>

<form id="form-create"  enctype="multipart/form-data">
    <input  type="hidden" name="_csrf" ng-model="data._csrf" value="R2NVNTBhTVcVFxpjSTYKMR85FmpTEQwSEyECe0oHFwgTBgV9Vw8jPg==">    
    <input  type="hidden"  name="FormCreateEvent[status]" ng-model="data.status" value="1">
    <input  type="hidden"  name="FormCreateEvent[fkstatus]" ng-model="data.fkstatus" value="1">
    <input  type="hidden"  name="FormCreateEvent[eventid]" ng-model="data.eventid" value="">
    <input  type="hidden"  name="FormCreateEvent[userid]" ng-model="data.eventid" value="">
    
    <div class="menu-modal information-modal summary-modal dashboard-modal scrollbar" id="opcion2">
        
      <div class="separator"></div>
      
      <h3>INFORMACI&Oacute;N DEL EVENTO</h3>
      <label for="nombre_evento">
        NOMBRE DEL EVENTO
      </label>
      <div class="input-group">
        <div class="form-group field-formcreateevent-event_name required">

    <input ng-model="data.event_name" type="text" id="formcreateevent-event_name" class="form-control" name="FormCreateEvent[event_name]" placeholder="Mi primer evento" ng-blur="prueba_cambio()">
    <input type="hidden" value="guardar_evento" name="accion" id="accion" ng-model="data.accion">
<div class="help-block"></div>
</div>        <span class="input-group-addon">
          <span class="cont_name">0/80</span>
        </span>
      </div>
      <div class="separator"></div>
      <div class="row">
        <h3>FECHA Y HORA</h3>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <label class="lblnegro">FECHA INICO</label>
          <div class="input-group">
            <div class="form-group field-formcreateevent-event_stardate required">
<div ng-init="isReplyFormOpen = false" ng-show="isReplyFormOpen" id="replyForm">
<date-picker ng-model="data.event_stardate">
</date-picker>

</div>
<div class="input-group date"><input ng-model="data.event_stardate" type="text" id="formcreateevent-event_stardate" class="form-control" name="FormCreateEvent[event_stardate]" ng-model="data.status"><span class="input-group-addon" ng-click="isReplyFormOpen = !isReplyFormOpen"><i class="glyphicon glyphicon-calendar"></i></span></div>

<div class="help-block"></div>
</div>          
          </div> 
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 div_fecha">
            <label class="lblnegro">HORA INICIAL</label>
            <kk-timepicker settings="ctrl.settings1" ng-disabled="ctrl.disabled" ng-model="data.start_time"></kk-timepicker>    
                    
                   
                
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
          <label class="lblnegro">FECHA FINAL</label>
          
          <div class="input-group">
              <div class="form-group field-formcreateevent-event_enddate required">
<div ng-init="isReplyFormOpenF = false" ng-show="isReplyFormOpenF" id="replyForm">
<date-picker ng-model="data.event_enddate">
</date-picker>

</div>
<div class="input-group date"><input ng-model="data.event_enddate" type="text" id="formcreateevent-event_enddate" class="form-control" name="FormCreateEvent[event_enddate]" ng-model="data.status"><span class="input-group-addon" ng-click="isReplyFormOpenF = !isReplyFormOpenF"><i class="glyphicon glyphicon-calendar"></i></span></div>

<div class="help-block"></div>
</div>          </div> 
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 div_fecha">
          <label class="lblnegro">HORA FINAL</label>
          <kk-timepicker settings="ctrl.settings2" ng-disabled="ctrl.disabled" ng-model="data_end_time"></kk-timepicker>
        </div>                                        
      </div>

      <div class="separator"></div>

      <div class="row top">
        <div class="form-group" >
          <label class="col-sm-3 col-xs-3 lblnegro">PA&Iacute;S:</label>
          <div class="col-sm-9 col-xs-9">
                        <div class="form-group field-formcreateevent-event_country required">

<select  ng-model="data.event_country" id="formcreateevent-event_country" class="form-control cmb-country" name="FormCreateEvent[event_country]" onchange="/*
                  $.get( &quot;tema/account/getcities&quot;, { id: $(this).val() } )
                      .done(function( data ) {
                          $( &quot;#formcreateevent-event_city&quot; ).html( data );
                      }
                  );*/">
<option value="">Seleccione País</option>
<option value="1">Colombia</option>
</select>

<div class="help-block"></div>
</div>            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 col-xs-3 lblnegro">CIUDAD:</label>
           <div class="col-sm-9 col-xs-9">
              <div class="form-group field-formcreateevent-event_city required">

<select  ng-model="data.event_city" id="formcreateevent-event_city" class="form-control cmb-city" name="FormCreateEvent[event_city]">
<option value="">Seleccione Ciudad</option>
<option value="1">Cartajena</option>

</select>

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group top">
          <label class="col-sm-3 col-xs-3 lblnegro">LUGAR:</label>
           <div class="col-sm-9 col-xs-9">
              <div class="form-group field-formcreateevent-event_place required">

<input ng-model="data.event_place" type="text" id="formcreateevent-event_place" class="form-control event-place" name="FormCreateEvent[event_place]" placeholder="Museo">

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group top">
          <label class="col-sm-3 col-xs-3 lblnegro">DIRECCI&Oacute;N:</label>
           <div class="col-sm-9 col-xs-9">
              <div class="form-group field-formcreateevent-event_address required">

<input ng-model="data.event_address" type="text" id="datepicker" class="form-control text-address" name="FormCreateEvent[event_address]" placeholder="Cra 54 A # 112 C 09">

<div class="help-block"></div>
</div>          </div>
        </div>
      </div>
      <div class="col-lg-2 input-group search">
        <button type="button" id="search" class="btn btn-sm btn-success btn-block">Buscar</button>
      </div>
      
      <div class="input-group">
        <label>Ubicación del evento</label>
        <div class="map_canvas1" style="height:200px;"></div>
      </div>
      <div class="form-group field-formcreateevent-event_lat">

<input ng-model="data.event_lat" type="hidden" id="formcreateevent-event_lat" class="form-control event_lat" name="FormCreateEvent[event_lat]">

<div class="help-block"></div>
</div>      <div class="form-group field-formcreateevent-event_log">

<input ng-model="data.event_log" type="hidden" id="formcreateevent-event_log" class="form-control event_log" name="FormCreateEvent[event_log]">

<div class="help-block"></div>
</div> 

      <div class="separator"></div>

      <h3>CATEGOR&Iacute;AS DEL EVENTO</h3>
      <div class="row">
        <div class="form-group top">
          <label class="col-sm-3 col-xs-3 lblnegro">PRINCIPAL</label>
           <div class="col-sm-9 col-xs-9">
                            <div class="form-group field-formcreateevent-event_category_principal required">

<select  ng-model="data.event_category_principal" id="formcreateevent-event_category_principal" class="form-control" name="FormCreateEvent[event_category_principal]" onchange="
                    /*$.get( &quot;tema/account/getcategories&quot;, { id: $(this).val() } )
                        .done(function( data ) {
                            $( &quot;#formcreateevent-event_category_secundary&quot; ).html( data );
                        }
                    );*/
              ">
<option value="">Seleccione Categoría</option>
<option value="1">Música</option>
<option value="2">Deportes y bienestar</option>
<option value="3">Gastronomía</option>
<option value="4">Negocios</option>
<option value="5">Educación y cultura</option>
<option value="6">Fiesta</option>
<option value="7">Lanzamientos</option>
<option value="8">Otros</option>
</select>

<div class="help-block"></div>
</div>           </div>
        </div>
        <div class="form-group" >
          <label class="col-sm-3 col-xs-3 lblnegro">SECUNDARIA</label>
           <div class="col-sm-9 col-xs-9">
              <div class="form-group field-formcreateevent-event_category_secundary required">

<select  ng-model="data.event_category_secundary" id="formcreateevent-event_category_secundary" class="form-control" name="FormCreateEvent[event_category_secundary]">
<option value="">Seleccione categoría</option>
<option value="">Deporte</option>

</select>

<div class="help-block"></div>
</div>               
           </div>
        </div>
      </div>

      <div class="separator"></div>

      <h3>DETALLES DEL EVENTO</h3>
      <div class="row top">
        <div class="form-group">
          <label class="col-sm-3 col-md-12">RESUMEN DEL EVENTO</label>
          <div class="col-sm-9 col-md-12">
            <div class="form-group field-formcreateevent-event_review required">

<input ng-model="data.event_review" type="text" id="formcreateevent-event_review" class="form-control no-right-border text-review" name="FormCreateEvent[event_review]" placeholder="Este es el resumen de mi evento.">

<div class="help-block"></div>
</div>            <span class="input-group-addon">
              <span class="cont_review">0/140</span>
            </span>
          <p class="description_social">Resume tu Evento en 140 car&aacute;cteres o menos.</p>
          </div>     
        </div>
        <div class="form-group">
          <label class="col-md-12 top">DESCRIPCI&Oacute;N DEL EVENTO</label>
          <div class="col-md-12">
            <div class="form-group field-formcreateevent-event_description required">

<textarea  ng-model="data.event_description" id="formcreateevent-event_description" class="text-area text-description" name="FormCreateEvent[event_description]" placeholder="Esta es la descripción de mi primer evento."></textarea>

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label class="col-md-12 top">SELECCIONA EL TIPO DE EVENTO</label>
          <div class="container-fluid">
            <div class="input-group radios">
              <div class="col-md-4">
                <input ng-model="data.typeticket_name" type="radio" name="FormCreateEvent[typeticket_name]" value="1" class="inputradio type_tic" checked> <span class="inputfalso"> <label class="lbl_radio">GRATIS</label> </span> <br>          
              </div>
              <div class="col-md-4">
                <input ng-model="data.typeticket_name" type="radio" name="FormCreateEvent[typeticket_name]" value="2" class="inputradio type_tic"> <span class="inputfalso"> <label class="lbl_radio">PAGO</label> </span> <br>
              </div>
              <div class="col-md-4">
                <input ng-model="data.typeticket_name" type="radio" name="FormCreateEvent[typeticket_name]" value="4" class="inputradio type_tic"> <span class="inputfalso"> <label class="lbl_radio">LIBRE</label> </span> <br>
              </div>
              <div class="col-md-6 col-md-offset-3">
                <input ng-model="data.typeticket_name" type="radio" name="FormCreateEvent[typeticket_name]" value="3" class="inputradio type_tic"> <span class="inputfalso"> <label class="lbl_radio">PREVENTA</label> </span> <br>
              </div>
            </div>
          </div>
          <div class="hidden options-crowfunding"> 
            <div class="col-md-6 col-sm-4 col-xs-4 top">
              <label for="nombre_evento">
                META FINANCIERA
              </label>
            </div>
            <div class="col-md-6 col-sm-4 col-xs-4 top">
              <div class="input-group">
                <div class="input-group-addon input-group-addon0">$</div>
                <div class="form-group field-formcreateevent-event_crowfunding">

<input ng-model="data.event_crowfunding" type="text" id="formcreateevent-event_crowfunding" class="form-control meta_financiera align_right" name="FormCreateEvent[event_crowfunding]" placeholder="300000">

<div class="help-block"></div>
</div>              </div>
            </div>
          </div>
        </div>
        <div class="form-group top">
          <label class="col-md-12">URL DEL EVENTO</label>
          <div class="col-md-12">
            <span class="input-group-addon" id="basic-addon1">http://voyatodo.com/evento/v/</span> 
             <div class="form-group field-formcreateevent-event_url required">

<input ng-model="data.event_url" type="text" id="formcreateevent-event_url" class="form-control text-url" name="FormCreateEvent[event_url]">

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label class="col-md-12 top">VIDEO DE YOUTUBE O VIMEO</label>
          <div class="col-md-12">
            <div class="form-group field-formcreateevent-event_linkvideo">

<textarea  ng-model="data.event_linkvideo" id="formcreateevent-event_linkvideo" class="text-area text-video" name="FormCreateEvent[event_linkvideo]" placeholder="Pega aquí tu link de YouTube o Vimeo:"></textarea>

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="input-group search">
          <button type="button" id="search-video" class="btn btn-sm btn-block top_">Buscar</button>
        </div>
      </div><!--row-->  
      <div class="row">
        <div class="form-group">
          <label class="col-md-12">GALER&Iacute;A DE IM&Aacute;GENES</label>
          <div class="col-md-12">
            <div class="cargar top_menos btn-block"><label class="lbl_btn">SUBIR IM&Aacute;GENES</label>
              <div class="form-group field-formcreateevent-event_galery">

<input ng-model="data.event_galery" type="hidden" name="FormCreateEvent[event_galery][]" value="">
<!--<input ng-model="data.imagen_evento" type="file" id="formcreateevent-event_galery" class="eventos archivos upload-img" name="FormCreateEvent[event_galery][]" multiple accept="image/*">-->
<input ng-model="data.imagen_evento" type="file" id="formcreateevent-event_galery" class="eventos archivos upload-img" name="imagen_evento[]" multiple accept="image/*">

<div class="help-block"></div>
</div>            </div>
            <p class="description_social top__10">
              El tama&ntilde;o de las im&aacute;genes debe ser superior a 200px
              y M&aacute;ximo 3 
            </p>
          </div>
        </div>
        <div class="tumbnails-content"></div>
      </div>
      <div class="row">
        <div class="form-group top">
          <label for="nombre_evento" class="col-md-12">T&Eacute;RMINOS Y CONDICIONES</label>
          <div class="col-md-12">
            <div class="form-group field-formcreateevent-event_terms required">

<textarea  ng-model="data.event_terms" id="formcreateevent-event_terms" class="text-area text-terms" name="FormCreateEvent[event_terms]" placeholder="Agrega aquí los términos y condiciones del servicio"></textarea>

<div class="help-block"></div>
</div>          </div>
        </div>
      </div><!--row end-->
      <div class="row">
        <div class="form-group">
          <label for="cat_principal" class="col-md-12 top">ESTADO</label>
          <div class="col-md-12">
                        <div class="form-group field-formcreateevent-event_visible required">

<select  ng-model="data.event_visible" id="formcreateevent-event_visible" class="form-control" name="FormCreateEvent[event_visible]">
<option value=""></option>
<option value="0">ABIERTO</option>
<option value="1">PRIVADO</option>
</select>

<div class="help-block"></div>
</div>            <p class="description">
              Al poner un evento privado, s&oacute;lo acceder&aacute;s con la URL
            </p>
          </div>
        </div>
      </div><!--row end-->
      
      <div class="separator"></div>

      <h3>FORMULARIO DE REGISTRO</h3>
      <p class="help-block to">
        Agrega la información que crees pertinente al momento que los usuarios se registren a tu evento.
      </p>
      <div class="input-group top">
        <input  type="text" id="name" class="form-control form_regist" name="generic[]" value="NOMBRE" readonly style="border-right: 0px !important;">
      </div>  
      <hr/>
      <div class="input-group">
        <input n type="text" id="last_name" class="form-control form_regist" name="generic[]" value="APELLIDO" readonly style="border-right: 0px !important;">
      </div>
      <hr/>
      <div class="input-group">
        <input  type="text" id="email" class="form-control form_regist" name="generic[]" value="E-MAIL" readonly style="border-right: 0px !important;">
      </div>
      <hr/>
      <div class="input-group">
        <input  type="text" id="telefono" class="form-control form_regist" name="generic[]" value="TEL&Eacute;FONO" readonly style="border-right: 0px !important;">
      </div>
      <hr/>
      <div class="input-group divciudad">
        <input  type="text" id="ciudad" class="form-control form_regist" name="generic[]" value="CIUDAD" style="border-right: 0px !important;">
        <span class="input-group-btn">
          <a class="btn btn-default btn_delete" style="height: 108%;"><span class="glyphicon glyphicon-trash"></span></a>
        </span>
      </div>
      
      <div class="input-group">
        <div class="col-md-8 col-sm-8 col-xs-8  col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
            <a class="btn cargar btn-block" id="btnagregar_campo" >AGREGRAR CAMPO</a>
            
        </div>
      </div>

      <div class="separator"></div>

      <h3>ENVIAR MAIL DEL EVENTO A LOS USUARIOS</h3>

      <div class="form-group">
        <label class="col-md-12 top">ENVIAR CORREOS</label>
        <div class="row">
          <div class="input-group radios">
            <div class="col-md-4">
              <input ng-model="data.response" type="radio" name="response" value="0" class="inputradio type_response" checked> <span class="inputfalso"> <label class="lbl_radio">DESACTIVAR</label> </span> <br>          
            </div>
            <div class="col-md-4">
              <input ng-model="data.response" type="radio" name="response" value="1" class="inputradio type_response"> <span class="inputfalso"> <label class="lbl_radio">ACTIVAR</label> </span> <br>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden opt_mail">
        <!--<form id="mail-form" action="tema/account/evento?open=true" method="post" enctype="multipart/form-data">-->
<input ng-model="data._csrf" type="hidden" name="_csrf" value="R2NVNTBhTVcVFxpjSTYKMR85FmpTEQwSEyECe0oHFwgTBgV9Vw8jPg==">          
<div class="form-group field-mailsend-event_name">

<input ng-model="data.event_name" type="hidden" id="mail_event_name" class="form-control" name="MailSend[event_name]">

<div class="help-block"></div>
</div>          <div class="form-group field-mailsend-event_stardate">

<input ng-model="data.event_stardate" type="hidden" id="mail_event_stardate" class="form-control" name="MailSend[event_stardate]">

<div class="help-block"></div>
</div>          <div class="form-group field-mailsend-event_place">

<input ng-model="data.event_place" type="hidden" id="mail_event_place" class="form-control" name="MailSend[event_place]">

<div class="help-block"></div>
</div>          <div class="form-group field-mailsend-event_starthour">

<input ng-model="data.event_starthour" type="hidden" id="mail_event_starthour" class="form-control" name="MailSend[event_starthour]">

<div class="help-block"></div>
</div>          <div class="form-group field-mailsend-event_url">

<input ng-model="data.event_url" type="hidden" id="mail_event_url" class="form-control" name="MailSend[event_url]">

<div class="help-block"></div>
</div>          <div class="row top">
            <div class="form-group">
              <label for="nombre_evento" class="col-md-12">TITULO DEL EMAIL</label>
              <div class="col-md-12">
                <div class="form-group field-mailsend-subject required">

<input ng-model="data.subject" type="text" id="mailsend-subject" class="form-control text-email-send" name="MailSend[subject]" placeholder="Descripción de tu email">

<div class="help-block"></div>
</div>                <span class="input-group-addon">
                  <span class="cont_email">0/140</span>
                </span>
                <p class="description_social">Describe tu correo en 140 car&aacute;cteres o menos.</p>
              </div>
            </div>
            <div class="form-group">
              <label for="nombre_evento" class="col-md-12 top">DESCRIPCI&Oacute;N DEL EMAIL</label>
              <div class="col-md-12">
                <div class="form-group field-mailsend-message required">

<textarea  ng-model="data.message" id="mailsend-message" class="text-area text-description-email" name="MailSend[message]" placeholder="Texto del email"></textarea>

<div class="help-block"></div>
</div>              </div>
            </div>
            <div class="form-group">
              <label for="cat_principal" class="col-md-12">EMAIL DE RESPUESTA</label>
              <div class="col-md-12">
                <div class="form-group field-mailsend-response">

<input ng-model="data.response" type="email" id="mailsend-response" class="form-control no-right-border text-email-response" name="MailSend[response]" placeholder="nombre@correo.com">

<div class="help-block"></div>
</div>                <p class="description_social">Aqu&iacute; se enviar&aacute; respuesta de tus destinatarios</p>
              </div>
            </div>
            <div class="form-group">
              <label for="nombre_evento" class="col-md-12 top">SUBIR IM&Aacute;GEN DE CABECERA</label>
              <div class="col-md-12">
                <div class="cargar top_menos btn-block"><label class="lbl_btn">SUBIR IM&Aacute;GEN</label>
                <div class="form-group field-mailsend-image">

<input ng-model="data.image" type="hidden" name="MailSend[image]" value="">
<input ng-model="data.image" type="file" id="mailsend-image"  name="MailSend[image]" accept="image/*">

<div class="help-block"></div>
</div>                </div>
                <p class="description">El tama&ntilde;o de la im&aacute;gen debe ser de 600px</p>
              </div>
            </div>
            <div class="form-group">
              <label for="nombre_evento" class="col-md-12 top">A&Ntilde;ADIR DESTINATARIOS</label>
              <p class="description" style="color: #00C4FA !important;">
                Puedes subir un archivo de Excel o CVS con los correos en una sola columna descendente o agregar los correos separados por punto y coma (;)</p>
              <div class="col-md-12 top">
                <div class="cargar top_menos btn-block"><label class="lbl_btn">CARGAR DESTINARIOS</label>
                  <div class="form-group field-mailsend-file">

<input ng-model="data.file" type="hidden" name="MailSend[file]" value="">
<input ng-model="data.file" type="file" id="mailsend-file" class="eventos archivos" name="MailSend[file]">

<div class="help-block"></div>
</div>                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <textarea  ng-model="data.text_upload_email" class="text-area" name="text_upload_email"></textarea>
              </div>
            </div>      
          </div><!--row end-->
          <div class="row top">
            <div class="col-md-6 col-sm-6 col-xs-6">
              <a type="button" class="btn btn-block btn-yellow" data-toggle="modal" id="preview_email" data-target="#modal-preview-email">PREVIZUALIZAR</a>
            </div>    
            <div class="col-md-6 col-sm-6 col-xs-6">
               <a type="button" class="btn btn-block btn_green btn_send_email">ENVIAR EMAIL</a>
            </div>
          </div><!--row end-->
          <div class="separator"></div>
</div>

    </div><!--information-modal-->

    <!-- Comienza la tercera opción del menú DISEÑO -->

    <div class="separator"></div>

    <div class="menu-modal design-modal summary-modal dashboard-modal scrollbar"  id="opcion3">
      
      <div class="separator"></div>
      
      <h3>IM&Aacute;GEN DE BANNER</h3>
      <div class="row top">
        <div class="col-md-12">
          <div class="form-group">
            <label for="nombre_evento">CARGA TU PROPIA IM&Aacute;GEN</label>
            <div class="cargar top_menos btn-block"><label class="lbl_btn">SUBIR IM&Aacute;GEN</label>
              <div class="form-group field-formcreateevent-event_image">

<input ng-model="data.event_image2" type="hidden" name="FormCreateEvent[event_image]" value="">
<input ng-model="data.imagen_evento" type="file" id="formcreateevent-event_image-baner" class="eventos archivos upload-banner" name="imagen_evento_banner[]" accept="image/*">
<!--<input ng-model="data.imagen_opacidad" type="file" id="formcreateevent-event_image" class="eventos archivos upload-banner" name="FormCreateEvent[event_image]" accept="image/*">-->

<div class="help-block"></div>
</div>            </div>
            <p class="description_social">El tama&ntilde;o del banner debe ser superior a 1400 x 600 px</p>
          </div>
        </div>
      </div><!--row end-->

      <div class="separator"></div>

      <h3>OPACIDAD</h3>
      <div class="row top">
        <div class="form-group">
          <label for="nombre_evento" class="col-md-12">CAPA OSCURA</label>
          <div class="col-md-12">
            <div class="form-group field-formcreateevent-event_opacityimage">

<input ng-model="data.event_opacityimage" type="range" id="opacity-banner" class="form-control" name="FormCreateEvent[event_opacityimage]" value="0" min="0" max="1" step="0.1">

<div class="help-block"></div>
</div>          </div>
        </div>
      </div><!--row end-->
    </div><!--diseño-modal-->

      </form>
    
    <!-- Comienza la cuarta opción del menú  ENTRADAS-->
<form id="form-entradas" name="form-entradas" method="post" enctype="multipart/form-data">
    <div class="menu-modal tickets-modal summary-modal dashboard-modal tickets_principal scrollbar"  id="opcion5">

      <div class="separator"></div>

      <h3>TUS ENTRADAS</h3>
      <label for="nombre_evento">
        CARGA TU PROPIA ENTRADA
      </label>
      <div class="col-md-12 top">
        <a class="btn btn-yellow btn-block btn_create_ticket">CREAR ENTRADA NUEVA</a>
      </div>
      <p class="description_social">
        Crea nuevas entradas, edita o borra Entradas existentes
      </p>
      <div id="goal_complete" style="color:#A94452;"></div>

      <input ng-model="data_entrada.tickets" type="hidden"  name="FormCreateEvent[tickets]" class="json_tickets" value="">

      <div class="separator"></div>

      <h3>ENTRADAS CREADAS</h3>

      <div class="row div_tickets">
                <div class="new_ticket"></div>
      </div>
    </div>

    <div class="menu-modal tickets-modal summary-modal dashboard-modal create_tickets hidden scrollbar"  id="opcion-1">

      <div class="separator"></div>

      <div class="row">
        <div class="col-md-7 col-sm-6 col-xs-6">
          <h4>DETALLE DEL TICKET</h4>
        </div>
        <div class="col-md-5">
          <a class="btn btn_delete_ticket"> ELIMINAR </a>
        </div>
      </div>
      <div class="input-group top">
        <label for="nombre_evento"> NOMBRE DEL TICKET</label>
        <input ng-model="data_entrada.ticket_name" name="FormCreateEvent[ticket_name]" type="text" class="form-control ticket-name align_right" placeholder="Entrada general" />
        <span class="input-group-addon">
          <span class="cont_ticket-name">0/35</span>
        </span>
      </div>
      <div class="input-group top">
        <label for="nombre_evento"> DESCRIPCI&Oacute;N </label>
        <input ng-model="data_entrada.ticket_description" name="FormCreateEvent[ticket_description]" type="text" class="form-control ticket-description align_right" placeholder="Entrada general" />
        <span class="input-group-addon">
          <span class="cont_ticket-description">0/50</span>
        </span>
      </div>

      <div class="separator"></div>

      <h3>PRECIO DEL TICKET</h3>
      <div class="hidden options-pay">
        <div class="row top">
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento">
              VALOR DE ENTRADA
            </label>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <div class="input-group-addon input-group-addon0">$</div>
              <input data_entrada.ticket_value" name="FormCreateEvent[ticket_value]" type="number" class="form-control ticket-value align_right" placeholder="30000" />
            </div>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento" class="lbl_tickets">
              COMISI&Oacute;N
            </label>        
          </div>
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <input data_entrada.comision" type="text" class="form-control ticket-comision ttl_blue" readonly="true"/>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <p>
              Esta es la comisi&oacute;n que cobra Voy A Todo por el manejo de los eventos y el proveedor de pagos.
            </p>
          </div>

          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento" class="lbl_tickets">
              RECIBIR&Aacute;S
            </label>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <div class="input-group-addon input-group-addon0 ttl_blue">$</div>
              <input data_entrada.ticket_comision" name="FormCreateEvent[ticket_comision]" type="number" class="form-control ticket-pay-user" placeholder="28700"/>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden options-crowfunding">
        <div class="row top">
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento">
              VALOR DE BOLETA
            </label>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <div class="input-group-addon input-group-addon0">$</div>
              <input data_entrada.ticket_value" name="FormCreateEvent[ticket_value]" type="number" class="form-control ticket_value_crw align_right" placeholder="000" />
            </div>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento" class="lbl_tickets">
              DESCUENTO BOLETA
            </label>
          </div>
          <div class="col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <input data_entrada.descuento_boleta" type="text" class="form-control discount-ticket ttl_blue" readonly="true"/>
            </div>
          </div>

          <div class="col-md-12 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <div class="col-md-12">
                <input data_entrada.rango_descuento_boleta" type="range" max="100" step="0.1" id="increase_discount">
              </div>
              <p class="description_social">
                Puedes escoger el valor de descuento de tu boleta.
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento" class="lbl_tickets">
              COMISI&Oacute;N VAT
            </label>
            <p>
              Esta es la comisi&oacute;n que cobra Voy A Todo por el manejo de los eventos. 
            </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <input data_entrada.comision_vat" type="text" class="form-control ticket-comision ttl_blue" readonly="true"/>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento" class="lbl_tickets">
              VAS A RECIBIR
            </label>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <div class="input-group-addon input-group-addon0 ttl_blue">$</div>
              <input data_entrada.ticket_comision" name="FormCreateEvent[ticket_comision]" type="number" class="form-control ticket_pay_crw" placeholder="000" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 top">
            <label for="nombre_evento" class="lbl_tickets">
              PUNTO DE EQUILIBRIO
            </label>
            <p class="description_social">
              Cantidad de boletas para cubrir la meta financiera
            </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4 top">
            <div class="input-group">
              <input data_entrada.punto_equilibrio" name="qty_crowfunding" type="text" class="ttl_blue form-control qty_crowfunding" placeholder="0" readonly="true" />
            </div>
          </div>
        </div><!--row-->
        <div class="row top">
          <div class="col-md-12 col-sm-4 col-xs-4 top">
            <label for="nombre_evento">
              DESCRIBE EL INCENTIVO
            </label>
          </div>
          <div class="col-md-12 col-sm-4 col-xs-4">
            <input data_entrada.ticket_insentive" name="FormCreateEvent[ticket_insentive]" type="text" class="form-control ticket-insentive" placeholder="Camiseta y Gorra autografiada" />
          </div>
          <div class="col-md-12 col-sm-4 col-xs-4 top">
            <label for="nombre_evento">
              FECHA DE FINALIZACI&Oacute;N
            </label>
          </div>
          <div class="col-md-7 col-sm-4 col-xs-4">
            <div class="input-group">
              <div class="form-group field-formcreateevent-ticket_enddate">

<div class="input-group date"><input data_entrada.ticket_enddate" type="text" id="formcreateevent-ticket_enddate" class="form-control" name="FormCreateEvent[ticket_enddate]"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span></div>

<div class="help-block"></div>
</div>            </div>
          </div>
          <div class="col-md-12 col-sm-4 col-xs-4">
            <label for="nombre_evento">
              FECHA LIMITE PARA CUMPLIR LA META
            </label>
          </div>
          <div class="col-md-12 col-sm-4 col-xs-4">
            <label class="ticket_limit_date" style="color:#A94452;font-size: 15px;text-align: center;"></label>
          </div>
        </div>
      </div>
      <div class="row top">
        <div class="col-md-12 col-sm-4 col-xs-4">
          <label for="nombre_evento">
            CANTIDAD
          </label>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="input-group">
            <input ng-model="data_entrada.ticket_qty" name="FormCreateEvent[ticket_qty]" type="number" class="form-control" placeholder="100" />
          </div>
        </div>
        <div class="col-md-8 col-sm-4 col-xs-4">
          <input ng-model="data_entrada.sin_limite" class="inputradio out_limit" type="checkbox"><span class="inputfalso"> <label class="lbl_radio">SIN L&Iacute;MITE</label></span>
        </div>
      </div>
      <div class="row top">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <label for="nombre_evento">
            ENTRADAS RECLAMADAS
          </label>
        </div>
        <div class="entrance_tic">
          <div class="col-md-4 col-sm-4 col-xs-4">
            <input ng-model="data_entrada.ticket_seeclaim" type="radio" name="FormCreateEvent[ticket_seeclaim]" value="0" checked class="inputradio"> 
            <span class="inputfalso"/> <label class="lbl_radio">OCULTAR</label> </span>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4">
            <input ng-model="data_entrada.ticket_seeclaim" type="radio" name="FormCreateEvent[ticket_seeclaim]" value="1" class="inputradio"> 
            <span class="inputfalso"/> <label class="lbl_radio">MOSTRAR</label> </span>
          </div>
        </div>
        <div class="col-md-12 col-sm-4 col-xs-4">
          <p class="description_social">Ocultar o Mostrar las entradas reclamadas para el evento. </p>
        </div>
      </div>
      
      <div class="separator"></div>

      <h3>DISPONIBLE AL P&Uacute;BLICO</h3>
      <div class="row top">
        <div class="col-md-12 col-sm-4 col-xs-4">
          <label for="nombre_evento">
            DESDE
          </label>
        </div>
        <div class="col-md-6 col-sm-4 col-xs-4">
            <div class="form-group field-formcreateevent-ticket_start required">
<div ng-init="isReplyFormOpen = false" ng-show="isReplyFormOpen" id="replyForm">
<date-picker ng-model="data_entrada.tiket_stardate">
</date-picker>

</div>
<div class="input-group date"><input ng-model="data_entrada.tiket_stardate" type="text" id="formcreateevent-event_stardate" class="form-control" name="FormCreateEvent[event_stardate]" ng-model="data.status"><span class="input-group-addon" ng-click="isReplyFormOpen = !isReplyFormOpen"><i class="glyphicon glyphicon-calendar"></i></span></div>

<div class="help-block"></div>
</div>      
        </div>
        <div class="col-md-6 col-sm-4 col-xs-4">
          <input ng-model="data_entrada.inmediatamente" class="inputradio" type="checkbox">
          <span class="inputfalso"> 
            <label class="lbl_radio">INMEDIATAMENTE</label> 
          </span>
        </div>
        <div class="col-md-12 col-sm-4 col-xs-4">
          <label for="nombre_evento">
            HASTA
          </label>
        </div>
<div class="col-md-6 col-sm-4 col-xs-4">
<div class="form-group field-formcreateevent-ticket_end required">
    <div ng-init="isReplyFormOpen1 = false" ng-show="isReplyFormOpen1" id="replyForm">
        <date-picker ng-model="data_entrada.tiket_enddate"></date-picker>
    </div>
    <div class="input-group date">
        <input ng-model="data_entrada.tiket_enddate" type="text" id="formcreateevent-tiket_enddate" class="form-control" name="FormCreateEvent[event_enddate]">
        <span class="input-group-addon" ng-click="isReplyFormOpen1 = !isReplyFormOpen1">
            <i class="glyphicon glyphicon-calendar"></i>
        </span>
    </div>
    <div class="help-block"></div>
</div>         
</div>
        <div class="col-md-5 col-sm-4 col-xs-4">
          <input ng-model="data_entrada.dia_evento" class="inputradio" type="checkbox">
          <span class="inputfalso"> 
            <label class="lbl_radio">D&Iacute;A DEL EVENTO</label> 
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 top">
          <a class="btn btn-yellow btn-block btn_save_ticket hidden" ng-click="guardar_entrada(data_entrada)">GUARDAR</a>
          <a class="btn btn-yellow btn-block btn_update_ticket hidden">ACTUALIZAR</a>        
        </div>
        <div><center><div id="error_tickets" style="color:#A94452;"></div></center></div>
      </div>
    </div>
</form>

    
    
    <!-- Comienza la quinta opción del menú BANCO -->

    <div class="menu-modal bank-modal summary-modal dashboard-modal bank_acount scrollbar"  id="opcion4">
      
      <div class="separator"></div>

      <h4 class="h4_left">A&Ntilde;ADIR CUENTA PARA RECIBIR PAGOS</h4>
      <div class="row div_bank">
                    <div class="col-md-12 top">
              <a class="btn btn-yellow btn-block btn_pay">A&Ntilde;ADIR CUENTA</a>
            </div>
                    <div class="alert alert-danger hidden message" role="alert">
          <strong>No se pudo procesar tu requerimiento</strong>
        </div>
      </div>
      
      <div class="separator"></div>

      <h4 class="h4_left">M&Eacute;TODOS DE PAGO PUBLICIDAD </h4>
      <div class="row div_cards">
                <div id="new"></div>  
        <div class="col-md-12 top">
          <a class="btn btn-yellow btn-block btn_target">A&Ntilde;ADIR TARJETA</a>
        </div>
        <div class="alert alert-danger hidden messagec" role="alert">
          <strong>Tu tarjeta no se guardo</strong>
        </div>
      </div>

      <div class="separator top"></div>

      <h4 class="h4_left">PAGO DE CR&Eacute;DITO ACTUAL</h4>
      <div class="row div_pays">  
        <span class="col-md-12 ttl_blue">0 COP <br/></span><span class="col-md-12"> Pagar con:</span>
                <div id="new1"></div>
      </div><!--row end-->
    </div>

    <div class="menu-modal bank-modal summary-modal dashboard-modal edit_account hidden scrollbar"  id="opcion-2">

      <div class="separator"></div>
<form id="form-cuenta_pagos" name="form-cuenta_pagos" method="post" enctype="multipart/form-data">

      <div class="row">
        <div class="col-md-7 col-sm-6 col-xs-6">
          <h4>EDITAR CUENTA PARA RECIBIR PAGOS</h4>
        </div>
        <div class="col-md-5">
          <a class="btn btn_green btn_delete_bank"> ELIMINAR </a>
        </div>
      </div>
      <p class="description_social" style="margin-top: 40px; margin-bottom: 50px;">
        VoyATodo enviar&aacute; los pagos recibidos en la compra de tus 
        productos vendidos durante la semana. Podr&aacute;s verla en tu 
        extracto como VOYATODO SAS. Recuerda que la
        transferencia tiene un costo de 15.000 COP 
      </p>
      <div class="row">
        <div class="form-group">
          <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">BANCO</label>
          <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="form-group field-formcreateevent-fkbank">

<select  ng-model="data_cuenta_pagos.fkbank" id="formcreateevent-fkbank" class="form-control bank-name" name="FormCreateEvent[fkbank]">
<option value=""></option>
<option value="1">BANCOLOMBIA</option>
<option value="2">BANCO DE BOGOTÁ</option>
<option value="3">BANCO POPULAR</option>
<option value="4">BANCO CORPBANCA</option>
<option value="5">CITIBANK COLOMBIA</option>
<option value="6">BANCO GNB COLOMBIA</option>
<option value="7">BBVA COLOMBIA</option>
<option value="8">HELM BANK</option>
<option value="9">COLPATRIA</option>
<option value="10">BANCO DE OCCIDENTE</option>
<option value="11">BANCO CAJA SOCIAL - BCSC</option>
<option value="12">BANCO AGRARIO DE COLOMBIA</option>
<option value="13">BANCO DAVIVIENDA</option>
<option value="14">BANCO AV VILLAS</option>
<option value="15">BANCO WWB</option>
<option value="16">BANCO PROCREDIT</option>
<option value="17">BANCAMIA</option>
<option value="18">BANCO PICHINCHA</option>
<option value="19">BANCOOMEVA</option>
<option value="20">BANCO FALABELLA</option>
<option value="21">BANCO FINANDINA</option>
<option value="22">BANCO SANTANDER</option>
<option value="23">BANCO COOPERATIVO</option>
</select>

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label for="nombre_evento" class="col-md-3 col-sm-3 col-xs-3">NOMBRE TITULAR</label>
          <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="form-group field-formcreateevent-userbank_titularname">

<input ng-model="data_cuenta_pagos.userbank_titularname" type="text" id="formcreateevent-userbank_titularname" class="form-control bank-titular" name="FormCreateEvent[userbank_titularname]">

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label for="nombre_evento" class="col-md-3 col-sm-3 col-xs-3">C&Eacute;DULA</label>
          <div class="col-md-9 col-sm-9 col-xs-9">
             <div class="form-group field-formcreateevent-userbank_identification">

<input ng-model="data_cuenta_pagos.userbank_identification" type="number" id="formcreateevent-userbank_identification" class="form-control bank-identification" name="FormCreateEvent[userbank_identification]">

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label for="nombre_evento" class="col-md-3 col-sm-3 col-xs-3">N° DE CUENTA</label>
          <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="form-group field-formcreateevent-userbank_numberacount">

<input ng-model="data_cuenta_pagos.userbank_numberacount" type="number" id="formcreateevent-userbank_numberacount" class="form-control bank-numberacount" name="FormCreateEvent[userbank_numberacount]">

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label for="nombre_evento" class="col-md-3 col-sm-3 col-xs-3">TIPO DE CUENTA</label>
          <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="form-group field-formcreateevent-userbank_tipeacount">

<select  ng-model="data_cuenta_pagos.userbank_tipeacount" id="formcreateevent-userbank_tipeacount" class="form-control bank-type" name="FormCreateEvent[userbank_tipeacount]">
<option value=""></option>
<option value="Corriente">Corriente</option>
<option value="Crédito">Crédito</option>
<option value="Ahorro">Ahorro</option>
</select>

<div class="help-block"></div>
</div>          </div>
        </div>
      </div><!--row end-->
      <div class="row">
        <a ng-click="guardar_cuenta_banco(data_cuenta_pagos)" class="btn btn-yellow btn-block create_acount hidden">CREAR CUENTA</a>
        <a class="btn btn-yellow btn-block update_acount hidden">ACTUALIZAR CUENTA</a>
      </div><!--row end-->
    </div><!--modal end-->
    </form>
      
    <form id="form-tdc_pagos" name="form-tdc_pagos" method="post" enctype="multipart/form-data">

    <div class="menu-modal bank-modal summary-modal dashboard-modal edit_target hidden scrollbar"  id="opcion-3">
        
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
            <div class="form-group field-formcreateevent-creditcard_titularname">

<input ng-model="data_tdc_pagos.creditcard_titularname" type="text" id="formcreateevent-creditcard_titularname" class="form-control creditcard-name" name="FormCreateEvent[creditcard_titularname]">

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">NÂ° TARJETA</label>
          <div class="col-md-9 col-sm-9 col-xs-9">
            <div class="form-group field-formcreateevent-creditcard_numbercard">

<input ng-model="data_tdc_pagos.creditcard_numbercard" type="number" id="formcreateevent-creditcard_numbercard" class="form-control creditcard-number" name="FormCreateEvent[creditcard_numbercard]">

<div class="help-block"></div>
</div>          </div>
        </div>
        <div class="form-group">
          <label for="cat_principal" class="col-md-3 col-sm-3 col-xs-3">TIPO DE TARJETA</label>
          <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="form-group field-formcreateevent-creditcard_type">

<select  ng-model="data_tdc_pagos.creditcard_type" id="formcreateevent-creditcard_type" class="form-control creditcard-type" name="FormCreateEvent[creditcard_type]">
<option value=""></option>
<option value="MASTERCARD">MASTERCARD</option>
<option value="VISA">VISA</option>
<option value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
<option value="DINNERS">DINNERS</option>
</select>

<div class="help-block"></div>
</div>          </div>
        </div> 
      </div><!--row end-->
      <div class="row">
        <a ng-click="guardar_tdc_pagos(data_tdc_pagos)" class="btn btn-yellow btn-block">CREAR TARJETA</a>
        <a class="btn btn-yellow btn-block update_target hidden">ACTUALIZAR TARJETA</a>
      </div>
    </div><!--modal end-->
    </form>
      
      
    <!-- Comienza la sexta opción del menú COMPARTIR -->

    <div class="menu-modal share-modal summary-modal dashboard-modal scrollbar"  id="opcion6">

      <div class="separator"></div>

      <h3>COMPARTIR POR REDES SOCIALES</h3>
      <p class="description_social">
        Ahora puedes invitar a tus amigos, seguidores y
        contactos a trav&eacute;s de las redes sociales
      </p>
      <span>
        <a class="text-facebook red_margin no_share"> <i class="fa fa-facebook"></i> </a>
        <a class="text-twitter red_margin no_share"> <i class="fa fa-twitter"></i> </a>
        <a class="text-linkedin red_margin no_share"> <i class="fa fa-linkedin"></i> </a>
        <a class="text-google red_margin no_share"> <i class="fa fa-google-plus"></i> </a>
      </span>

      <div class="separator"></div>

      <h3>COMPARTIR POR E-MAIL</h3>
      <p class="description_social">
        Copia y pega el siguiente enlace en tu correo para <br>
        que tus invitados registren el evento:
      </p>
      <div class="col-md-12">
        <div class="form-group field-formcreateevent-event_url required">

<textarea  ng-model="data.event_url" id="txt_url" class="text-area" name="FormCreateEvent[event_url]" readonly></textarea>

<div class="help-block"></div>
</div>      </div>
      <div class="col-md-12 top">
        <a class="btn btn-yellow btn-block btn-url" data-clipboard-target="#txt_url">COPIAR ENLACE</a>
      </div>
    </div>
    
    
    
    

    <!-- Comienza la séptima opción del menú ASISTENTE-->
    <form id="form-asistente" name="form-asistente" method="post" enctype="multipart/form-data">

    <div class="menu-modal sponsor-modal summary-modal dashboard-modal scrollbar"  id="opcion7">

      <div class="separator"></div>

      <h3>PATROCINADOR DEL EVENTO</h3>
      <label for="nombre_evento">
        ACTIVA PARA CONSEGUIR PATROCINADOR
      </label>
      <div class="row">
        <div class="input-group">
          <div class="col-md-5">
            <input ng-model="data_asistente.event_sponsorship" type="radio" name="FormCreateEvent[event_sponsorship]" value="0" class="inputradio" checked=""> <span class="inputfalso"/> <label class="lbl_radio">PRIVADO</label></span> <br>
          </div>
          <div class="col-md-5">
            <input ng-model="data_asistente.event_sponsorship" type="radio" name="FormCreateEvent[event_sponsorship]" value="1" class="inputradio"> <span class="inputfalso"/> <label class="lbl_radio">ACTIVAR</label> </span>
          </div>
        </div>
      </div>
      <p class="description_social">
        Una vez activo debes esperar que un patrocinador
        se ponga en contacto contigo.
      </p>

      <div class="separator"></div>

      <h3>PATROCINADORES INTERESADOS</h3>
    </div>

    <!-- Comienza la octava opción del menú -->
    <div class="menu-modal asistent-modal summary-modal dashboard-modal mw100 scrollbar"  id="opcion8">

      <div class="separator"></div>

      <h3>LISTA ASISTENTES</h3>
        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
            <p class="help-block top">BUSCAR POR NOMBRE, APELLIDO O E-MAIL</p>
            <div class="input-group search">
              <div class="form-group field-formcreateevent-token_asistent">

<input ng-model="data_asistente.token_asistent" type="text" id="formcreateevent-token_asistent" class="form-control text-address top_menos" name="FormCreateEvent[token_asistent]">

<div class="help-block"></div>
</div>            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <a ng-click="buscar_asistente(data_asistente)" id="search_asistent" class="btn cargar_  hidden-sm hidden-xs top_50">BUSCAR</a>
            <a id="search_asistent" class="btn cargar_  btn-block hidden-md hidden-lg top_10">BUSCAR</a>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-right">
            <a id="download_asistent" class="btn cargar_  hidden-sm hidden-xs top_50">DESCARGAR REPORTE</a>
            <a id="download_asistent" class="btn cargar_  btn-block hidden-md hidden-lg top_10">DESCARGAR REPORTE</a>
          </div>
        </div><!--row-->
        
          <div class="table-resposive">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>C&Oacute;DIGO</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>EMAIL</th>
                  <th>TIPO ENTREGA</th>
                  <th>PRECIO</th>
                  <th>FECHA REGISTRO</th>
                  <th>ESTADO</th>
                </tr>
              </thead>
              <tbody class="tbody">
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
                <td>---</td>
              </tbody>
            </table>
          </div>
    </div>
    </FORM>
    
    
    <!-- Comienza la novena opción del menú acceso-->
    <form id="form-acceso" name="form-acceso" method="post" enctype="multipart/form-data">

    <div class="menu-modal access-modal summary-modal dashboard-modal scrollbar"  id="opcion4">

      <div class="separator"></div>

      <h3>VALIDAR ASISTENTE</h3>
      <div class="row">
        <div class="col-md-12">
          <p class="description_social">
            Para registrar el ingreso de tus invitados al evento debes
            solicitarles el c&oacute;digo que recibieron en el e-mail, en el cual
            se encuentra un c&oacute;digo PIN, ingr&eacute;salo a continuaci&oacute;n:
          </p>
        </div>
      </div><!--/row-->
      <div class="row top">
        <div class="form-group">
          <div class="col-sm-8 col-xs-12">
            <input ng-model="data_acceso.validar" type="text" class="form-control txt_pin">
          </div>
           <div class="col-sm-4 col-xs-12 ">
              <a ng-click="validar_asistente(data_acceso)" class="btn cargar_ btn-block">VALIDAR</a>
          </div>
        </div>
      </div><!--/row-->
    </div>
    </form>
    
    
    
    <!-- Comienza la decima opción del menú PUBLICIDAD-->

    <div class="menu-modal publicity-modal summary-modal dashboard-modal publicity_principal scrollbar"  id="opcion10">

      <div class="separator"></div>

      <h3>PUBLICIDAD</h3>
      <div class="row top">
        <div class="form-group">
          <div class="col-md-12">
            <label>DESTACA TU EVENTO A&Ntilde;ADIENDO PAUTA</label>
            <a class="btn btn-yellow btn-block">CREAR PAUTA</a>
            <p class="help-block">Tu evento en los destacados de Voyatodo.com</p>
          </div>
        </div>
      </div>

      <div class="separator"></div>

      <h3 class="top">CAMPA&Ntilde;AS CREADAS</h3>
      <div class="row top">
        <div class="form-group">
          <div class="col-md-12">
            <label>UNA VEZ PUBLIQUES TU EVENTO ESTA OPCI&Oacute;N SE HABILITAR&Aacute;</label>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- Modal preview email -->

  <div class="modal fade" id="modal-preview-email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">AS&Iacute; SE VERA TU EMAIL</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <img id="img_email" src="">
            </div>
            <div class="col-md-12">
              <h1>Invitaci&oacute;n al Evento</h1>
              <h2 class="titulo">{{dataok
                          .event_name}}</h2>
            </div>
            <div class="col-md-12 top"> 
              Fecha: <span class="text_date"></span><br>
              Lugar: <span class="lbl_address"></span><br>
              Hora: <span class="text_hour"></span><br>
            </div>
            <div class="col-md-12 top"> 
              <span id="md_text"></span>
            </div>
            <div class="col-md-12 top">
              <span id="md_description"></span>
            </div>
            <div class="col-md-12 top">
              Te puedes comunicar al correo: <span id="md_response">{{usuario_email}}/span>
            </div>
            <div class="col-md-12">
              <a class="btn btn-block btn_url_email" style="background: #f3d71a; color: #4B0082 !important;">VER DETALLES DEL EVENTO</a>
              <div id="information_url" style="color:#A94452;"></div>
            </div>
            <div class="col-md-12">
              <div class="divmess">No te vayas a quedar por fuera! entra en los detalles del Evento y adquiere tu entrada al Evento.</div>
            </div>
            <div class="col-md-12">
              <hr/>
            </div>
            <div class="col-md-12">
              <h6 align="center" style="font-style: italic;">Copyright &copy; 2016, VOY A TODO. All rights reserved.</h6>
              <h6 align="center" class="top">¿Tienes problemas?<br/>
                info@voyatodo.com</h6>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a type="button" class="btn btn-default" data-dismiss="modal">Cerrar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Contenido de la página -->
  <section id="photo" class="dashboard-row">
    <img id="img-banner" class="responsive-image" />
    <div class="shadow" ></div>

    <!-- Menu -->
    <div class="col-xs-2 col-md-2 col-sm-1 dashboard-column">
      <div class="dashboard-content col-sm-12">
        <div class="col-md-12 col-xs-0 col-md-offset-0 dashboard-element" id="dashboard-summary">
          <a class="img_click" name="summary-" style="cursor: pointer">
            <img  src="tema/images/summary-gray.png">
            <p class="hidden-sm hidden-xs">DASHBOARD</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-information">
          <a class="img_click" name="information-" style="cursor: pointer">
            <img src="tema/images/information-gray.png">
            <p class="hidden-sm hidden-xs">INFORMACI&Oacute;N</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-design">
          <a class="img_click" name="design-" style="cursor: pointer">
            <img src="tema/images/design-gray.png">
            <p class="hidden-sm hidden-xs">DISE&Ntilde;O</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-tickets">
          <a class="img_click menu_tickets" name="tickets-" style="cursor: pointer">
            <img src="tema/images/tickets-gray.png">
            <p class="hidden-sm hidden-xs">ENTRADAS</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-bank">
          <a class="img_click menu_banks" name="bank-" style="cursor: pointer">
            <img  src="tema/images/bank-gray.png">
            <p class="hidden-sm hidden-xs">BANCO</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 col-sm-offset-0  dashboard-element" id="dashboard-share">
          <a class="img_click" name="share-" style="cursor: pointer">
            <img  src="tema/images/share-gray.png">
            <p class="hidden-sm hidden-xs">COMPARTIR</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 col-sm-offset-1 dashboard-element" id="dashboard-sponsor">
          <a class="img_click" name="sponsor-" style="cursor: pointer">
            <img  src="tema/images/sponsor-gray.png">
            <p class="hidden-sm hidden-xs" style="margin-left: -18px;">PATROCINADOR</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-asistent">
          <a class="img_click" name="asistent-" style="cursor: pointer">
            <img src="tema/images/asistent-gray.png">
            <p class="hidden-sm hidden-xs">ASISTENTES</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-access">
          <a class="img_click" name="access-" style="cursor: pointer">
            <img src="tema/images/access-gray.png">
            <p class="hidden-sm hidden-xs">ACCESO</p>
          </a>
        </div>
        <div class="col-md-12 col-xs-0 dashboard-element" id="dashboard-publicity">
          <a class="img_click" name="publicity-" style="cursor: pointer">
            <img  src="tema/images/publicity-gray.png">
            <p class="hidden-sm hidden-xs">PUBLICIDAD</p>
          </a>
        </div>
      </div>
    </div>
    <!-- End Menu -->

    <div class="contenido-evento col-md-10">
      <!--<h1 class="titulo">Nombre de tu evento </h1>
      <div class="detalles">
        <div class="fecha">
          <i class="fa fa-calendar"></i>
          <label class="text_date"> S&aacute;bado 31 de Diciembre de 2016 </label>
          <br>
          <i class="fa fa-calendar"></i>
          <label class="text_date_finish"> Domingo 01 de Enero de 2017 </label>
        </div>

        <div class="hora">
          <i class="fa fa-clock-o"></i>
          <label class="text_hour"> 07:00 </label>
          <br>
          <i class="fa fa-clock-o"></i>
          <label class="text_hour_finish"> 17:00 </label>
        </div>
      </div>
      <div class="ubicacion">
        <i class="fa fa-map-marker"></i>
        <label class="lbl_address"> 
          Calle 00 # 00 - 00, 
        </label>
        <label class="lbl_city">
          Medell&iacute;n,
        </label>
        <label class="lbl_country">
          Colombia
        </label>
        <br>
        <label class="lbl_place"> 
          Lugar 
        </label>
      </div>-->
    </div>
  </section>

  <div class="section destacados" style="background:#f2f2f2;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="blog-d">
            <p>COMPARTIR POR REDES SOCIALES &nbsp; &nbsp;
              <span>
                <a class="text-facebook no_share"> <i class="fa fa-facebook"></i> </a>
                <a class="text-twitter no_share"> <i class="fa fa-twitter"></i> </a>
                <a class="text-linkedin no_share"> <i class="fa fa-linkedin"></i> </a>
                <a class="text-google no_share"> <i class="fa fa-google-plus"></i> </a>
              </span>
            </p>
            <h3 class="review txt_gray"> Resumen de tu evento </h3>
            <div class="video vy hidden">
              <iframe class="text-youtube"  id="ytplayer" type="text/html" width="200" height="100%"
                src="https://www.youtube.com/embed/5NV6Rdv1a3I" frameborder="0" allowfullscreen>
              </iframe>
            </div>
            <div class="video vm hidden">
              <iframe  class="text-vimeo" src="https://player.vimeo.com/video/25224442" width="200" height="100%" 
                webkitallowfullscreen mozallowfullscreen allowfullscreen>
              </iframe>
            </div>
            <div class="blog-text">
              <p class="text_description">
                En este lugar coloca la descripci&oacute;n de tu evento.
              </p>
              
              <div class="row">
                <div class="galeria hidden">
                  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators divli"></ol>
                    <div class="carousel-inner divimg" role="listbox"></div>
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
                <div class="clearfix"></div>
                <br />
                <div class="clearfix"></div>
                <div class="col-md-12"> 
                  <h5 class="txt_gray">UBICACIÓN DEL EVENTO</h5>
                  <div class="map_canvas" style="height:350px;"></div>
                </div>
                <div class="clearfix"></div>
                <br />
                <div class="col-md-12">
                  <h5 class="txt_gray">T&Eacute;RMINOS Y CONDICIONES</h5>
                  <p class="text_terms">En esta parte agrega los t&eacute;rminos y condiciones de tu evento</p>
                  <br />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="blog-d-right">
            <ul class="blog-d-right00 space_tickets">
              <div id="space_ticket_free"></div>
              <div id="space_ticket_pay"></div>
              <div id="space_ticket_crowfundig"></div>
            </ul>
          </div>
          <div class="opor">
            <h5 class="txt_gray">ORGANIZADO POR</h5>
            <div class="blog-d-right">
              <div class="blog-d-right-w">
                
                <h5>{{usuario_fullname}}</h5>
                <div style="background-size:100% 100%;background-image:url('{{user_picture}}');background-repeat: no-repeat;" class="blog-d-right-w-img img_p"></div>
                <h6>Email</h6>
                <a target="_blank" href="mailto:{{usuario_email}}">{{usuario_email}}</a> <br />
                <br />
                <div class="blog-d-right-w-img">
                  <a target="_blank" href="{{user_facebook}}" class="text-facebook"> 
                    <i class="fa fa-facebook"></i> 
                  </a>
                  <a target="_blank" href="{{user_twitter}}" class="text-twitter"> 
                    <i class="fa fa-twitter"></i> 
                  </a>
                  <a target="_blank" href="{{user_youtube}}" class="text-you"> 
                    <i class="fa fa-youtube-play"></i> 
                  </a>
                  <a target="_blank" href="{{user_google}}" class="text-google"> 
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
</div>


<!--<script type="text/javascript" src="tema/js/bootstrap-clockpicker.min.js"></script>-->
<!--<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>-->
<!--<script type="text/javascript" src="tema/js/script_maps.js"></script>-->
<!--
<script>
  $(document).ready(function(){
    new Clipboard('.btn-url');
    $(".public").click(function(){
      $("#form-create").submit();
    });

    $(".btn_send_email").click(function(){
      $("#mail-form").submit();
    });

    $('.save').click(function(){
      var form = $("#form-create").clone();
      $("#save-form").submit();
    });
    $(".trash").click(function(){
      $(".imgtrash").remove();
    });
  });

  $('.clockpicker').clockpicker({
    afterDone: function() {
      $(".text_hour").html($(".event-starthour").val());
      $(".text_hour_finish").html($(".event-endhour").val());
    }
  });
</script>	

-->


<script type="text/javascript" src="tema/js/script_account.js"></script>







