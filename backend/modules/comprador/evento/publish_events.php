<?php
include_once '../../../app_config.php';
require_once("../../../models/event.php");
function arToJson($data, $options = null) {
$out = "[";
foreach( $data as $row) { 
if ($options != null)
$out .= $row->to_json($options);
else 
$out .= $row->to_json();
$out .= ",";
}
$out = rtrim($out, ',');
$out .= "]";
return $out;
}
if($_GET):
    if(array_key_exists('event_url', $_GET)):
$events = Event::find('all',array('conditions'=>array('event_url'=>$_GET['event_url'])));        
    endif;
    else:
$events = Event::find('all',array('conditions'=>array('fkstatus'=>2)));    
endif;

if($events):
    echo arToJson($events);
endif;
