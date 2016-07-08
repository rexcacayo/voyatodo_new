<?php

include_once '../../../app_config.php';
require_once("../../../models/event.php");
require_once("../../../models/EventTicket.php");
$fields = array(
    'ticket_name' => 'ticket_name',
    'ticket_description' => 'ticket_description',
    'ticket_value' => 'ticket_value',
    'ticket_comision' => 'ticket_comision',
    'ticket_insentive' => 'ticket_insentive',
    'ticket_seeclaim' => 'ticket_seeclaim',
    'ticket_code' => 'ticket_code');
//fktipetickect
//fkevent
if ($_GET):
    if ($_POST):
//    if ($_POST['FormCreateEvent']['eventid'] === ''):
//        $objEvent = New Event();
//    else:
//        $objEvent = Event::find($_POST['FormCreateEvent']['eventid']);
//    endif;
        if (array_key_exists('event_id', $_GET)):
            $objEvent = Event::find($_GET['event_id']);
//            EventTicket::delete_all(array('conditions' => array('fkevent' => $objEvent->pkevent)));
            $objTEvent = New EventTicket();
            $objTEvent->fkevent = $objEvent->pkevent;
            if ($objEvent->fktipetickect):
                $objTEvent->fktipetickect = $objEvent->fktipetickect;
            endif;
        elseif (array_key_exists('ticket_id', $_GET)):
            $objTEvent = EventTicket::find($_GET['ticket_id']);
            if ($objEvent->fktipetickect):
                $objTEvent->fktipetickect = $objEvent->fktipetickect;
            endif;
        endif;
        foreach ($fields as $vector => $campo):
            if (array_key_exists($vector, $_POST)):
                if ($_POST[$vector]):
                    $objTEvent->$campo = $_POST[$vector];
                endif;
            endif;
        endforeach;
        if (array_key_exists('sin_limite', $_POST)):
            if (!$_POST['sin_limite']):
                if (array_key_exists('ticket_qty', $_POST)):
                    if ($_POST['ticket_qty']):
                        $objTEvent->ticket_qty = $_POST['ticket_qty'];
                    endif;
                endif;
            endif;
        endif;
        if (array_key_exists('inmediatamente', $_POST)):
            if (!$_POST['inmediatamente']):
                if (array_key_exists('tiket_stardate', $_POST)):
                    if ($_POST['tiket_stardate']):
                        $objTEvent->ticket_start = $_POST['tiket_stardate'];
                    endif;
                endif;
                else:
                    $objTEvent->ticket_start = strftime("%Y-%m-%d");
            endif;
        endif;
        if (array_key_exists('dia_evento', $_POST)):
            if (!$_POST['dia_evento']):
                if (array_key_exists('tiket_enddate', $_POST)):
                    if ($_POST['tiket_enddate']):
                        $objTEvent->ticket_finish = $_POST['tiket_enddate'];
                    endif;
                endif;
                else:
                    $objTEvent->ticket_finish = $objEvent->event_stardate;
            endif;
        endif;
    endif;
endif;
//formulario de registro
if ($objTEvent->save()):
    $result = '{';
    $result .= '"ticket":"success",';
    $result .= '"ticket_id":"' . $objTEvent->pkticket . '"';
    $result .= '}';
else:
    $result = '{';
    $result .= '"ticket":"fail"';
    $result .= '}';
endif;
echo '{"result":[' . $result . ']}';

//print_r($_GET);
//print_r($_POST);