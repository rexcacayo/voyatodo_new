'use strict';

angular.module('appVoyatodo')
        .controller('LoginCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
        
            $scope.login = function(){
//                alert("siii");
//                $.each(
//                    $scope,
//                    function($index,$valor)
//                    {
//                        alert($index+"--->"+$valor);
//                    }
//            );
                var datas = {
                    user: $scope.data.user_email,
                    pass: $scope.data.user_pass
                };
//                alert($scope.data.user_email);
//                
//                
//                $.post(
//                        "backend/modules/login/login.php",
//                        datas,
//                        function(data)
//                        {
//                            alert("sddd");
//                            
//                        },
//                        "json"                            
//                );
                
                
                
                $http.post("backend/modules/login/login.php", datas)
                 .success(function(datas) {
                   
                 if(datas.result[0].login==="success"){
                  console.log(datas)   ;
                  $cookieStore.put('userName', datas.result[0].username);
                  $cookieStore.put('userRol', datas.result[0].rol);
                  $cookieStore.put('userEmail', datas.result[0].email);
                  location.href='#/evento';
                 }
                 if(datas.result[0].login==="fail"){
                    SweetAlert.swal("Error de auntentificación verifique sus datos");
                     location.href='#/login';
                 }
                 if(datas.result[0].login==="no_active"){
                    SweetAlert.swal("Usuario No Activo, verifique su bandeja de correo");
                    location.href='#/login';
                 }
        });
                
            };
        })

.controller('LoginRegistroCrtl', function($scope,$http,SweetAlert)
    {
        
        $scope.create=function(){
        console.log($scope.data.user_type);
        if($scope.data.user_type=== undefined){
            SweetAlert.swal("Debe seleccionar el tipo de registro");
            return;
        }
        if($scope.data.user_rol=== undefined){
            SweetAlert.swal("Debe seleccionar el tipo de usuario que desea registrar");
            return;
        }
        if($scope.data.user_name=== undefined){
            SweetAlert.swal("Debe llenar el campo Nombre");
            return;
        }
        if($scope.data.user_email=== undefined){
            SweetAlert.swal("Debe llenar el campo Email");
            return;
        }
        if($scope.data.user_type=== 1){
           if($scope.data.user_lastname=== undefined){
                SweetAlert.swal("Debe llenar el campo de Apellido");
                return;
            } 
        }
         if($scope.data.user_type=== 1){
           if($scope.data.user_pass=== undefined){
                SweetAlert.swal("Debe llenar el campo de Contraseña");
                return;
            } 
        }
        if($scope.data.user_type=== 1){
           if($scope.data.user_confpass=== undefined){
                SweetAlert.swal("Debe llenar el campo de Confirmación Contraseña");
                return;
            } 
        }
         if($scope.data.user_type=== 1){
           if($scope.data.user_pass=== $scope.data.user_confpass){
                SweetAlert.swal("Las contraseñas deben coincidir contraseña");
                return;
            } 
        }
        if($scope.data.user_type=== 2){
           if($scope.data.user_telf1=== undefined){
                SweetAlert.swal("Debe llenar el campo de Telefono");
                return;
            } 
        }
        
            
            
         var datas= {
            user_name: $scope.data.user_name,
            user_lastname: $scope.data.user_lastname,
            email: $scope.data.user_email,
            password: $scope.data.user_pass,
            type: $scope.data.user_type,
            rol:1,
            telefono1:$scope.data.user_telf1,
            telefono2:$scope.data.user_telf2
        };
        
       
         $http.post("backend/modules/login/registro.php", datas)
                 .success(function(datas) {
                    
                 if(datas.result[0].register==="success"){
                 SweetAlert.swal("Excelente!", "Tu registro ha sido exisitoso!", "success");
                  location.href='#/inicio';
                 }
                 if(datas.result[0].register==="fail"){
                    SweetAlert.swal("Registro Fallido");
                     location.href='#/login';
                 }
                 if(datas.result[0].register==="already_register"){
                    SweetAlert.swal("Usuario Existente");
                    location.href='#/login';
                 }
        });
    };
    
})
.controller('LoginContrasenaCrtl',function($scope, $http, SweetAlert){
    $scope.cambiar = function(){
        
        var datas = {
            email: $scope.data.user_email
        };
        
        $http.post("backend/modules/login/forgot.php",datas)
                .success(function(datas) {
                 if(datas.result[0].forgot==="success"){
                    SweetAlert.swal("Excelente!", "Se ha enviado un correo a tu cuenta para realizar el cambio clave!", "success");
                    location.href='#/inicio';
                 }
                 if(datas.result[0].forgot==="no_found"){
                    SweetAlert.swal("Correo Inexistente");
                     location.href='#/login';
                 }
        });    
    };
    
})

.controller('LoginContrasenaCambioCrtl',function($scope, $routeParams, $http, SweetAlert){
    $scope.restablecer=function(){
    var datas = {
        token:$routeParams.token,
        pass: $scope.data.user_pass 
    };
 $http.post("backend/modules/login/change_pass.php", datas )
            .success(function(datas) {
            console.log(datas);
            if(datas.result[0].change==="success"){
                    SweetAlert.swal("Excelente!", "Se ha recuperado tu clave de manera exitosa!", "success");
                    location.href='#/inicio';
                 }
        });  
   };     
})

.controller('LoginActivasionCrtl', function($scope, $routeParams, $http){
   var datas = {
        token:$routeParams.token
    };
   
   $http.post("backend/modules/login/activation.php", datas)
            .success(function(datas) {
            console.log(datas.result[0].activate);
             if(datas.result[0].register==="succes"){
                  location.href='#/login';
                 }
        });

});

