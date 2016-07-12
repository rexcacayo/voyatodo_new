<?php

include_once ('../../../app_config.php');
require_once("../../../models/event.php");

$result = "";

    $objEvent = Event::find('all');
    if ($objEvent):
        
            $result .= '{';
            $result .= '"event":"success"';
            //$result .= '"event_id":"' . $objEvent->pkevent . '",';
            $result .= '}';
        
    
else:
    $result .= '{';
    $result .= '"event":"no_data"';
    $result .= '}';
endif;

// json format output 
echo '{"result":[' . $result . ']}';
