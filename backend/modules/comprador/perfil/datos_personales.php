<?php
$return_user = 'fail';
if($_GET):
if(array_key_exists('user_id',$_GET)):
include_once '../../../app_config.php';
require_once(APPROOT . "models/user.php");
$objUser = User::find($_GET['user_id']);
if($objUser):
$data = json_decode(file_get_contents("php://input"));
$objUser->username = $data->user_name;
$objUser->last_name = $data->user_lastname;
$objUser->user_phone1 = $data->user_phone1;
$objUser->user_phone2 = $data->user_phone2;
if($objUser->save()):
$return_user = 'succes';
endif;
endif;
endif;
endif;
$result = '{';
        $result .= '"personal":"'.$return_user.'"';
        $result .= '}';
echo '{"result":[' . $result . ']}';