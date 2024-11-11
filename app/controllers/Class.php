<?php 
class Class extends Controller {

        public function __construct(){
            $this->model_class = $this->model('ClassModel');
        }

    public function index() {
        // $this->render('auth/login');
    }
}
?>