<?php

    //se verifica que accion viene
    switch($_REQUEST["accion"])
    {      
        
        //VALIDAR ASISTENTE
        case "buscar_usuario":
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
?>