<?php

echo 'llego';

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
exit;

if($_POST):
echo json_encode($_POST);
else:
echo '403';
endif;
?>