<?php


/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/5/2016
 * Time: 8:37 AM
 */



class signup extends Controller
{
    public $usersmodel;
    
    public function __construct(){

        parent::__construct();
        $this->usersmodel = $this->model('users');

    }

    public function index()
    {
        $this->view('signup/index');
    }

    public function store()
    {
        $data = [];
        $data['username'] = $name_check['username'] = $this->request['username'];
        $data['password'] = $this->request['password'];
        $data['email'] = $this->request['email'];

        if( empty( $this->usersmodel->search($name_check) ) )
        {
            $this->usersmodel->createFromArray($data);
            $this->goBackToHome();
        }
        else
        {
            echo "<div class='alert alert-danger' role='alert'>Name is already in use. Please choose another name.</div>";
            $this->view('signup/index');
        }
    }

    private function goBackToHome()
    {
        header('Location: /index');
        exit;
    }
}
