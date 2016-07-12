'use strict';

angular.module('appVoyatodo')
   .controller('MiseventosCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
        $scope.usuario_fullname = $cookieStore.get('userFullname');
        $scope.usuario_id = ($cookieStore.get('userId'));
        $scope.usuario_email = $cookieStore.get('userEmail');
        $scope.usuario_picture=$cookieStore.get('userPicture');
    
     $scope.eventos=function(){
            var id = $scope.usuario_id;
            $http.post("backend/modules/comprador/evento/publish_events.php?user_id="+id)
                 .success(function(response) {
                 console.log(response[0]);  
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
