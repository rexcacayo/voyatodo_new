'use strict';

angular.module('appVoyatodo')
    .controller('MisticketsCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore)
        {
        $scope.usuario_email = $cookieStore.get('userEmail');
        $scope.id_profile = $cookieStore.get('userId');
     
        
        $scope.logout=function(){
           
            $cookieStore.remove('userEmail');
            $cookieStore.remove('userName');
            $cookieStore.remove('userRol');
            location.href='#/inicio';
        };        
    });
