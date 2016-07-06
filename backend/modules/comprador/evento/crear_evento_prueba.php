<?php

include_once '../../../app_config.php';
require_once(APPROOT . "models/event.php");
$vectorP = array(
    'event_name'
    , 'event_stardate'
    , 'event_enddate'
    , 'event_country'
    , 'event_city'
    , 'event_place'
    , 'event_address'
    , 'event_lat'
    , 'event_log'
    , 'event_category_principal'
    , 'event_category_secundary'
    , 'event_review'
    , 'event_description'
    , 'event_crowfunding'
    , 'event_url'
    , 'event_linkvideo'
    , 'event_terms'
    , 'event_visible'
    , 'event_image'
    , 'event_opacityimage');
$fields = array(
    'event_name' => 'event_name',
    'event_stardate' => 'event_stardate',
    'event_starthour' => 'event_starthour',
    'event_country' => 'fkcountry',
    'event_city' => 'fkcity',
    'event_place' => 'event_place',
    'event_address' => 'event_address',
    'event_category_principal' => 'fkcategory1',
    'event_category_secundary' => 'fkcategory2',
    'event_review' => 'event_review',
    'event_description' => 'event_description',
    'event_crowfunding' => 'event_crowfunding',
    'event_url' => 'event_url',
    'event_linkvideo' => 'event_linkvideo',
    'event_terms' => 'event_terms',
    'event_visible' => 'event_visible'
    , 'event_opacityimage' => 'event_opacityimage');
if ($_POST):
    if ($_POST['FormCreateEvent']['eventid'] === ''):
        $objEvent = New Event();
    else:
        $objEvent = Event::find($_POST['FormCreateEvent']['eventid']);
    endif;
    foreach ($fields as $vector => $campo):
        if (array_key_exists($vector, $_POST['FormCreateEvent'])):
            if ($_POST['FormCreateEvent'][$vector]):
                $objEvent->$campo = $_POST['FormCreateEvent'][$vector];
            endif;
        endif;
    endforeach;
    $objEvent->fkuser = $_GET['user_id'];
endif;

if($objEvent->save()):
     $result = '{';
            $result .= '"event":"success",';
            $result .= '"eventid":"' . $objEvent->pkevent . '"';
            $result .= '}';
else:
     $result = '{';
            $result .= '"event":"fail"';
            $result .= '}';
endif;
echo '{"result":[' . $result . ']}';

//print_r($_GET);
//print_r($_POST);
//print_r($_FILES);