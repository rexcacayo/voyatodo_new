<?php
$return_bank = 'fail';
if($_GET):
if(array_key_exists('user_id',$_GET)):
include_once '../../../app_config.php';
require_once(APPROOT . "models/UserBank.php");
if(UserBank::exists(array('conditions'=>array('fkuser'=>$_GET['user_id'])))):
$objUserBank = UserBank::find('all',array('conditions'=>array('fkuser'=>$_GET['user_id'])));
else:
$objUserBank = new UserBank();
$objUserBank->fkuser = $_GET['user_id'];
endif;
if($objUserBank):
$data = json_decode(file_get_contents("php://input"));
$objUserBank->userbank_tipeacount = $data->user_banco_tipocuenta;
$objUserBank->userbank_numberacount = $data->user_banco_numerocuenta;
$objUserBank->userbank_titularname = $data->user_banco_nombretitular;
$objUserBank->userbank_identification = $data->user_banco_cedula;
$objUserBank->fkbank = $data->user_banco;
if($objUserBank->save()):
$return_bank = 'succes';
endif;
endif;
endif;
endif;
$result = '{';
        $result .= '"bancario":"'.$return_bank.'"';
        $result .= '}';
echo '{"result":[' . $result . ']}';