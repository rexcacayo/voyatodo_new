<?php

//$data = json_decode(file_get_contents("php://input"));
include_once '../../../app_config.php';
require_once(APPROOT . "models/user.php");
require_once(APPROOT . "models/UserBank.php");
$objUser = User::find($_GET['user_id']);
$usuario_banco = '';
$usuario_banco_cedula = '';
$usuario_banco_nombretitular = '';
$usuario_banco_numerocuenta = '';
$usuario_banco_tipocuenta = '';
$return_bank = 'fail';
if ($objUser):
    if (UserBank::exists(array('conditions' => array('fkuser' => $objUser->id)))):
        $objUserBank = UserBank::find('first', array('conditions' => array('fkuser' => $objUser->id)));
        if ($objUserBank):
            $usuario_banco = $objUserBank->fkbank;
            $usuario_banco_cedula = $objUserBank->userbank_identification;
            $usuario_banco_nombretitular = $objUserBank->userbank_titularname;
            $usuario_banco_numerocuenta = $objUserBank->userbank_numberacount;
            $usuario_banco_tipocuenta = $objUserBank->userbank_tipeacount;
        endif;
    endif;
endif;

$result = '{';
$result .= '"perfil":"succes"';
$result .= ',"user_name":"' . $objUser->username . '"';
$result .= ',"user_lastname":"' . $objUser->last_name . '"';
$result .= ',"user_phone1":"' . $objUser->user_phone1 . '"';
$result .= ',"user_phone2":"' . $objUser->user_phone2 . '"';
$result .= '}';
//banco

$result .= ',{';
$result .= '"banco":"succes"';
 $result .= ',"usuario_banco":"'.$usuario_banco.'"';
  $result .= ',"usuario_banco_cedula":"'.$usuario_banco_cedula.'"';
  $result .= ',"usuario_banco_nombretitular":"'.$usuario_banco_nombretitular.'"';
  $result .= ',"usuario_banco_numerocuenta":"'.$usuario_banco_numerocuenta.'"';
  $result .= ',"usuario_banco_tipocuenta":"'.$usuario_banco_tipocuenta.'"'; 
$result .= '}';
//social
$result .= ',{';
$result .= '"social":"succes"';
$result .= ',"user_facebook":"' . $objUser->user_facebook . '"';
$result .= ',"user_twitter":"' . $objUser->user_twitter . '"';
$result .= ',"user_google":"' . $objUser->user_google . '"';
$result .= ',"user_youtube":"' . $objUser->user_youtube . '"';
$result .= '}';
echo '{"result":[' . $result . ']}';
