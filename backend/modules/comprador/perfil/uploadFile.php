<?php

include_once '../../../app_config.php';
require_once(APPROOT . "models/user.php");
$msg = 'fail';
$img = '';
if ($_GET):
    if (array_key_exists('user_id', $_GET)):
        $ObjUser = User::find($_GET['user_id']);
        if ($ObjUser):
            if (isset($_FILES)):
                //armo la ruta
                $ruta = $_SERVER ['DOCUMENT_ROOT'] . "/templates/comprador/perfil/imagen/";
                //verifico si existe la ruta
                $continue = true;
                if (!is_dir($ruta)) :
                    //no existe la ruta, la creo
                    if (!mkdir($ruta)) :
                        //no se pudo crear la ruta
                        $msg = 'fail';
                        $continue = false;
                    endif;
                endif;
                //subo el archivo o los archivos
                if ($continue):
                    $archivo = $_FILES['FormUpdateInformation'];
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
                                    $ObjUser->user_image = DOMAIN_ROOT."templates/comprador/perfil/imagen/". $newfilename;
                                if($ObjUser->save()):
                                    $msg = 'success';
                                $img = DOMAIN_ROOT."templates/comprador/perfil/imagen/". $newfilename;
                                    else:
                                    $msg = 'fail';
                                endif;
                                    
                                else:
                                    $retorna["estado"][$index] = "error_subir_archivo";
                                    $retorna["mensaje"][$index] = "No se pudo mover el archivo";
                                    $retorna["archivo"][$index] = $uploadfile;
                                endif;
                            endif;
                        else:
                            $msg = 'fail';
                        endif;
                    endforeach;
                endif;
            endif;
        endif;
    endif;
endif;
$result = '{';
$result .= '"imagen":"'.$msg.'"';
$result .= ',"image_name":"' . $img . '"';
$result .= '}';
echo '{"result":[' . $result . ']}';