'use strict';

angular.module('appVoyatodo')
        .controller('CompradorPerfilCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
            $scope.usuario_fullname = $cookieStore.get('userFullname');
            $scope.usuario_id = ($cookieStore.get('userId'));
            $scope.usuario_email = $cookieStore.get('userEmail');
            
           $scope.Get_Info=function(){
               var id = $scope.usuario_id;
               $http.post("backend/modules/comprador/perfil/perfil.php",id)
                 .success(function(data) {
                     
                      if(data.result[0].personal === "success"){
                            
                        }
                    });
               
            };
        
            $scope.logout=function(){
                $cookieStore.remove('userFullname');
                $cookieStore.remove('userRol');
                $cookieStore.remove('userEmail');
                $cookieStore.remove('userId');
                location.href='#/inicio';
            };
            
            $scope.foto_upload=function(data){
                console.log(data);
            };
            $scope.datos_personales=function(data){
                var id = $scope.usuario_id;
                
                $http.post("backend/modules/comprador/perfil/datos_personales.php", data,id)
                 .success(function(data) {
                     
                      if(data.result[0].personal === "success"){
                            SweetAlert.swal("Su Información fue actualizada con exito");
                            location.href='#/inicio_comprador';
                        }
                    });
            };
            $scope.datos_bancarios=function(dataB){
                console.log(dataB);
                 var id = $scope.usuario_id;
                 $http.post("backend/modules/comprador/perfil/datos_bancarios.php", dataB, id)
                 .success(function(dataB) {
                     
                      if(dataB.result[0].banco === "success"){
                            SweetAlert.swal("Su Información fue actualizada con exito");
                            location.href='#/inicio_comprador';
                        }
                    });
            };
            
            $scope.datos_contrasena=function(dataC,id){
                 var id = $scope.usuario_id;
                console.log(dataC);
                $http.post("backend/modules/comprador/perfil/datos_contrasena.php", data)
                 .success(function(data) {
                     
                      if(data.result[0].contrasena === "success"){
                            SweetAlert.swal("Su Información fue actualizada con exito");
                            location.href='#/inicio_comprador';
                        }
                    });
            };
            
             $scope.data_network=function(dataS){
                 var id = $scope.usuario_id;
                console.log(dataS);
                $http.post("backend/modules/comprador/perfil/datos_network.php", dataS,id)
                 .success(function(dataS) {
                     
                      if(dataS.result[0].social === "success"){
                            SweetAlert.swal("Su Información fue actualizada con exito");
                            location.href='#/inicio_comprador';
                        }
                    });
            };
            
        });
