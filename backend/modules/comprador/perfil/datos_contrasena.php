<?php
$return_user = 'fail';
if($_GET):
if(array_key_exists('user_id',$_GET)):
include_once '../../../app_config.php';
require_once(APPROOT . "models/user.php");
$objUser = User::find($_GET['user_id']);
if($objUser):
$data = json_decode(file_get_contents("php://input"));
if($data->usuario_pass === $data->usuario_confpass):
$objUser->password = md5($data->usuario_pass);
if($objUser->save()):
$return_user = 'succes';
endif;
else:
$return_user = 'no_match';
endif;
endif;
endif;
endif;
$result = '{';
        $result .= '"change":"'.$return_user.'"';
        $result .= '}';
echo '{"result":[' . $result . ']}';