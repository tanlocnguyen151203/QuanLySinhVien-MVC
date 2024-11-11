<?php 
class Student extends Controller {

    public $data = [];

    public function __construct(){
        $this->model_student = $this->model('StudentModel');
    }
    public function index() {
        
        $this->data['sub_content']['student_list'] = 
        
        $this->model_student->getAllStudent();

        var_dump($this->data['sub_content']['student_list']);
        $this->data['content'] = 'student/list';
          $this->data['title'] = 'home/student-list';
         
          $this->data['sub_content']['id'] = 123456;
        $this->render('layouts/layout', $this->data);
    }
    public function getData() {
        echo "Load du lieu";
       
    }

   
}
?>