'use strict';

angular.module('appVoyatodo').controller('InicioCompradorCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
    $scope.usuario_fullname = $cookieStore.get('userFullname');
    $scope.usuario_id = $cookieStore.get('userId');
    $scope.usuario_correo = $cookieStore.get('userEmail');
    
   
    
        
        $scope.logout=function(){
           
            $cookieStore.remove('userFullname');
            $cookieStore.remove('userRol');
            $cookieStore.remove('userEmail');
            $cookieStore.remove('userId');
            $cookieStore.remove('userFacebook');
            $cookieStore.remove('userTwitter');
            $cookieStore.remove('useryoutube');
            $cookieStore.remove('userGoogle');
            $cookieStore.remove('userPicture');
            location.href='#/inicio';
        };
    
    

    
    
    
    
    
    
    
    
});
