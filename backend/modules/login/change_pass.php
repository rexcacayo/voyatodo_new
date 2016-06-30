<?php

include_once '../../app_config.php';
require(APPROOT . "models/user.php");
// get posted data
$data = json_decode(file_get_contents("php://input"));
$result = "";
if ($data):
    if (User::exists(array('accessToken' => base64_decode($data->token)))):
        $objUser = User::find('first', array('conditions' => array('accessToken' => base64_decode($data->token))));
        if ($objUser):
            $objUser->password = md5($data->pass);
            if ($objUser->save()):
                $result .= '{';
                $result .= '"change":"success",';
                $result .= '"username":"' . $objUser->username . '",';
                $result .= '"userid":"' . $objUser->id . '",';
                $result .= '"rol":"' . $objUser->rol . '",';
                $result .= '"email":"' . $objUser->email . '"';
                $result .= '}';
            else:
                $result .= '{';
                $result .= '"change":"fail"';
                $result .= '}';
            endif;
        endif;
    else:
        $result .= '{';
        $result .= '"change":"no_found"';
        $result .= '}';
    endif;
else:
    $result .= '{';
    $result .= '"change":"no_data"';
    $result .= '}';
endif;
//print_r($data);
//die();
//$objUser = User::find('first', array('conditions' => array('email' => $data->user, 'password' => md5($data->pass))));
//if ($objUser):
/* else:
  $result .= '{';
  $result .= '"login":"fail",';
  $result .= '"username":"",';
  $result .= '"rol":""';
  $result .= '}';
  endif; */
// json format output 
echo '{"result":[' . $result . ']}';
