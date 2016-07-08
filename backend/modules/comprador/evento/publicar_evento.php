<?php

include_once '../../../app_config.php';
require_once("../../../models/event.php");
if ($_GET):
    if (array_key_exists('event_id', $_GET)):
        $objEvent = Event::find($_GET['event_id']);
        if ($_POST['FormCreateEvent']['event_url']):
            $objEvent->fkstatus = 2;
            $objEvent->save();
            $result = '{';
            $result .= '"publish":"success"';
            $result .= '}';
        else:
            $result = '{';
            $result .= '"publish":"fail"';
            $result .= '}';
        endif;
    else:
        $result = '{';
        $result .= '"publish":"fail"';
        $result .= '}';
    endif;
else:
    $result = '{';
    $result .= '"publish":"fail"';
    $result .= '}';
endif;
echo '{"result":[' . $result . ']}';
