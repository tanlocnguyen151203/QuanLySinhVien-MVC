<?php 
class Auth extends Controller {

        public function __construct(){
            $this->model_auth = $this->model('AuthModel');
        }

    public function index() {
        $this->render('auth/login');
    }

    public function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        return $this->model_auth->login($username, $password);
    }
}
?>