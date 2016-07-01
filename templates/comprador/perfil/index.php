<!doctype html>
  <header class="clearfix"> 
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
              <form autocomplete="off" role="search" method="post" class="searchform">
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
              <a href="javasciprt:void(0)"> 
                {{usuario_fullname}}                </a>
              <ul class="ul-menu">
                <li><a href="#/comprador_evento?open=true"> Crear Evento </a> </li>              
                <li><a href="javasciprt:void(0)"> Mi Perfil </a> </li> 
                <li><a href="#/favoritos"> Favoritos </a> </li>
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
          <a href="">  <li>
            {{usuario_fullname}}         </a>
          <ul>
            <li><a href="#/comprador_evento"> Crear Evento </a> </li>              
            <li><a href="javasciprt:void(0)"> Mi Perfil </a> </li>   
            <li><a href="#/favoritos"> Favoritos </a> </li>           
            <li><a href="#/inicio"> Cerrar sesi&oacute;n </a> </li>              
          </ul>
        </li>
      </ul>
      <!-- Mobile Menu End --> 	
<section id="inner01">
  <div id="main-slide" class="carousel00 slide slide_galery" data-ride="carousel">
    <div class="item active"> <img class="img-responsive02 heigtht_img" src="tema/images/inner-banner01.jpg" alt="slider">
      <div class="slider-content">
          <form name="InicioData">
            <!--aqui consulta-->     
          </form>
          <form id="form-update" enctype="multipart/form-data" >
<input type="hidden" name="_csrf" value="bDBrU2p6UXk.RCQFEy0WHzRqKAwJChA8OHI8HRAcCyY4VTsbDRQ/EA==">          <div class="col-md-12 text-center hitop">
            <div class="ttlperfil">{{usuario_fullname}}</div>                                 
          </div>
          <div class="col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5 col-xs-12">
            <center>
                                <div class="fa_circle field_photo"></div>
                   
            </center>
          </div>
          <div class="col-lg-2 col-sm-3 col-xs-12">
            <label for="files" data-role="button" class="btn btn_green top" data-inline="true" data-mini="true" data-corners="false">Cambiar foto</label>
            <div class="form-group field-formupdateinformation-user_photo">

<input type="hidden" name="FormUpdateInformation[user_photo]" value="">
<input type="file" id="formupdateinformation-user_photo" class="change_photo" name="FormUpdateInformation[user_photo]" accept="image/*" style="margin-top: -35px; margin-left: 40px;" ng-model="data.usuario_foto">

<div class="help-block"></div>
</div>          </div>
          <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <input id="input-21d" value="0" type="number" readonly="true" class="rating" min=0 max=5 step=1 data-size="xs">          
          </div>
            <!--<button ng-click="foto_upload(data)">cambiar</button>-->
        </form>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="col-md-12 col-sm-12 big-title text-center">
    <h1 class="">DATOS PERSONALES</h1> <p class="help-block">Informaci&oacute;n b&aacute;sica de la cuenta</p>
  </div>

  <div class="col-md-4 col-xs-12 col-lg-4 col-sm-6">
    <div class="panel-group" id="accordion1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
              DATOS PERSONALES DEL USUARIO
            </a>
          </h4>
        </div>
       <form name="InfoPersonal" novalidate>
           
        <div id="collapse3" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="form-group">
                
               <label class="col-md-12 control-label">NOMBRE</label>
               <div class="col-md-12">
                <div class="form-group field-formupdateinformation-username required">

                    
<input type="text" id="formupdateinformation-username" class="form-control" name="FormUpdateInformation[username]" ng-model="data.usuario_nombre" />
<div class="help-block"></div>
</div>               </div>
            </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
             <label class="col-md-12 control-label">APELLIDO</label>
             <div class="col-md-12">
              <div class="form-group field-formupdateinformation-last_name">

<input type="text" id="formupdateinformation-last_name" class="form-control" name="FormUpdateInformation[last_name]" ng-model="data.usuario_apellido">

<div class="help-block"></div>
</div>             </div>
           </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
             <label class="col-md-12 control-label">E-MAIL</label>
             <div class="col-md-12">
              <input readonly="true" value="{{usuario_email}}" class = "form-control email">
             </div>
           </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
             <label class="col-md-12 control-label">TEL&Eacute;FONO 1</label>
              <div class="col-md-12">
                <div class="form-group field-formupdateinformation-user_phone1">

<input type="text" id="formupdateinformation-user_phone1" class="form-control" ng-model="data.usuario_telf1" name="FormUpdateInformation[user_phone1]">

<div class="help-block"></div>
</div>              </div>
           </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
             <label class="col-md-12 control-label">TEL&Eacute;FONO 2</label>
              <div class="col-md-12">
                <div class="form-group field-formupdateinformation-user_phone2">

<input type="text" id="formupdateinformation-user_phone2" class="form-control" ng-model="data.usuario_telf2" name="FormUpdateInformation[user_phone2]">

<div class="help-block"></div>
</div>              </div>
           </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <a class="btn btn_sm btn-block" ng-click="datos_personales(data)" >ACTUALIZAR INFORMACI&Oacute;N</a>
              </div>
            </div>
          </div>
        </div>
       </form>
      </div>
    </div>
  </div>  
    <form name="InfoBanco" novalidate>  
<div class="col-md-4 col-xs-12 col-sm-6">
<input type="hidden" name="_csrf" value="bDBrU2p6UXk.RCQFEy0WHzRqKAwJChA8OHI8HRAcCyY4VTsbDRQ/EA==">    
<div class="panel-group" id="accordion1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
              EDITAR CUENTA PARA RECIBIR PAGOS
            </a>
          </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="form-group">
               <label class="col-md-12 control-label">BANCO</label>
               <div class="col-md-12">
                               <div class="form-group field-formupdatebank-fkbank required">

<select id="formupdatebank-fkbank" class="form-control fkbank" name="FormUpdateBank[fkbank]" ng-model="dataB.usuario_banco">
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
</div>               </div>
            </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
             <label class="col-md-12 control-label">NOMBRE TITULAR</label>
             <div class="col-md-12">
              <div class="form-group field-formupdatebank-userbank_titularname required">

<input type="text" id="formupdatebank-userbank_titularname" class="form-control" name="FormUpdateBank[userbank_titularname]" ng-model="dataB.usuario_banco_nombretitular">

<div class="help-block"></div>
</div>             </div>
           </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
             <label class="col-md-12 control-label">C&Eacute;DULA</label>
              <div class="col-md-12">
                <div class="form-group field-formupdatebank-userbank_identification required">

<input type="text" id="formupdatebank-userbank_identification" class="form-control" name="FormUpdateBank[userbank_identification]" ng-model="dataB.usuario_banco_cedula">

<div class="help-block"></div>
</div>              </div>
           </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
             <label class="col-md-12 control-label">N° CUENTA</label>
              <div class="col-md-12">
                <div class="form-group field-formupdatebank-userbank_numberacount required">

<input type="text" id="formupdatebank-userbank_numberacount" class="form-control" name="FormUpdateBank[userbank_numberacount]" ng-model="dataB.usuario_banco_numerocuenta">

<div class="help-block"></div>
</div>              </div>
            </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="form-group">
               <label class="col-md-12 control-label">TIPO CUENTA</label>
                <div class="col-md-12">
                                    <div class="form-group field-formupdatebank-userbank_tipeacount required">

<select id="formupdatebank-userbank_tipeacount" class="form-control" name="FormUpdateBank[userbank_tipeacount]" ng-model="dataB.usuario_banco_tipocuenta">
<option value="">Seleccione una opción</option>
<option value="Corriente">Corriente</option>
<option value="Crédito">Crédito</option>
<option value="Ahorro">Ahorro</option>
</select>

<div class="help-block"></div>
</div>                </div>
             </div><!--form-group-->
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <a class="btn btn_sm btn-block" ng-click="datos_bancarios(dataB)">ACTUALIZAR CUENTA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</form>   
  <div class="col-md-4 col-lg-3 col-sm-6 col-xs-12">
    <div class="panel-group" id="accordion">
        <form name="InfoPass" novalidate>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
              CAMBIAR CONTRASE&Ntilde;A
            </a>
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">CONTRASE&Ntilde;A</label>
              <div class="col-md-12">
                <input type="password" class="form-control password" placeholder="•••••••••••••••••••••" ng-model="dataC.usuario_pass">
                <div id="error1" style="color:#A94452;"></div>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">CONFIRMAR CONTRASE&Ntilde;A</label>
              <div class="col-md-12">
                <input type="password" class="form-control password_repeat" placeholder="•••••••••••••••••••••" ng-model="dataC.usuario_confpass">
                <div id="error2" style="color:#A94452;"></div>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <a class="btn btn_sm btn-block" ng-click="datos_contrasena(dataC)">ACTUALIZAR CONTRASE&Ntilde;A</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
              <a href="javascript:void(0)" ng-click="isReplyFormOpen = !isReplyFormOpen">A&Ntilde;ADIR REDES SOCIALES</a>
            </a>
          </h4>
        </div>
          <div ng-init="isReplyFormOpen = false" ng-show="isReplyFormOpen" id="replyForm">
              <form name="NetSocial">   
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">FACEBOOK</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_facebook" ng-model="dataS.usuario_facebook">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">TWITTER</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_twitter" ng-model="dataS.usuario_twitter">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">GOOGLE+</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_google" ng-model="dataS.usuario_google">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">YOUTUBE</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_youtube" ng-model="dataS.usuario_youtube">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <div class="col-md-12">
                <div id="error3" style="color:#A94452;"></div>
                <a class="btn btn_sm btn-block" ng-click="data_network(dataS)">GUARDAR</a>
              </div>
            </div><!--form-group-->
          </div>
         </form>        
        </div>
      </div>
    </div>
  </div>
</div><!--container-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<script src="tema/js/star-rating.min.js" type="text/javascript"></script>


<script type="text/javascript">
  $(".change_photo").change(function(event) {
    $.each(event.target.files, function(index, file) {
      var reader = new FileReader();
        reader.onload = function(event) {  
        object = {};
        object.filename = file.name;
        object.data = event.target.result;
        $(".field_photo").attr("style","background: url(" + object.data + ") center no-repeat; background-size: auto 100%");
      };  
      reader.readAsDataURL(file);
    });
  });
  $(document).ready(function(){
    $(".save_information").click(function(){
      $("#form-update").submit();
    });
    $(".update_acount_bank_btn").click(function(){
      $("#form-update-bank").submit();
    });
  });
</script>  	<footer>
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
              <li><a href="#/inicio">Registro</a></li>
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
  
  <!--
<script src="tema/assets/1162a20a/jquery.js"></script>
<script src="tema/assets/a2d710a7/yii.js"></script>
<script src="tema/assets/a2d710a7/yii.validation.js"></script>
<script src="tema/assets/a2d710a7/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#form-update').yiiActiveForm([{"id":"formupdateinformation-user_photo","name":"user_photo","container":".field-formupdateinformation-user_photo","input":"#formupdateinformation-user_photo","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.image(attribute, messages, {"message":"File upload failed.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Only files with these MIME types are allowed: .","extensions":["png","jpg","jpeg"],"wrongExtension":"Only files with these extensions are allowed: png, jpg, jpeg.","maxSize":2097152,"tooBig":"El tamaño máximo permitido es 2MB","maxFiles":1,"tooMany":"El máximo de archivos permitidos son 1","notImage":"The file \"{file}\" is not an image."}, deferred);}},{"id":"formupdateinformation-username","name":"username","container":".field-formupdateinformation-username","input":"#formupdateinformation-username","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Campo requerido"});yii.validation.regularExpression(value, messages, {"pattern":/[^a-zA-Z_ -]/,"not":true,"message":"Sólo se aceptan letras","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{3,100}$/,"not":false,"message":"Mínimo 3 y máximo 100 caracteres","skipOnEmpty":1});}},{"id":"formupdateinformation-last_name","name":"last_name","container":".field-formupdateinformation-last_name","input":"#formupdateinformation-last_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/[^a-zA-Z_ -]/,"not":true,"message":"Sólo se aceptan letras","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{3,100}$/,"not":false,"message":"Mínimo 3 y máximo 100 caracteres","skipOnEmpty":1});}},{"id":"formupdateinformation-user_phone1","name":"user_phone1","container":".field-formupdateinformation-user_phone1","input":"#formupdateinformation-user_phone1","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{5,45}$/,"not":false,"message":"Mínimo 5 y máximo 45 caracteres","skipOnEmpty":1});}},{"id":"formupdateinformation-user_phone2","name":"user_phone2","container":".field-formupdateinformation-user_phone2","input":"#formupdateinformation-user_phone2","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{5,45}$/,"not":false,"message":"Mínimo 5 y máximo 45 caracteres","skipOnEmpty":1});}}], []);
jQuery('#form-update-bank').yiiActiveForm([{"id":"formupdatebank-fkbank","name":"fkbank","container":".field-formupdatebank-fkbank","input":"#formupdatebank-fkbank","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Seleccione un banco"});}},{"id":"formupdatebank-userbank_titularname","name":"userbank_titularname","container":".field-formupdatebank-userbank_titularname","input":"#formupdatebank-userbank_titularname","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Campo requerido"});}},{"id":"formupdatebank-userbank_identification","name":"userbank_identification","container":".field-formupdatebank-userbank_identification","input":"#formupdatebank-userbank_identification","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Campo requerido"});yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});}},{"id":"formupdatebank-userbank_numberacount","name":"userbank_numberacount","container":".field-formupdatebank-userbank_numberacount","input":"#formupdatebank-userbank_numberacount","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Campo requerido"});yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});}},{"id":"formupdatebank-userbank_tipeacount","name":"userbank_tipeacount","container":".field-formupdatebank-userbank_tipeacount","input":"#formupdatebank-userbank_tipeacount","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Seleccione tipo de cuenta"});}}], []);
});</script>
  -->