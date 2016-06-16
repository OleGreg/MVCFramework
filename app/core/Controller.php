<?php

/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 3/31/2016
 * Time: 10:03 AM
 */

class Controller
{
    public $request = [];
    public $authenticated_user = NULL;
    public $requires_login = FALSE;
    protected $login_error = FALSE;

    public function __construct()
    {
        $this->request = $_REQUEST;
    }
    
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view( $view , $params = [] )
    {
        require_once '../app/inc/header.php';
        require_once '../app/views/' . $view . '.php';
        require_once '../app/inc/footer.php';
    }

    public function isLoggedIn()
    {
        return !empty($this->authenticated_user) ? true : false;
    }
}