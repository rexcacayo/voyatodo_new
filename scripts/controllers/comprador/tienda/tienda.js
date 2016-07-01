'use strict';

angular.module('appVoyatodo')
    .controller('CompradorTiendaCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
        $scope.usuario_fullname = $cookieStore.get('userFullname');
        $scope.usuario_id = $cookieStore.get('userId');
     
        
        $scope.logout=function(){
           
            $cookieStore.remove('userFullname');
            $cookieStore.remove('userRol');
            $cookieStore.remove('userEmail');
            $cookieStore.remove('userId');
            location.href='#/inicio';
        };        
    
    });
