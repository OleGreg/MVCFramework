<?php


/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/5/2016
 * Time: 8:37 AM
 */


/**
 * Class Login
 * @property Users $usersmodel
 */
class Login extends Controller
{
    public $usersmodel;

    public function __construct(){

        parent::__construct();
        $this->usersmodel = $this->model('users');

    }

    public function index(){
//        $this->view('home/index');

    }

    public function authenticate(){

        $data = [];
        $data['username'] = $this->request['username'];
        $data['password'] = $this->request['password'];
        $matching_row = $this->usersmodel->search($data);

        if( !empty($matching_row) )
        {
            $_SESSION['user_id'] = $matching_row[0]['id'];
            $_SESSION['login_error'] = FALSE;
            header('Location: /userHome');
        }
        else
        {
            $_SESSION['login_error'] = TRUE;
            $this->goBackToHome();
        }

    }

    public function createFromAssocArray($parameter){
        $this->usersmodel->createFromArray($parameter);
    }

    private function goBackToHome(){
        header('Location: /index');
        exit;
    }
}
