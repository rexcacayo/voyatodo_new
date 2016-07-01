'use strict';

angular.module('appVoyatodo', ['ngResource','ngRoute', 'ngCookies', 'oitozero.ngSweetAlert','mp.datePicker','ui.clockpicker'])
        .config(function($routeProvider){
            $routeProvider
            .when('/inicio',
            {
                templateUrl: 'templates/inicio.php',
                controller: 'InicioCrtl'
            })
            
                       .when('/login',
            {
                templateUrl: 'templates/login/index.php',
                controller: 'LoginCrtl'
            })
            
            .when('/registro',
            {
                templateUrl: 'templates/login/registro_nuevo_usuario.php',
                controller: 'LoginRegistroCrtl'
            })
            
            .when('/recuperar',
            {
                templateUrl: 'templates/login/recordar_contrasena.php',
                controller: 'LoginContrasenaCrtl'
            })
            
            .when('/password/:token',
            {
                templateUrl: 'templates/login/change_password.php',
                controller: 'LoginContrasenaCambioCrtl'
            })
            
            
            .when('/activar/:token',
            {
                templateUrl: 'templates/login/activation.php',
                controller: 'LoginActivasionCrtl'
            })

            
            .when('/tienda',
            {
                templateUrl: 'templates/tienda/index.php',
                controller: 'TiendaCrtl'
            })
            
            .when('/patrocinador',
            {
                templateUrl: 'templates/patrocinador/index.php',
                controller: 'PatrocinadorCrtl'
            })
            .when('/conversaciones',
            {
                templateUrl: 'templates/patrocinador/conversaciones/index.php',
                controller: 'ConversacionesCrtl'
            })
            .when('/perfil',
            {
                templateUrl: 'templates/patrocinador/perfil/index.php',
                controller: 'PatrocinadorPerfilCrtl'
            })    
            .when('/producto/v/6',
            {
                templateUrl: 'templates/producto/v/6/index.php',
                controller: 'ProductoCrtl'
            }) 
            .when('/evento/v/maraton-de-medellin',
            {
                templateUrl: 'templates/patrocinador/evento/v/maraton-de-medellin/index.php',
                controller: 'PatrocinadorEventoCrtl'
            }) 
            .when('/inicio/evento/v/maraton-de-medellin',
            {
                templateUrl: 'templates/evento/v/maraton-de-medellin/index.php',
                controller: 'EventoCrtl'
            }) 
            .when('/evento',
            {
                templateUrl: 'templates/evento/index.php',
                controller: 'ListadoEventoCrtl'
            }) 
            .when('/inicio/evento/categoria/musica',
            {
                templateUrl: 'templates/evento/categoria/musica/index.php',
                controller: 'CategoriaCrtl'
            }) 
             .when('/inicio/evento/categoria/deportes-y-bienestar',
            {
                templateUrl: 'templates/evento/categoria/deportes-y-bienestar/index.php',
                controller: 'CategoriaCrtl'
            }) 
             .when('/inicio/evento/categoria/gastronomia',
            {
                templateUrl: 'templates/evento/categoria/gastronomia/index.php',
                controller: 'CategoriaCrtl'
            }) 
             .when('/inicio/evento/categoria/negocios',
            {
                templateUrl: 'templates/evento/categoria/negocios/index.php',
                controller: 'CategoriaCrtl'
            }) 
             .when('/inicio/evento/categoria/educacion-y-cultura',
            {
                templateUrl: 'templates/evento/categoria/educacion-y-cultura/index.php',
                controller: 'CategoriaCrtl'
            }) 
             .when('/inicio/evento/categoria/fiesta',
            {
                templateUrl: 'templates/evento/categoria/fiesta/index.php',
                controller: 'CategoriaCrtl'
            }) 
             .when('/inicio/evento/categoria/lanzamientos',
            {
                templateUrl: 'templates/evento/categoria/lanzamientos/index.php',
                controller: 'CategoriaCrtl'
            }) 
             .when('/inicio/evento/categoria/otros',
            {
                templateUrl: 'templates/evento/categoria/otros/index.php',
                controller: 'CategoriaCrtl'
            }) 
            .when('/proveedor',
            {
                templateUrl: 'templates/proveedor/index.php',
                controller: 'ProveedorCrtl'
            }) 
            .when('/proveedor_misproductos',
            {
                templateUrl: 'templates/proveedor/misproductos/index.php',
                controller: 'MisProductosCrtl'
            }) 
            .when('/proveedor_perfil',
            {
                templateUrl: 'templates/proveedor/perfil/index.php',
                controller: 'ProveedorPerfilCrtl'
            }) 
            .when('/proveedor_producto/v/6',
            {
                templateUrl: 'templates/proveedor/producto/v/6/index.php',
                controller: 'ProveedorProductoCrtl'
            }) 
            .when('/contact',
            {
                templateUrl: 'templates/contact/index.php',
                controller: 'ContactCrtl'
            }) 
            .when('/administrador',
            {
                templateUrl: 'templates/administrador/index.php',
                controller: 'AdministradorCrtl'
            })
            .when('/solicitudes',
            {
                templateUrl: 'templates/administrador/solicitudes/index.php',
                controller: 'SolicitudesCrtl'
            })
            .when('/administrador_conversaciones',
            {
                templateUrl: 'templates/administrador/conversaciones/index.php',
                controller: 'AdministradorConversacionesCrtl'
            })
            .when('/parametros',
            {
                templateUrl: 'templates/administrador/parametros/index.php',
                controller: 'ParametrosCrtl'
            })
            .when('/usuarios',
            {
                templateUrl: 'templates/administrador/usuarios/index.php',
                controller: 'UsuariosCrtl'
            })
            .when('/administrador/evento/v/concierto-de-rock',
            {
                templateUrl: 'templates/administrador/evento/v/concierto-de-rock/index.php',
                controller: 'AdministradorEventoCrtl'
            }) 
            .when('/comprador_tienda',
            {
                templateUrl: 'templates/comprador/tienda/index.php',
                controller: 'CompradorTiendaCrtl'
            })
            .when('/inicio_comprador',
            {
                templateUrl: 'templates/comprador/index.php',
                controller: 'InicioCompradorCrtl'
            })
            .when('/miseventos',
            {
                templateUrl: 'templates/comprador/miseventos/index.php',
                controller: 'MiseventosCrtl'
            })
            .when('/mistickets',
            {
                templateUrl: 'templates/comprador/mistickets/index.php',
                controller: 'MisticketsCrtl'
            })
            .when('/comprador_contact',
            {
                templateUrl: 'templates/comprador/contact/index.php',
                controller: 'CompradorContactCrtl'
            })
            .when('/comprador_evento',
            {
                templateUrl: 'templates/comprador/evento/index.php',
                controller: 'CompradorEventoCrtl'
            })
            .when('/comprador_perfil',
            {
                templateUrl: 'templates/comprador/perfil/index.php',
                controller: 'CompradorPerfilCrtl'
            })
            .when('/favoritos',
            {
                templateUrl: 'templates/comprador/favoritos/index.php',
                controller: 'FavoritosCrtl'
            })
            .when('/comprador_producto/v/6',
            {
                templateUrl: 'templates/comprador/producto/v/6/index.php',
                controller: 'CompradorProductoCrtl'
            })
            .otherwise({
                redirectTo: '/inicio'
            });
        })
           
           
