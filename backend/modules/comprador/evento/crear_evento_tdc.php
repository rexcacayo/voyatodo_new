<?php
include_once '../../../app_config.php';
require_once("../../../models/event.php");
require_once(APPROOT . "models/UserCrediCard.php");
$vector = [];
//Array
//(
//    [event_id] => 90
//)
//Array
//(
//    [creditcard_titularname] => alkdsfjasd
//    [creditcard_numbercard] => 56545343545646
//    [creditcard_type] => VISA
//    [accion] => guardar_tdc_pagos
//)
$return_cc = 'fail';
if (array_key_exists('event_id', $_GET)):
    $objEvent = Event::find($_GET['event_id']);
    if ($objEvent):
        if (UserCrediCard::exists(array('conditions' => array('fkuser' => $objEvent->fkuser)))):
            $objUserCrediCard = UserCrediCard::find('all', array('conditions' => array('fkuser' => $objEvent->fkuser)));
        else:
            $objUserCrediCard = new UserCrediCard();
            $objUserCrediCard->fkuser = $objEvent->fkuser;
        endif;

        if ($objUserCrediCard):
            $objUserCrediCard->creditcard_type = $_POST['creditcard_type'];
            $objUserCrediCard->creditcard_titularname = $_POST['creditcard_titularname'];
            $objUserCrediCard->creditcard_numbercard = $_POST['creditcard_numbercard'];
            if ($objUserCrediCard->save()):
                $return_cc = 'success';
            endif;
        endif;
    endif;
endif;
$result = '{';
$result .= '"creditc":"' . $return_cc . '"';
$result .= '}';
echo '{"result":[' . $result . ']}';
