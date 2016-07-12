'use strict';

angular.module('appVoyatodo').controller('InicioCompradorCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
        $scope.usuario_picture=$cookieStore.get('userPicture');
         $scope.usuario_fullname = $cookieStore.get('userFullname');
            $scope.usuario_email = $cookieStore.get('userEmail');
            $scope.user_id=$cookieStore.get('userId');
            $scope.user_facebook=$cookieStore.get('userFacebook');
            $scope.user_youtube=$cookieStore.get('useryoutube');
            $scope.user_google=$cookieStore.get('userGoogle');
            $scope.user_twitter=$cookieStore.get('userTwitter');
           
            
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
