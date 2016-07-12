'use strict';

angular.module('appVoyatodo').controller('InicioCompradorCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
        $scope.usuario_picture=$cookieStore.get('userPicture');
        
        $scope.eventos=function(){
            $http.post("backend/modules/comprador/evento/publish_events.php")
                 .success(function(response) {
                 console.log(response);  
                 $scope.datas = response;
            });
        };
    
        $scope.logout=function(){
                $cookieStore.remove('userFullname');
                $cookieStore.remove('userRol');
                $cookieStore.remove('userEmail');
                $cookieStore.remove('userId');
                $cookieStore.remove('userPicture');
                $cookieStore.remove('userFacebook');
                $cookieStore.remove('userTwitter');
                $cookieStore.remove('useryoutube');
                $cookieStore.remove('userGoogle');
                
                location.href='#/inicio';
        };
    
});
