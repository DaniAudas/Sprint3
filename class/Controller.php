<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/06/15
 * Time: 14:43
 */
abstract class Controller
{
    private $_registry;
    protected $_view;
    protected $_acl;
    protected $_request;

    public function __construct()
    {
        $this->_registry = Registry::getInstance();
        $this->_acl = $this->_registry->_acl;
        $this->_request = $this->_registry->_request;
        $this->_view = new View($this->_request, $this->_acl);
    }

    abstract public function index();

    protected function loadModel($model, $module = false)
    {
        $modelName = $model . 'Model';
        $routeModel = ROOT . 'models' . DS . $modelName . '.php';

        if (!$module) {
            $module = $this->_request->getModule();
        }
        if ($module) {
            if ($module != 'default') {
                $routeModel = ROOT . 'modules' . DS . $module . DS . 'models' . DS . $modelName . '.php';
                //echo $routeModel.'<br>';
            }
        }

        if (is_readable($routeModel)) {
            require_once $routeModel;

            return new $modelName;
        } else {
            throw new Exception('Error de modelo');
        }
    }

    protected function getLibrary($library)
    {
        $routeLibrary = ROOT . 'libs' . DS . $library . '.php';

        if (is_readable($routeLibrary)) {
            require_once $routeLibrary;
        } else {
            throw new Exception('Error de libreria');
        }
    }

    protected function getText($key)
    {
        if (isset($_POST[ $key ]) && !empty($_POST[ $key ])) {
            $_POST[ $key ] = htmlspecialchars($_POST[ $key ], ENT_QUOTES);

            return $_POST[ $key ];
        } else
            return '';
    }

    protected function getInt($key)
    {
        if (isset($_POST[ $key ]) && !empty($_POST[ $key ])) {
            $_POST[ $key ] = filter_input(INPUT_POST, $key, FILTER_VALIDATE_INT);

            return $_POST[ $key ];
        } else
            return 0;
    }

    protected function redirect($route = false)
    {
        if ($route) {
            header('location:' . BASE_URL . $route);
            exit;
        } else {
            header('location:' . BASE_URL);
            exit;
        }
    }

    protected function filterInt($int)
    {
        $int = (int)$int;
        if (is_int($int)) {
            return $int;
        } else {
            return 0;
        }
    }

    protected function is_ajax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

} 