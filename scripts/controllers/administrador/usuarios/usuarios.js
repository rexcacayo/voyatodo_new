'use strict';

angular.module('appVoyatodo')
    .controller('UsuariosCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore)
        {
            //GUARDAR ENTRADA
            $scope.buscar_usuario = function(data)
            {  
                data.accion="buscar_usuario";               
                $.post(
                        "backend/modules/administrador/usuarios/usuario.php",
                        data,
                        function(datos)
                        {
                            console.log(datos)   ;
                        },
                        "json"
                );
            }
            
           
           
            
            
           
            
            
           
            
        }
    );



