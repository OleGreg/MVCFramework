<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 3/31/2016
 * Time: 2:54 PM
 */

class Home extends Controller
{

    protected $user;

    public function __construct(){
        parent::__construct();

    }
    public function index($name = '')
    {
        $this->view('home/index');
    }

    public function show($user_id) {
        echo "User ID: $user_id";
    }

    public function create( $username = '' , $email = ''){

        print_r($_REQUEST);
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }

}