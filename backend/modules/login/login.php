<?php

include_once '../../app_config.php';
require(APPROOT . "models/user.php");
// get posted data
$data = json_decode(file_get_contents("php://input"));
//print_r($data);

$result = "";
if ($data):
    $objUser = User::find('first', array('conditions' => array('email' => $data->user, 'password' => md5($data->pass))));
    if ($objUser):
        if ($objUser->activate == 1):
            $result .= '{';
            $result .= '"login":"success",';
			$result .= '"userid":"' . $objUser->id . '",';
			$result .= '"fullname":"' . $objUser->username .' '.$objUser->last_name. '",';
            $result .= '"rol":"' . $objUser->rol . '",';
            $result .= '"email":"' . $objUser->email . '"';
            $result .= '}';
        else:
            $result .= '{';
            $result .= '"login":"no_active"';
            $result .= '}';
        endif;
    else:
        $result .= '{';
        $result .= '"login":"fail"';
        $result .= '}';
    endif;
else:
    $result .= '{';
    $result .= '"login":"no_data"';
    $result .= '}';
endif;

// json format output 
echo '{"result":[' . $result . ']}';
