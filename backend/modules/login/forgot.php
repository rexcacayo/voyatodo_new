<?php

include_once '../../app_config.php';
// get posted data
require(APPROOT . "models/user.php");
require_once APPROOT . 'class/externals/phpmailer/PHPMailerAutoload.php';
$data = json_decode(file_get_contents("php://input"));
$result = "";
if ($data):
    if (User::exists(array('email' => $data->email))):
        $objUser = User::find('first', array('conditions' => array('email' => $data->email)));
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
            $mail->Subject = "Restablecimiento de contraseña - VoyaTodo";
            $body = file_get_contents('../../mail/reset_password.php');
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
       
        $result .= '{';
         if($enviado):
            $result .= '"forgot":"success"';
            else:
            $result .= '"forgot":"fail"';
        endif;
        $result .= ',"mail":"' . $results_messages . '"';
        $result .= '}';
    else:
        $result .= '{';
        $result .= '"forgot":"no_found"';
        $result .= '}';
    endif;
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
