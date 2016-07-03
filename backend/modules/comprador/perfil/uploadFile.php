<?php
//verifico que accion viene para ve si subo la imagen

//echo "<pre>";
//print_r($_FILES);
//echo "</pre>";
//
//
//
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

switch($_REQUEST["accion"])
{
    case "uploadFile":
        if($_POST)
            {
                echo json_encode($_POST);
            }
            else
            {
                echo '403'; 
            }
    break;
    
}