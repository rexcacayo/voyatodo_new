'use strict';

angular.module('appVoyatodo').controller('ListadoEventoCrtl',function($scope, $http){
 
    $scope.eventos=function(){
       
       $http.post("backend/modules/comprador/evento/publish_events.php")
                 .success(function(datas) {
                 console.log("resultadoevento:"+datas);
                 $scope.datas = datas;
                 
       });
               
    };
    
});
