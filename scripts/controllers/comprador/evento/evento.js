'use strict';

angular.module('appVoyatodo')
    .controller
    (
        'CompradorEventoCrtl',
        function($scope)//, $http, SweetAlert, $cookies, $cookieStore)
        {
            $scope.guardar_evento = function(data)
            {  
                $("#accion").val("guardar_evento");
                var formData = new FormData($("#form-create")[0]);
                var ruta = "backend/modules/comprador/evento/crear_evento.php";  
                /*$.each(
                        formData,
                        function($index,$valor)
                        {
                            alert($index+"--->"+$valor);
                        }
                );*/
                $.ajax(
                        {
                            url: ruta,
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(datos)
                            {
                                console.log(datos)   ;
                            }
	            }
               );
                
                /*$.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data,
                        function(datos)
                        {
                            console.log(datos)   ;
                        },
                        "json"
                );*/
                
                /*$http.post
                (
                    "backend/modules/comprador/evento/crear_evento.php",
                    data
                )
                .success
                (
                    function(datas) 
                    {           
                        alert(datas.result[0]);                        
                   }
                );*/
            }
            
            
            
            //GUARDAR ENTRADA
            $scope.guardar_entrada = function(data_entrada)
            {  
                data_entrada.accion="guardar_entrada";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data_entrada,
                        function(datos)
                        {
                            console.log(datos)   ;
                        },
                        "json"
                );
            }
            
            //GUARDAR CUENTA BANCO
            $scope.guardar_cuenta_banco = function(data_cuenta_pagos)
            {  
                data_cuenta_pagos.accion="guardar_cuenta_banco";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data_cuenta_pagos,
                        function(datos)
                        {
                            console.log(datos)   ;
                        },
                        "json"
                );
            }
            
            //GUARDAR CUENTA BANCO
            $scope.guardar_tdc_pagos = function(data_tdc_pagos)
            {  
                data_tdc_pagos.accion="guardar_tdc_pagos";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data_tdc_pagos,
                        function(datos)
                        {
                            console.log(datos)   ;
                        },
                        "json"
                );
            }
            
            
            //BUSCAR ASISTENTE
            $scope.buscar_asistente = function(data_asistente)
            {  
                data_asistente.accion="buscar_asistente";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data_asistente,
                        function(datos)
                        {
                            console.log(datos)   ;
                        },
                        "json"
                );
            }
            
            
            //validar ASISTENTE
            $scope.validar_asistente = function(data_acceso)
            {  
                data_acceso.accion="validar_asistente";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data_acceso,
                        function(datos)
                        {
                            console.log(datos)   ;
                        },
                        "json"
                );
            }
            
        }
    );



