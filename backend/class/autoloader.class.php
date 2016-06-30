<?php

/*
 * OPTIME Consulting, Inc.
 *
 * Description: Clase para autocargar las clases del sistema
 *
 * @author Javier Mijares
 * @version 1.0  2010/10/21
 */

class Autoloader {

    /**
     * Registra la clase y la funcion que permite autocargar las clases
     * @return
     */
    public static function Register() {
        return spl_autoload_register(array('Autoloader', 'APP_Load'));
    }

//	function Register()
    /**
     * Funcion para autocargar las clases
     * @param $class_name
     * @return
     */

    public static function APP_Load($class_name) {
        $pObjectFilePath = "";
        if ((class_exists($class_name))) {
            return false;
        }
        if (substr($class_name, 0, 4) == 'cls_') {
            if (file_exists(APPROOT . "lib/class/" . substr($class_name, 4, strlen($class_name)) . '.class.php')) {
                $pObjectFilePath = APPROOT . "lib/class/" . substr($class_name, 4, strlen($class_name)) . '.class.php';
            } else if (file_exists(APPROOT . "lib/class/" . substr($class_name, 4, strlen($class_name)) . '.class.php')) {
                $pObjectFilePath = APPROOT . "lib/class/" . substr($class_name, 4, strlen($class_name)) . '.class.php';
            }
        } else {
            $class = Inflector::underscore($class_name);
            if (preg_match("/5.3/", phpversion())) {
                if (file_exists(APPROOT . "lib/class/" . strtolower(lcfirst($class)) . '.class.php')) {
                    $pObjectFilePath = APPROOT . "lib/class/" . lcfirst($class) . '.class.php';
                } else if (file_exists(COREROOT . "lib/class/" . strtolower(lcfirst($class)) . '.class.php')) {
                    $pObjectFilePath = COREROOT . "lib/class/" . lcfirst($class) . '.class.php';
                }
            } else {
                if (file_exists(APPROOT . "lib/class/" . strtolower($class) . '.class.php')) {
                    $pObjectFilePath = APPROOT . "lib/class/" . strtolower($class) . '.class.php';
                } else if (file_exists(APPROOT . "lib/class/" . ucfirst($class) . '.class.php')) {
                    $pObjectFilePath = APPROOT . "lib/class/" . ucfirst($class) . '.class.php';
                } else if (file_exists(APPROOT . "lib/models/" . ucfirst($class) . '.php')) {
                    $pObjectFilePath = APPROOT . "lib/models/" . ucfirst($class) . '.php';
                } else if (file_exists(APPROOT . "lib/models/" . strtolower($class) . '.php')) {
                    $pObjectFilePath = APPROOT . "lib/models/" . strtolower($class) . '.php';
                } else if (file_exists(APPROOT . "lib/models/" . $class . '.php')) {
                    $pObjectFilePath = APPROOT . "lib/models/" . $class . '.php';
                } elseif (file_exists(APPROOT . "lib/class/" . strtolower($class_name) . '.class.php')) {
                    $pObjectFilePath = APPROOT . "lib/class/" . strtolower($class_name) . '.class.php';
                } else if (file_exists(APPROOT . "lib/class/" . ucfirst($class_name) . '.class.php')) {
                    $pObjectFilePath = APPROOT . "lib/class/" . ucfirst($class_name) . '.class.php';
                } else if (file_exists(APPROOT . "lib/models/" . ucfirst($class_name) . '.php')) {
                    $pObjectFilePath = APPROOT . "lib/models/" . ucfirst($class_name) . '.php';
                } else if (file_exists(APPROOT . "lib/models/" . strtolower($class_name) . '.php')) {
                    $pObjectFilePath = APPROOT . "lib/models/" . strtolower($class_name) . '.php';
                } else if (file_exists(APPROOT . "lib/models/" . $class_name . '.php')) {
                    $pObjectFilePath = APPROOT . "lib/models/" . $class_name . '.php';
                } else if (file_exists(APPROOT . "lib/models/" . strtolower($class_name) . '.php')) {
                    $pObjectFilePath = APPROOT . "lib/models/" . strtolower($class_name) . '.php';
                }
            }
        }

        if ((file_exists($pObjectFilePath) === false) || (is_readable($pObjectFilePath) === false)) {
            return false;
        }

        require_once($pObjectFilePath);
    }

}

?>