<?php
//    echo "POST<pre>";
//    print_r($_POST);
//    echo "</pre>";exit;
//
//    echo "FILE<pre>";
//    print_r($_FILES["imagen_evento"]);
//    echo "</pre>";exit;
    

    //se verifica que accion viene
    switch($_REQUEST["accion"])
    {
        case "guardar_evento":
            if($_POST)
            {
                $numero_carpeta_evento=rand();  //aqui iria l numero del evento cundo se guarde en la base de datos
                //verifico si viene imagen
                if(isset($_FILES))
                {
                    //armo la ruta
                    $ruta = "../../../../templates/comprador/evento/v/$numero_carpeta_evento";
                    //verifico si existe la ruta
                    if( !is_dir($ruta))
                    {
                        //no existe la ruta, la creo
                        if( !mkdir($ruta))
                        {
                            //no se pudo crear la ruta
                            $retorna["estado"]="no_creo_ruta";
                            $retorna["mensaje"]="No se Pudo Crer la Ruta para Guardar la imagen";
                            $retorna["datos"]=$_POST;
                            echo json_encode($retorna);
                            break;
                        }                   
                    }

                    //subo el archivo o los archivos
                    
                    $archivo = $_FILES['imagen_evento'];                    
                    foreach($archivo["name"] as $index=>$valor)
                    {
                        $extension=basename($archivo['name'][$index]);
                        $time = time();									
                        if (move_uploaded_file($archivo['tmp_name'][$index], $ruta."/".$extension)) 
                        {
                                $retorna["estado"]="archivo_subido"; 
                                $retorna["mensaje"]="El Archivo fue Subido Correctamente";                        
                        }
                        else
                        { 
                                $retorna["estado"]="error_subir_archivo";
                                $retorna["mensaje"]="Ocurrio un Error al Subir el archivo";
                        }
                    }
                                 
                }
                $retorna["datos"]=$_POST;
                echo json_encode($retorna);               
            }
            else
            {
                echo '403';                
            }
        break;
        
        
        //guardar entrada
        case "guardar_entrada":
            if($_POST)
            {
                echo json_encode($_POST);
            }
            else
            {
                echo '403'; 
            }
        break;
        
        //guardar cuenta pago
        case "guardar_cuenta_banco":
            if($_POST)
            {
                echo json_encode($_POST);
            }
            else
            {
                echo '403'; 
            }
        break;
        
        
        //EDITAR TARJETA DE CRÉDITO PARA PAGOS
        case "guardar_tdc_pagos":
            if($_POST)
            {
                echo json_encode($_POST);
            }
            else
            {
                echo '403'; 
            }
        break;
        
        //BUSCAR ASISTENTE
        case "buscar_asistente":
            if($_POST)
            {
                echo json_encode($_POST);
            }
            else
            {
                echo '403'; 
            }
        break;
        
        
        //VALIDAR ASISTENTE
        case "validar_asistente":
            if($_POST)
            {
                echo json_encode($_POST);
            }
            else
            {
                echo '403'; 
            }
        break;
        
    }
?>