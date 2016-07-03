'use strict';

angular.module('appVoyatodo')
        .controller('CompradorPerfilCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore, fileUpload){
            $scope.usuario_fullname = $cookieStore.get('userFullname');
            $scope.usuario_id = ($cookieStore.get('userId'));
            $scope.usuario_email = $cookieStore.get('userEmail');
            
            
           $scope.Get_Info=function(){
               var id = $scope.usuario_id;
               $http.post("backend/modules/comprador/perfil/datos_perfil.php?user_id="+id)
                .success(function(data) {
                    console.log(data);
                if(data.result[0].perfil === "succes"){
                    $scope.data=data.result[0];   
                    $scope.dataB=data.result[1];
                    $scope.dataS=data.result[2];    
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
            
             $scope.uploadFile = function(){
                var file = $scope.myFile;
                console.log('file is ' );
                console.dir(file);
                var uploadUrl = "tmp";
                fileUpload.uploadFileToUrl(file, uploadUrl);
            };
            
            $scope.datos_personales=function(data){
                var id = $scope.usuario_id;
                
                console.log(data);
                $http.post("backend/modules/comprador/perfil/datos_personales.php?user_id="+id, data)
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
                 $http.post("backend/modules/comprador/perfil/datos_bancarios.php?user_id="+id, dataB)
                 .success(function(dataB) {
                     
                    if(dataB.result[1].banco === "success"){
                            SweetAlert.swal("Su Información fue actualizada con exito");
                            location.href='#/inicio_comprador';
                        }
                    });
            };
            
            $scope.datos_contrasena=function(dataC){
                 var id = $scope.usuario_id;
                console.log(dataC);
                $http.post("backend/modules/comprador/perfil/datos_contrasena.php?user_id="+id,dataC)
                 .success(function(dataC) {
                     
                      if(data.result[0].contrasena === "success"){
                            SweetAlert.swal("Su Información fue actualizada con exito");
                            location.href='#/inicio_comprador';
                        }
                    });
            };
            
             $scope.data_network=function(dataS){
                 var id = $scope.usuario_id;
                console.log(dataS);
                $http.post("backend/modules/comprador/perfil/datos_network.php?user_id="+id, dataS)
                 .success(function(data) {
                  console.log(data);   
                      if(data.result[0].network === "success"){
                            SweetAlert.swal("Su Información fue actualizada con exito");
                            location.href='#/inicio_comprador';
                        }
                    });
            };
            
        });
