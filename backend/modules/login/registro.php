<?php

include_once '../../app_config.php';
require(APPROOT . "models/user.php");
require_once APPROOT . 'class/externals/phpmailer/PHPMailerAutoload.php';
// get posted data
$data = json_decode(file_get_contents("php://input"));
//echo '<pre>';
//var_dump($data);
//echo '</pre>';
//die();
//print_r($data);
//["user_name"]=>
//  string(6) "zdsfgv"
//  ["user_lastname"]=>
//  string(5) "zsdgf"
//  ["email"]=>
//  string(13) "asdf@sdfg.com"
//  ["password"]=>
//  string(8) "12345678"
//  ["type"]=>
//  string(8) "emapresa"
//  ["rol"]=>
//  int(1)
//  ["telefono1"]=>
//  string(8) "01245455"
//  ["telefono2"]=>
//  string(0) ""
$result = "";
if ($data):
    if (!User::exists(array('email' => $data->email))):
        $objUser = new User();
        $objUser->username = $data->user_name;
        $objUser->email = $data->email;
        if ($data->type == 1):
            $objUser->rol = 3;
            $objUser->last_name = $data->user_lastname;
            $objUser->password = md5($data->password);
        else:
            $objUser->rol = 4;
        endif;
        $objUser->user_phone1 = $data->telefono1;
        $objUser->user_phone2 = $data->telefono2;
        $objUser->activate = 0;
        $objUser->accesstoken = md5(uniqid(rand(), true));
        if ($objUser->save()):
            //sendemail
            $results_messages = "";
            if ($data->type == 1):
                $TOKEN = base64_encode($objUser->accesstoken);
                $mail = new PHPMailer(true);
                $mail->CharSet = 'utf-8';
                ini_set('default_charset', 'UTF-8');

                class phpmailerAppException extends phpmailerException {
                    
                }

                try {
                    $to = $objUser->email;
                    if (!PHPMailer::validateAddress($to)) {
                        throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
                    }
                    $mail->isSMTP();
                    $mail->SMTPDebug = 0;
                    $mail->Host = "mail.voyatodo.com";
                    $mail->Port = "25";
                    $mail->SMTPSecure = "none";
                    $mail->SMTPAuth = true;
                    $mail->Username = "accounts@voyatodo.com";
                    $mail->Password = "QkTT?fGBDoiR";
                    $mail->setFrom("accounts@voyatodo.com", "Voy a Todo");
                    $mail->addAddress($to, $objUser->username);
                    $mail->Subject = "Debes confirmar tu cuenta";
                    $body = file_get_contents(APPROOT .'mail/register_mail.html');
                    $search = array('##TOKEN##');
                    $replace = array($TOKEN);
                    $newbody = str_replace($search, $replace, $body);
                    $mail->WordWrap = 78;
                    $mail->msgHTML($newbody, dirname(__FILE__), true); //Create message bodies and embed images
                    try {
                        $mail->send();
                        $results_messages = "Message has been sent using SMTP";
                        $enviado = true;
                    } catch (phpmailerException $e) {
                        throw new phpmailerAppException('Unable to send to: ' . $to . ': ' . $e->getMessage());
                    }
                } catch (phpmailerAppException $e) {
                    $results_messages = $e->errorMessage();
                }
            endif;
            //
            $result .= '{';
            $result .= '"register":"success"';
            $result .= ',"mail":"' . $results_messages . '"';
            $result .= '}';
        else:
            $result .= '{';
            $result .= '"register":"fail"';
            $result .= '}';
        endif;
    else:
        $result .= '{';
        $result .= '"register":"already_register"';
        $result .= '}';
    endif;

else:
    $result .= '{';
    $result .= '"register":"no_data"';
    $result .= '}';
endif;
// json format output 
echo '{"result":[' . $result . ']}';
