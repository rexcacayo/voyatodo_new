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
            <li><a href="#/inicio">Inicio</a> </li>
            <li><a href="#/misproductos">mis productos</a> </li>
            <li><a href="#">finanzas</a> </li>
            <li><a href="#">alertas</a> </li>
            <li>
              <a href="#"> 
                Proveedor Prueba              </a>
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
        <li> <a href="#/inicio">INICIO</a>
        </li>
        <li><a href="#/misproductos">MIS PRODUCTOS</a> </li>
        <li><a href="#">FINANZAS</a> </li>
        <li><a href="#">ALERTAS</a> </li>
        <li> 
          <a href="blog.html">  <li>
            Proveedor Prueba          </a>
          <ul>
            <li><a href="tema/sponsor/perfil"> Mi Perfil </a> </li>              
            <li><a href="#/"> Cerrar sesi&oacute;n </a> </li>              
          </ul>
        </li>
      </ul>
      <!-- Mobile Menu End --> 	
<section id="inner01">
  <div id="main-slide" class="carousel00 slide slide_galery" data-ride="carousel">
    <div class="item active"> <img class="img-responsive02 heigtht_img" src="tema/images/inner-banner01.jpg" alt="slider">
      <div class="slider-content">
        <form id="form-update" action="#/perfil" method="post" enctype="multipart/form-data">
<input type="hidden" name="_csrf" value="M1Zxa1g3LUdhIj49IWBqIWsMMjQ7R2wCZxQmJSJRdxhnMyEjP1lDLg==">          <div class="col-md-12 text-center hitop">
            <div class="ttlperfil">Proveedor Prueba</div>                                 
          </div>
          <div class="col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5 col-xs-12">
            <center>
                                <div class="fa_circle field_photo"></div>
                   
            </center>
          </div>
          <div class="col-lg-2 col-sm-3 col-xs-12">
            <label for="files" data-role="button" class="btn btn_green top" data-inline="true" data-mini="true" data-corners="false">Cambiar foto</label>
            <div class="form-group field-formupdateinformation-user_photo">

<input type="hidden" name="FormUpdateInformation[user_photo]" value=""><input type="file" id="formupdateinformation-user_photo" class="change_photo" name="FormUpdateInformation[user_photo]" accept="image/*" style="margin-top: -35px; margin-left: 40px;">

<div class="help-block"></div>
</div>          </div>
          <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                        <input id="input-21d" value="4" type="number" readonly="true" class="rating" min=0 max=5 step=1 data-size="xs">          
          </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="col-md-12 col-sm-12 big-title text-center">
    <h1 class="">DATOS PERSONALES</h1> <p class="help-block">Informaci&oacute;n b&aacute;sica de la cuenta</p>
  </div>
  <div class="col-md-3 col-xs-12">
    <div class="panel-group" id="accordion">
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
                <input type="password" class="form-control password" placeholder="•••••••••••••••••••••">
                <div id="error1" style="color:#A94452;"></div>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">CONFIRMAR CONTRASE&Ntilde;A</label>
              <div class="col-md-12">
                <input type="password" class="form-control password_repeat" placeholder="•••••••••••••••••••••">
                <div id="error2" style="color:#A94452;"></div>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <a class="btn btn_sm btn-block save_password">ACTUALIZAR CONTRASE&Ntilde;A</a>
              </div>
            </div><!--row-->
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
              A&Ntilde;ADIR REDES SOCIALES
            </a>
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">FACEBOOK</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_facebook">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">TWITTER</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_twitter">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">GOOGLE+</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_google">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="col-md-12 control-label">YOUTUBE</label>
              <div class="col-md-12">
                <input type="text" value="" class="form-control txt_youtube">
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <div class="col-md-12">
                <div id="error3" style="color:#A94452;"></div>
                <a class="btn btn_sm btn-block save_social">GUARDAR</a>
              </div>
            </div><!--form-group-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-xs-12">
    <div class="col-md-12 col-xs-12 datos">
      <div class="separator">
        DATOS PERSONALES DEL USUARIO
      </div>
    </div>
    <div class="form-horizontal">
       <div class="form-group">
         <label class="col-md-4 control-label">NOMBRE</label>
         <div class="col-md-8">
          <div class="form-group field-formupdateinformation-username required">

<input type="text" id="formupdateinformation-username" class="form-control" name="FormUpdateInformation[username]" value="Proveedor">

<div class="help-block"></div>
</div>         </div>
       </div><!--form-group-->
       <div class="form-group">
         <label class="col-md-4 control-label">APELLIDO</label>
         <div class="col-md-8">
          <div class="form-group field-formupdateinformation-last_name">

<input type="text" id="formupdateinformation-last_name" class="form-control" name="FormUpdateInformation[last_name]" value="Prueba">

<div class="help-block"></div>
</div>         </div>
       </div><!--form-group-->
       <div class="form-group">
         <label class="col-md-4 control-label">E-MAIL</label>
         <div class="col-md-8">
          <input readonly="true" value="proveedor@email.com" class = "form-control">
         </div>
       </div><!--form-group-->
       <div class="form-group">
         <label class="col-md-4 control-label">TEL&Eacute;FONO 1</label>
          <div class="col-md-8">
            <div class="form-group field-formupdateinformation-user_phone1">

<input type="text" id="formupdateinformation-user_phone1" class="form-control" name="FormUpdateInformation[user_phone1]" value="123456789">

<div class="help-block"></div>
</div>          </div>
       </div><!--form-group-->
       <div class="form-group">
         <label class="col-md-4 control-label">TEL&Eacute;FONO 2</label>
          <div class="col-md-8">
            <div class="form-group field-formupdateinformation-user_phone2">

<input type="text" id="formupdateinformation-user_phone2" class="form-control" name="FormUpdateInformation[user_phone2]" value="123456">

<div class="help-block"></div>
</div>          </div>
       </div><!--form-group-->
       <div class="form-group">
        <div class="col-md-12">
          <a class="btn btn_sm btn-block save_information">GUARDAR INFORMACI&Oacute;N</a>
        </div>
       </div><!--form-group-->
    </div><!--FORM-->      
    </form> 
  </div>

  <div class="col-md-4 col-xs-12 col-md-offset-1">
    <div class="col-md-12 col-xs-12 datos">
      <div class="separator">
        EDITAR CUENTA PARA RECIBIR PAGOS
      </div>
      <p>
        VoyATodo enviar&aacute; los pagos recibidos de la compra de tus tickets
        vendidos durante la semana. Podr&aacute;s verla en tu extracto como
        VOYATODO SAS. Recuerda que la transferencia tiene un  costo de 15.000 COP
      </p>
    </div>
    <div class="form-horizontal">
                <div class="form-group">
            <label class="col-md-4 control-label">BANCO</label>
            <div class="col-md-8">
                            <div class="form-group field-formupdateinformation-fkbank">

<select id="formupdateinformation-fkbank" class="form-control fkbank" name="FormUpdateInformation[fkbank]">
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
</div>            </div>
          </div><!--form-group-->
          <div class="form-group">
          <label class="col-md-4 control-label">NOMBRE TITULAR</label>
          <div class="col-md-8">
            <input type="text" class="form-control txt_titularname">
          </div>
          </div><!--form-group-->
          <div class="form-group">
            <label class="col-md-4 control-label">C&Eacute;DULA</label>
            <div class="col-md-8">
              <input type="number" class="form-control txt_identification">
            </div>
          </div><!--form-group-->
          <div class="form-group">
            <label class="col-md-4 control-label">N° CUENTA</label>
            <div class="col-md-8">
              <input type="text" class="form-control txt_numberacount">
            </div>
          </div><!--form-group-->
          <div class="form-group">
            <label class="col-md-4 control-label">TIPO DE CUENTA</label>
            <div class="col-md-8">
                            <div class="form-group field-formupdateinformation-tipeacount">

<select id="formupdateinformation-tipeacount" class="form-control bank-type" name="FormUpdateInformation[tipeacount]">
<option value=""></option>
<option value="Corriente">Corriente</option>
<option value="Crédito">Crédito</option>
<option value="Ahorro">Ahorro</option>
</select>

<div class="help-block"></div>
</div>            </div>
          </div><!--form-group-->
          <div class="form-group">
            <div class="col-md-12">
              <a class="btn btn_sm btn-block create_acount_per">CREAR CUENTA</a>
            </div>
          </div><!--form-group-->
              </div><!--FORM-->      
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

<script type="text/javascript" src="tema/js/script_advertiser.js"></script>

<!--
<script src="tema/assets/1162a20a/jquery.js"></script>
<script src="tema/assets/a2d710a7/yii.js"></script>
<script src="tema/assets/a2d710a7/yii.validation.js"></script>
<script src="tema/assets/a2d710a7/yii.activeForm.js"></script>
<script src="tema/js/jquery.event.calendar.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#form-update').yiiActiveForm([{"id":"formupdateinformation-user_photo","name":"user_photo","container":".field-formupdateinformation-user_photo","input":"#formupdateinformation-user_photo","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.image(attribute, messages, {"message":"File upload failed.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Only files with these MIME types are allowed: .","extensions":["png","jpg","jpeg"],"wrongExtension":"Only files with these extensions are allowed: png, jpg, jpeg.","maxSize":2097152,"tooBig":"El tamaño máximo permitido es 2MB","maxFiles":1,"tooMany":"El máximo de archivos permitidos son 1","notImage":"The file \"{file}\" is not an image."}, deferred);}},{"id":"formupdateinformation-username","name":"username","container":".field-formupdateinformation-username","input":"#formupdateinformation-username","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Campo requerido"});yii.validation.regularExpression(value, messages, {"pattern":/[^a-zA-Z_ -]/,"not":true,"message":"Sólo se aceptan letras","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{3,100}$/,"not":false,"message":"Mínimo 3 y máximo 100 caracteres","skipOnEmpty":1});}},{"id":"formupdateinformation-last_name","name":"last_name","container":".field-formupdateinformation-last_name","input":"#formupdateinformation-last_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/[^a-zA-Z_ -]/,"not":true,"message":"Sólo se aceptan letras","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{3,100}$/,"not":false,"message":"Mínimo 3 y máximo 100 caracteres","skipOnEmpty":1});}},{"id":"formupdateinformation-user_phone1","name":"user_phone1","container":".field-formupdateinformation-user_phone1","input":"#formupdateinformation-user_phone1","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{5,45}$/,"not":false,"message":"Mínimo 5 y máximo 45 caracteres","skipOnEmpty":1});}},{"id":"formupdateinformation-user_phone2","name":"user_phone2","container":".field-formupdateinformation-user_phone2","input":"#formupdateinformation-user_phone2","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.regularExpression(value, messages, {"pattern":/^[0-9]+$/i,"not":false,"message":"Sólo se aceptan números","skipOnEmpty":1});yii.validation.regularExpression(value, messages, {"pattern":/^.{5,45}$/,"not":false,"message":"Mínimo 5 y máximo 45 caracteres","skipOnEmpty":1});}}], []);
});</script>
-->