<?php
$data = json_decode(file_get_contents("php://input"));
print_r($data);
$result .= '{';
        $result .= '"bancario":"succes"';
        $result .= '}';
echo '{"result":[' . $result . ']}';