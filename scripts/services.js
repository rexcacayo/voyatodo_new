'use strict';

angular.module('appVoyatodo.services',[])
        .service('saludador',function(){
            this.salute=function(){ 
            alert('Hola!! Desde el lado oscuro de java');
        };
    })
        
       .service('adios',function(){
            this.chao=function(){ 
            alert('prueba');
        };
    })
    
    .service('fileUpload', ['$http', function ($http) {
    this.uploadFileToUrl = function(file, uploadUrl){
        var fd = new FormData();
        fd.append('file', file);
        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(){
        })
        .error(function(){
        });
    };
}]);
        

