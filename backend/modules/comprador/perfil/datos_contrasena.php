<?php
$data = json_decode(file_get_contents("php://input"));
print_r($data);
$result .= '{';
        $result .= '"contrasena":"succes"';
        $result .= '}';
echo '{"result":[' . $result . ']}';