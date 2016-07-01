<?php
$return_user = 'fail';
if($_GET):
if(array_key_exists('user_id',$_GET)):
include_once '../../../app_config.php';
require_once(APPROOT . "models/user.php");
$objUser = User::find($_GET['user_id']);
if($objUser):
$data = json_decode(file_get_contents("php://input"));
$objUser->user_facebook = $data->usuario_facebook;
$objUser->user_twitter = $data->usuario_twitter;
$objUser->user_google = $data->usuario_google;
$objUser->user_youtube = $data->usuario_youtube;
if($objUser->save()):
$return_user = 'succes';
endif;
endif;
endif;
endif;
$result = '{';
        $result .= '"network":"'.$return_user.'"';
        $result .= '}';
echo '{"result":[' . $result . ']}';