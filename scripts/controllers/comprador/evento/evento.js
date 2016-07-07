'use strict';

angular.module('appVoyatodo')
    .controller('CompradorEventoCrtl',function($scope, $http, SweetAlert, $cookies, $cookieStore)
        {
            
            $scope.user_id=$cookieStore.get('userId');
            $scope.guardar_evento = function(data)
            {  
                $("#accion").val("guardar_evento");
                var formData = new FormData($("#form-create")[0]);
                var eventid = ($cookieStore.get('eventId'));
                var ruta = "backend/modules/comprador/evento/crear_evento_prueba.php?event_id="+eventid;  
                
               
                $.ajax(
                        {
                            url: ruta,
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(datas)
                            {
                                console.log("evento:"+datas);
                                
                                }
                            });
	    }
               
   
                
               
            
            
            $scope.prueba_cambio = function(){
                $("#accion").val("guardar_evento");
                var formData = new FormData($("#form-create")[0]);
                var id = ($cookieStore.get('userId'));
                var ruta = "backend/modules/comprador/evento/crear_evento_prueba.php?user_id="+id;  
                
               
                $.ajax(
                        {
                            url: ruta,
                            type: "POST",
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(datas)
                            {
                                console.log("titulo:"+datas);
                                if(datas.result[0].event === "success"){
                                    $cookieStore.put('eventId', datas.result[0].eventid);
                                }
                            }
	            }
               );
            };
            
            //GUARDAR ENTRADA
            $scope.guardar_entrada = function(data_entrada)
            {
                var id = ($cookieStore.get('userId'));
                var eventid = ($cookieStore.get('eventId'));
                data_entrada.accion="guardar_entrada";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento_entrada.php?event_id="+eventid,
                        data_entrada,
                        function(datos)
                        {
                            console.log("entrada:"+datos) ;
                        },
                        "json"
                );
            };
            
            //GUARDAR CUENTA BANCO
            $scope.guardar_cuenta_banco = function(data_cuenta_pagos)
            
            {
                 var eventid = ($cookieStore.get('eventId'));
                data_cuenta_pagos.accion="guardar_cuenta_banco";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento_banco.php?event_id="+eventid,
                        data_cuenta_pagos,
                        function(datos)
                        {
                            console.log("cuentabancaria:"+datos)   ;
                        },
                        "json"
                );
            };
            
            //GUARDAR CUENTA tdc
            $scope.guardar_tdc_pagos = function(data_tdc_pagos)
            {
                 var eventid = ($cookieStore.get('eventId'));
                data_tdc_pagos.accion="guardar_tdc_pagos";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento_tdc.php?event_id="+eventid,
                        data_tdc_pagos,
                        function(datos)
                        {
                            console.log("tdc:"+datos)   ;
                        },
                        "json"
                );
            };
            
            
            //BUSCAR ASISTENTE
            $scope.buscar_asistente = function(data_asistente)
            {  
                data_asistente.accion="buscar_asistente";               
                $.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data_asistente,
                        function(datos)
                        {
                            console.log("buscar asistentes:"+datos)   ;
                        },
                        "json"
                );
            };
            
            
            //validar ASISTENTE
            $scope.validar_asistente = function(data_acceso)
            {  
               data_acceso.accion="validar_asistente";               
                /*$.post(
                        "backend/modules/comprador/evento/crear_evento.php",
                        data_acceso,
                        function("validarasistentes:"+datos)
                        {
                            console.log(datos)   ;
                        }
                        "json"
                )*/
            };
            
        });
        
