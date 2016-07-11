<?php

include_once '../../../app_config.php';
require_once(APPROOT . "models/event.php");


$fields = array(
    'fkuser' => 'fkuser',
    'fkstatus' => 'fkstatus',
    'event_name' => 'event_name',
    'event_stardate' => 'event_stardate',
    'event_starthour' => 'event_starthour',
    'event_country' => 'fkcountry',
    'event_city' => 'fkcity',
    'event_place' => 'event_place',
    'event_address' => 'event_address',
    'event_category_principal' => 'fkcategory1',
    'event_category_secundary' => 'fkcategory2',
    'event_review' => 'event_review',
    'event_description' => 'event_description',
    'event_crowfunding' => 'event_crowfunding',
    'event_url' => 'event_url',
    'event_linkvideo' => 'event_linkvideo',
    'event_terms' => 'event_terms',
    'event_visible' => 'event_visible');




//se verifica que accion viene
switch ($_REQUEST["accion"]) {
    case "guardar_evento":
        if ($_POST) {
            if (!$_POST['FormCreateEvent']['eventid']):
                $objEvent = New Event();
            else:
                $objEvent = Event::find($_POST['FormCreateEvent']['eventid']);
            endif;
            $objEvent->event_name = $_POST['FormCreateEvent']['event_name'];
            foreach ($fields as $k => $v):
                if (array_key_exists($k, $_POST['FormCreateEvent'])):
                    if ($_POST['FormCreateEvent'][$k]):
                        $objEvent->$v = $_POST['FormCreateEvent'][$k];
                    endif;
                endif;
            endforeach;
            //$objEvent->fkuser = 70;
            $objEvent->save();
            //verifico si viene imagen
            if (isset($_FILES)) {
                //armo la ruta
                $ruta = $_SERVER ['DOCUMENT_ROOT'] . "/templates/comprador/evento/v/$numero_carpeta_evento";
                //verifico si existe la ruta
                if (!is_dir($ruta)) {
                    //no existe la ruta, la creo
                    if (!mkdir($ruta)) {
                        //no se pudo crear la ruta
                        $retorna["estado"] = "no_creo_ruta";
                        $retorna["ruta"] = $ruta;
                        $retorna["mensaje"] = "No se Pudo Crear la Ruta para Guardar la imagen";
                        $retorna["datos"] = $_POST;
                        echo json_encode($retorna);
                        break;
                    }
                }

                //subo el archivo o los archivos

                $archivo = $_FILES['imagen_evento'];
                foreach ($archivo["name"] as $index => $valor) {
                    if ($archivo['error'][$index] == 0):
                        $uploaddir = $ruta;
                        $fileName = $archivo['name'][$index];
                        $newfilename = round(microtime(true)) . '_' . $fileName;
                        $uploadfile = $uploaddir . '/' . $newfilename;
                        $finfo = new finfo(FILEINFO_MIME_TYPE);
                        if (false === $ext = array_search(
                                $finfo->file($archivo['tmp_name'][$index]), array(
                            'jpg' => 'image/jpeg',
                            'png' => 'image/png',
                            'gif' => 'image/gif',
                                ), true
                                )):
                            $retorna["estado"][$index] = "error_subir_archivo";
                            $retorna["mensaje"][$index] = "Extension no valida";
                            $retorna["archivo"][$index] = $fileName;
                        else:
                            if (move_uploaded_file($archivo['tmp_name'][$index], $uploadfile)):
                                $retorna["estado"][$index] = "archivo_subido";
                                $retorna["mensaje"][$index] = "El Archivo fue Subido Correctamente";
                                $retorna["archivo"][$index] = $newfilename;
                            else:
                                $retorna["estado"][$index] = "error_subir_archivo";
                                $retorna["mensaje"][$index] = "No se pudo mover el archivo";
                                $retorna["archivo"][$index] = $uploadfile;
                            endif;
                        endif;
                    else:
                        $retorna["estado"][$index] = "error_subir_archivo";
                        $retorna["mensaje"][$index] = "Archivo Vacio";
                    endif;
                }
            }
            $retorna["datos"] = $_POST;
            $retorna["eventid"] = $objEvent->id;
            echo json_encode($retorna);
        }
        else {
            echo '403';
        }
        break;


    //guardar entrada
    case "guardar_entrada":
        if ($_POST) {
            echo json_encode($_POST);
        } else {
            echo '403';
        }
        break;

    //guardar cuenta pago
    case "guardar_cuenta_banco":
        if ($_POST) {
            echo json_encode($_POST);
        } else {
            echo '403';
        }
        break;


    //EDITAR TARJETA DE CRÉDITO PARA PAGOS
    case "guardar_tdc_pagos":
        if ($_POST) {
            echo json_encode($_POST);
        } else {
            echo '403';
        }
        break;

    //BUSCAR ASISTENTE
    case "buscar_asistente":
        if ($_POST) {
            echo json_encode($_POST);
        } else {
            echo '403';
        }
        break;


    //VALIDAR ASISTENTE
    case "validar_asistente":
        if ($_POST) {
            echo json_encode($_POST);
        } else {
            echo '403';
        }
        break;
}
?>