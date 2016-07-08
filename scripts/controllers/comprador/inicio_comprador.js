'use strict';

angular.module('appVoyatodo').controller('InicioCompradorCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore){
    $scope.eventos=function(){
        
        var ruta = "backend/modules/comprador/evento/publish_event.php"; 
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
                            console.log("eventos_general:"+datas);
                            $scope.datas=datas;
                        }
                });
    };
    
});
