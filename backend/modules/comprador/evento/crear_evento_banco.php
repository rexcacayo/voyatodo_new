<?php
include_once '../../../app_config.php';
require_once("../../../models/event.php");
require_once(APPROOT . "models/UserBank.php");
$return_bank = 'fail';
if (array_key_exists('event_id', $_GET)):
    $objEvent = Event::find($_GET['event_id']);
    if ($objEvent):
        if (UserBank::exists(array('conditions' => array('fkuser' => $objEvent->fkuser)))):
            $objUserBank = UserBank::find('all', array('conditions' => array('fkuser' => $objEvent->fkuser)));
        else:
            $objUserBank = new UserBank();
            $objUserBank->fkuser = $objEvent->fkuser;
        endif;

        if ($objUserBank):
            $objUserBank->userbank_tipeacount = $_POST['userbank_tipeacount'];
            $objUserBank->userbank_numberacount = $_POST['userbank_numberacount'];
            $objUserBank->userbank_titularname = $_POST['userbank_titularname'];
            $objUserBank->userbank_identification = $_POST['userbank_tipeacount'];
            $objUserBank->fkbank = $_POST['fkbank'];
            if ($objUserBank->save()):
                $return_bank = 'success';
            endif;
        endif;
    endif;
endif;
$result = '{';
$result .= '"bancario":"' . $return_bank . '"';
$result .= '}';
echo '{"result":[' . $result . ']}';
