<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/15/2016
 * Time: 1:55 PM
 */

class Signout extends Controller
{

    protected $user;

    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        session_destroy();
        $this->goBackToHome();
    }
    private function goBackToHome()
    {
        header('Location: /index');
    }

}