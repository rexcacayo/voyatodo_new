<?php
include_once '../../../app_config.php';
require_once("../../../models/event.php");
$sql = "SELECT e.*, c.country_name, ct.city_name,cp.category_name,t.ticket_name
FROM vt_tevent AS e
LEFT JOIN vt_tcountry AS c ON c.pkcountry = e.fkcountry
LEFT JOIN vt_tcity AS ct ON ct.pkcity = e.fkcity
LEFT JOIN vt_tcategory AS cp ON cp.pkcategory = e.fkcategory1
LEFT JOIN vt_tticket AS t ON t.pkticket = e.fktipetickect
WHERE 1 = 1";
if ($_GET):
    if (array_key_exists('event_url', $_GET)):
        $sql .= " and event_url = ?";
        $events = Event::find_by_sql($sql,array($_GET['event_url']));
    endif;
else:
    $sql .= " and fkstatus = ?";
        $events = Event::find_by_sql($sql,array(2));
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
    'country_name' => 'country_name',
    'city_name' => 'city_name',
    'category_name' => 'category_name',
    'ticket_name' => 'ticket_name',
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
    echo '[' . $result . ']';
endif;
