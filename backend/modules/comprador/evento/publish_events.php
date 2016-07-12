<?php

include_once '../../../app_config.php';
require_once("../../../models/event.php");
if ($_GET):
    if (array_key_exists('event_url', $_GET)):
        $events = Event::find('all', array('conditions' => array('event_url' => $_GET['event_url'])));
    endif;
else:
    $events = Event::find('all', array('conditions' => array('fkstatus' => 2)));
endif;
$fields = array(
    'event_name' => 'event_name',
    'event_stardate' => 'event_stardate',
    'event_enddate' => 'event_enddate',
    'event_starthour' => 'event_starthour',
    'event_endhour' => 'event_endhour',
    'event_country' => 'fkcountry',
    'event_city' => 'fkcity',
    'event_place' => 'event_place',
    'event_address' => 'event_address',
    'event_category_principal' => 'fkcategory1',
    'event_category_secundary' => 'fkcategory2',
    'event_review' => 'event_review',
    'event_description' => 'event_description',
    'event_crowfunding' => 'event_crowfunding',
    'event_linkvideo' => 'event_linkvideo',
    'event_terms' => 'event_terms',
    'typeticket_name' => 'fktipetickect',
    'event_visible' => 'event_visible',
    'fkstatus' => 'fkstatus',
    'event_opacityimage' => 'event_opacityimage');
$result = '';
if ($events):
    foreach ($events as $e):
        $i = 0;
        $result .= '{';
        foreach ($fields as $campo => $objeto):
            if ($i > 0):
                $result .= ',"'.$campo.'":"' . $e->$objeto . '"';
            else:
                $result .= '"'.$campo.'":"' . $e->$objeto . '"';
            endif;
            $i++;
        endforeach;
        $result .= '},';
    endforeach;
    $result = rtrim($result, ',');
    echo '{"result":[' . $result . ']}';
endif;
