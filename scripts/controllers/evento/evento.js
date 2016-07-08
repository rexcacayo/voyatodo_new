'use strict';

angular.module('appVoyatodo')
    .controller('EventoCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
    $scope.usuario_fullname = $cookieStore.get('userFullname');
    $scope.usuario_id = $cookieStore.get('userId');
    $scope.usuario_correo = $cookieStore.get('userEmail');
     
        
        $scope.logout=function(){
           
            $cookieStore.remove('userFullname');
            $cookieStore.remove('userRol');
            $cookieStore.remove('userEmail');
            $cookieStore.remove('userId');
            location.href='#/inicio';
        };
    $scope.eventos=function(){
        
        var ruta = "backend/modules/comprador/evento/publish_events.php"; 
        var x = "";
            $.ajax(
               {
                    url: ruta,
                    type: "POST",
                    data: x,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(datas)
                        {
                            console.log("eventos_general1:"+datas);
                            console.log(datas.event_adress);
                            $scope.datas=datas;
                        }
                });
    };    
        
    });
    
    
    

