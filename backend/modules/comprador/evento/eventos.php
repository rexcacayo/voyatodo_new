<?php
include_once '../../../app_config.php';
require_once(APPROOT . "models/event.php");
$objEvents = Event::find('all', array('conditions' => array('fkstatus' => 2)));
if($objEvents):
$result = array(); 
foreach ($objEvents as $e) {
array_push($result, $e->to_json());
}

$result = "[".implode(",", $result)."]";
$result = str_replace('":', '":"', $result);
$result = str_replace(',"', '","', $result);
$result = str_replace('""', '"', $result);
echo $result;
endif;
?>