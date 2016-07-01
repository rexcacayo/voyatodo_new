'use strict';

angular.module('appVoyatodo')
    .controller('CompradorContactCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
        $scope.usuario_fullname = $cookieStore.get('userFullname');
        $scope.usuario_id = $cookieStore.get('userId');
        $scope.usuario_email = $cookieStore.get('userEmail');
        
        
        $scope.logout=function(){
           
            $cookieStore.remove('userFullname');
            $cookieStore.remove('userRol');
            $cookieStore.remove('userEmail');
            $cookieStore.remove('userId');
            location.href='#/inicio';
        };
        $scope.enviar_correo=function(){
            if($scope.usuario_mensaje===undefined){
                SweetAlert.swal("Debe llenar el campo de mensaje");
                return;
            }
            
            var datas= {
                nombre:$scope.usuario_fullname,
                correo:$scope.usuario_email,
                mensaje:$scope.usuario_mensaje
            };
            console.log(datas);
             $http.post("backend/modules/comprador/correo_comprador.php", datas)
                 .success(function(datas) {
                     
                      if(datas.result[0].mensaje === "success"){
                            SweetAlert.swal("Su correo fue enviado");
                            location.href='#/inicio_comprador';
                            
                        }
                    });
        };
});
