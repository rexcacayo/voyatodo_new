<?php

include_once '../../app_config.php';
require(APPROOT . "models/user.php");
// get posted data
$data = json_decode(file_get_contents("php://input"));
//print_r($data);
//die();
//$objUser = User::find('first', array('conditions' => array('email' => $data->user, 'password' => md5($data->pass))));
$result = "";
if ($data):
    if (User::exists(array('accessToken' => base64_decode($data->token)))):
        $objUser = User::find('first', array('conditions' => array('accessToken' => base64_decode($data->token))));
        if ($objUser):
            $objUser->activate = 1;
            if ($objUser->save()):
                $result .= '{';
                $result .= '"activate":"success",';
                $result .= '"username":"' . $objUser->username . '",';
                $result .= '"userid":"' . $objUser->id . '",';
                $result .= '"rol":"' . $objUser->rol . '",';
                $result .= '"email":"' . $objUser->email . '"';
                $result .= '}';
            else:
                $result .= '{';
                $result .= '"activate":"fail"';
                $result .= '}';
            endif;
        else:
//if ($objUser):
            $result .= '{';
            $result .= '"activate":"fail"';
            $result .= '}';
        endif;
    else:
//if ($objUser):
        $result .= '{';
        $result .= '"activate":"no_found"';
        $result .= '}';
    endif;
else:
    $result .= '{';
    $result .= '"activate":"no_data"';
    $result .= '}';
endif;

/* else:
  $result .= '{';
  $result .= '"login":"fail",';
  $result .= '"username":"",';
  $result .= '"rol":""';
  $result .= '}';
  endif; */
// json format output 
echo '{"result":[' . $result . ']}';
