<?php
/**
 * Greg Crowell
 * A basic MVC application
 */

    class App{
        
        protected $controller = 'home';
        protected $method = 'index';
        protected $params = [];

        public function __construct()
        {
            $url = $this->parseUrl();
            $this->loadController($url);
            $this->callController();
            $this->setSession();
        }

        public function parseUrl()
        {
            if( isset($_GET['url']) )
            {
                return $url = explode( '/' , filter_var(rtrim($_GET['url'] , '/') , FILTER_SANITIZE_URL) );
            }
        }

        private function loadController(&$url)
        {
            if( file_exists('../app/controllers/' . $url[0] . '.php') )
            {
                $this->controller = $url[0];
                unset($url[0]);
            }
            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            $this->checkUser();
            $this->loadMethod($url);
        }

        private function checkUser()
        {
            if(isset($_SESSION['user_id']))
            {
                $user_id = $_SESSION['user_id'];
                if(!empty($user_id))
                {
                    require_once '../app/models/users.php';
                    $usermodel = new Users();
                    $this->controller->authenticated_user = $usermodel->findById($user_id);
                }
            }
        }

        private function loadMethod(&$url)
        {
            if( isset($url[1]) )
            {
                if( method_exists($this->controller, $url[1]) ){
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }
            $this->params = !empty($url) ? array_values($url) : [];
        }

        private function callController()
        {
            if( $this->controller->requires_login == FALSE )
            {
                call_user_func_array([$this->controller, $this->method], $this->params);
            }
            else if ($this->controller->requires_login == TRUE && !empty($this->controller->authenticated_user))
            {
                call_user_func_array([$this->controller, $this->method], $this->params);
            }
            else
            {
                echo "Ha ha, nice try";
            }
        }

        private function setSession()
        {
            $_SESSION['login_error'] = FALSE;
        }

    }

