<?php
//date_default_timezone_set("America/Caracas");
/*if (preg_match( "/app_config.php/", $_SERVER ["PHP_SELF"] ) || preg_match( "/app_config.php/", $HTTP_SERVER_VARS ["PHP_SELF"] ))
	die("Access denied!");*/
$ini_request=microtime(true);
//Directorios
//
$mysql_host = "127.0.0.1";
$mysql_database = "voyatodo_dev";
$mysql_user = "root";
$mysql_password = "manager";
$mysql_host1 = "localhost";
$mysql_database1 = "voyatodo_dev";
$mysql_user1 = "voyatodo_develop";
$mysql_password1 = "SHr1pC}C2cTR";
define ( "APPROOT", $_SERVER ['DOCUMENT_ROOT'] . "/site/backend/" );
$arrDB = array("_PROD" => array("host" => $mysql_host1, "user" => $mysql_user1, "pass" => $mysql_password1, "db" => $mysql_database1),
			   "_DEFAULT" => array("host" => $mysql_host, "user" => $mysql_user, "pass" => $mysql_password, "db" => $mysql_database));
require_once(APPROOT."class/externals/cake/inflector.php");
//require(APPROOT."class/autoloader.class.php");
require_once APPROOT.'orm/php-activerecord/ActiveRecord.php';
//if($arrDB['_DEFAULT']['pass']):
//$arrCon = array('development' => 'mysql://'.$arrDB['_DEFAULT']['user'].':'.$arrDB['_DEFAULT']['pass'].'@'.$arrDB['_DEFAULT']['host'].'/'.$arrDB['_DEFAULT']['db']);
//else:
//$arrCon = array('development' => 'mysql://'.$arrDB['_DEFAULT']['user'].'@'.$arrDB['_DEFAULT']['host'].'/'.$arrDB['_DEFAULT']['db']);
//endif;
$arrCon = array('development' => 'mysql://'.$arrDB['_DEFAULT']['user'].':'.$arrDB['_DEFAULT']['pass'].'@'.$arrDB['_DEFAULT']['host'].'/'.$arrDB['_DEFAULT']['db']
        ,'prod' => 'mysql://'.$arrDB['_PROD']['user'].':'.$arrDB['_PROD']['pass'].'@'.$arrDB['_PROD']['host'].'/'.$arrDB['_PROD']['db']);
ActiveRecord\Config::initialize(function($cfg)
 {
  global $arrCon;
  $cfg->set_model_directory(APPROOT.'models');
  $cfg->set_connections(array(
         'development' => $arrCon['prod']));
 });
//Autoloader::Register();