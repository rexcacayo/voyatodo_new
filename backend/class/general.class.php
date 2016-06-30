<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of general
 *
 * @author Carolina
 */
class general {
    //put your code here
    
    public function __construct() {
     
    }
    function getDocNextCode($type_doc) {
        $sql = "select if(((max(substr( documents.id,4,7)) + 1) > 0),concat(upper('$type_doc'),lpad((max(substr( documents.id,4,7)) + 1),7,_utf8'0')),concat(upper('$type_doc'),lpad((count(substr( documents.id,4,7)) + 1),7,_utf8'0'))) AS new_req_code from documents where documents.doc_id = '$type_doc'";
        return $sql;

    }
    static function format_numbers($number,$decimal) {
        return number_format($number,$decimal,',','.');
    }
    function display_msg($type,$text){
        switch ($type) {
            case "warning":
                $class = "ui-state-highlight";
                $title = "Advertencia";
                $icon = "ui-icon-info";
                break;
            case "error":
                $class = "ui-state-error";
                $title = "Error";
                $icon = "ui-icon-alert";
                break;

            default:
                break;
        }
        $html = '<div class="ui-widget"><div style="margin-top: 20px; padding: 0 .7em;" class="'.$class.' ui-corner-all">
				<p><span style="float: left; margin-right: .3em;" class="ui-icon '.$icon.'"></span>
				<strong>'.$title.'!</strong> '.$text.'</p>
			</div></div>';
        echo $html;
    }
    function display_msg_menu(){
                $class = "ui-state-highlight";
                $title = "Info";
                $icon = "ui-icon-info";
                $text = "Para más opciones presione el boton secundario del raton sobre los items";
        $html = '<div class="ui-widget"><div style="margin-top: 20px; padding: 0 .7em;" class="'.$class.' ui-corner-all">
				<p><span style="float: left; margin-right: .3em;" class="ui-icon '.$icon.'"></span>
				<strong>'.$title.'!</strong> '.$text.'</p>
			</div></div>';
        echo $html;
    }
    function display_msg_reqlogin(){
                $class = "ui-state-highlight";
                $title = "Info";
                $icon = "ui-icon-info";
                $text = "Debe Loguearse para acceder a esta información";
        $html = '<div class="ui-widget"><div style="margin-top: 20px; padding: 0 .7em;" class="'.$class.' ui-corner-all">
				<p><span style="float: left; margin-right: .3em;" class="ui-icon '.$icon.'"></span>
				<strong>'.$title.'!</strong> '.$text.'</p>
			</div></div>';
        echo $html;
    }
    function include_jquery_validator(){
        echo "<script type=\"text/javascript\" src=\"".DOMAIN_ROOT."js/jquery.validate.js\"></script>";
    }
}
?>
