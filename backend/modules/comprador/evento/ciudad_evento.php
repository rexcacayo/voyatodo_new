<?php

include_once '../../../app_config.php';
require_once("../../../models/City.php");

function arToJson($data, $options = null) {
    $out = "[";
    foreach ($data as $row) {
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

$cities = City::find_by_sql('select pkcity,city_name from vt_tcity');
if ($cities):
    $result = NULL;
    foreach ($cities as $c):
        $result .= '{';
        $result .= '"id":"' . $c->pkcity . '"';
        $result .= ',"name":"' . $c->city_name . '"';
        $result .= '},';
    endforeach;
    $result = rtrim($result, ',');
endif;
echo '{"result":[' . $result . ']}';