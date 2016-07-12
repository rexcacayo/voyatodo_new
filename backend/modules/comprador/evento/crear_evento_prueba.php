<?php
include_once '../../../app_config.php';
require_once("../../../models/event.php");
require_once("../../../models/EventImages.php");
require_once("../../../models/FormEventGeneric.php");
$vectorP = array(
    'event_name'
    , 'event_stardate'
    , 'event_enddate'
    , 'event_country'
    , 'event_city'
    , 'event_place'
    , 'event_address'
    , 'event_lat'
    , 'event_log'
    , 'event_category_principal'
    , 'event_category_secundary'
    , 'event_review'
    , 'event_description'
    , 'event_crowfunding'
    , 'event_url'
    , 'event_linkvideo'
    , 'event_terms'
    , 'event_visible'
    , 'event_image'
    , 'event_opacityimage');
$fields = array(
    'event_name' => 'event_name',
    'event_stardate' => 'event_stardate',
    'event_enddate' => 'event_enddate',
    'event_starthour' => 'event_starthour',
    'event_endhour' => 'event_endhour',
    'event_country' => 'fkcountry',
    'event_city' => 'fkcity',
    'event_place' => 'event_place',
    'event_address' => 'event_address',
    'event_category_principal' => 'fkcategory1',
    'event_category_secundary' => 'fkcategory2',
    'event_review' => 'event_review',
    'event_description' => 'event_description',
    'event_crowfunding' => 'event_crowfunding',
    'event_linkvideo' => 'event_linkvideo',
    'event_terms' => 'event_terms',
    'typeticket_name' => 'fktipetickect',
    'event_visible' => 'event_visible',
    'fkstatus' => 'fkstatus',
    'event_opacityimage' => 'event_opacityimage');
if ($_GET):
if ($_POST):
//    if ($_POST['FormCreateEvent']['eventid'] === ''):
//        $objEvent = New Event();
//    else:
//        $objEvent = Event::find($_POST['FormCreateEvent']['eventid']);
//    endif;
    if (array_key_exists('event_id', $_GET)):
        $objEvent = Event::find($_GET['event_id']);
    else:
        $objEvent = New Event();
    endif;
    if (array_key_exists('user_id', $_GET)):
        $objEvent->fkuser = $_GET['user_id'];
    endif;
    foreach ($fields as $vector => $campo):
        if (array_key_exists($vector, $_POST['FormCreateEvent'])):
            if ($_POST['FormCreateEvent'][$vector]):
                $objEvent->$campo = $_POST['FormCreateEvent'][$vector];
            endif;
        endif;
    endforeach;
    
endif;
endif;
$objEvent->save();
//if (Event::exists(array('conditions' => array('event_url' => $_POST['FormCreateEvent']['event_url'])))):
if (Event::exists(array('conditions' => array('event_url = ? and pkevent <> ?', $_POST['FormCreateEvent']['event_url'], $objEvent->pkevent)))):
    $objEvent->event_url = $_POST['FormCreateEvent']['event_url'] . '-' . $objEvent->pkevent;
else:
    $objEvent->event_url = $_POST['FormCreateEvent']['event_url'];
endif;
//imagenes del evento
$numero_carpeta_evento = $objEvent->pkevent;
if (isset($_FILES)):
    //armo la ruta
    $ruta = $_SERVER ['DOCUMENT_ROOT'] . "/templates/comprador/evento/v/$numero_carpeta_evento";
    //verifico si existe la ruta
    $continue = true;
    if (!is_dir($ruta)) :
        //no existe la ruta, la creo
        if (!mkdir($ruta)) :
            //no se pudo crear la ruta
            $retorna["estado"] = "no_creo_ruta";
            $retorna["ruta"] = $ruta;
            $retorna["mensaje"] = "No se Pudo Crer la Ruta para Guardar la imagen";
            $retorna["datos"] = $_POST;
            $continue = false;
        endif;
    endif;


    //subo el archivo o los archivos
    if ($continue):
        $archivo = $_FILES['imagen_evento'];
        $new_files = null;
        foreach ($archivo["name"] as $index => $valor) :
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
                        $new_files[$index] = $newfilename;
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
        endforeach;
        if ($new_files):
            if (count($new_files) > 0):
                EventImages::delete_all(array('conditions' => array('fkevent' => $objEvent->pkevent)));
                foreach ($new_files as $key => $value):
                    $EI = new EventImages();
                    $EI->image_path = $value;
                    $EI->fkevent = $objEvent->pkevent;
                    $EI->save();
                endforeach;
            endif;
        endif;
        $archivob = $_FILES['imagen_evento_banner'];
        $new_filesb = null;
        foreach ($archivob["name"] as $index => $valor) :
            if ($archivob['error'][$index] == 0):
                $uploaddir = $ruta;
                $fileName = $archivob['name'][$index];
                $newfilename = round(microtime(true)) . '_' . $fileName;
                $uploadfile = $uploaddir . '/' . $newfilename;
                $finfo = new finfo(FILEINFO_MIME_TYPE);
                if (false === $ext = array_search(
                        $finfo->file($archivob['tmp_name'][$index]), array(
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif',
                        ), true
                        )):
                    $retorna["estado"][$index] = "error_subir_archivo";
                    $retorna["mensaje"][$index] = "Extension no valida";
                    $retorna["archivo"][$index] = $fileName;
                else:
                    if (move_uploaded_file($archivob['tmp_name'][$index], $uploadfile)):
                        $retorna["estado"][$index] = "archivo_subido";
                        $retorna["mensaje"][$index] = "El Archivo fue Subido Correctamente";
                        $retorna["archivo"][$index] = $newfilename;
                        $new_filesb[$index] = $newfilename;
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
        endforeach;
        if ($new_filesb):
            
            if (count($new_filesb) > 0):
                $objEvent->event_image = $new_filesb[0];
                $objEvent->save();
            endif;
        endif;
    endif;
endif;
//
//formulario de registro
if (array_key_exists('generic', $_POST)):
    FormEventGeneric::delete_all(array('conditions' => array('fkevent' => $objEvent->pkevent)));
    foreach ($_POST['generic'] as $campo):
        $ObjFEG = new FormEventGeneric();
        $ObjFEG->formeventgeneric = $campo;
        $ObjFEG->fkevent = $objEvent->pkevent;
        $ObjFEG->save();
    endforeach;
endif;
if ($objEvent->save()):
    $result = '{';
    $result .= '"event":"success",';
    $result .= '"eventid":"' . $objEvent->pkevent . '"';
    $result .= ',"event_url":"' . $objEvent->event_url . '"';
    $result .= '}';
else:
    $result = '{';
    $result .= '"event":"fail"';
    $result .= '}';
endif;
echo '{"result":[' . $result . ']}';

//print_r($_GET);
//print_r($_POST);
//print_r($_FILES);