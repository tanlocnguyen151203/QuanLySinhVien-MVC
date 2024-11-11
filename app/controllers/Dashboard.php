<?php 
class Dashboard extends Controller {

    public $model_dashboard;
    public $data = [];

    public function __construct(){
        $this->model_dashboard = $this->model('DashboardModel');
    }

    public function index() {
        if(!isset($_SESSION['system'])){
            $system = $this->model_dashboard->getDataDashboard("SELECT * FROM system_settings")->fetch_array();
            
            foreach($system as $k => $v){
              $_SESSION['system'][$k] = $v;
            }
          }

          $dataStudents = $this->model_dashboard->getDataDashboard("SELECT * FROM students")->num_rows;
          $dataClasses = $this->model_dashboard->getDataDashboard("SELECT * FROM classes")->num_rows;
          $dataSubjects = $this->model_dashboard->getDataDashboard("SELECT * FROM subjects")->num_rows;

          $this->data['content'] = 'home/home';
          $this->data['title'] = 'home/home';
          $this->data['sub_content']['student_list'] = $dataStudents;
          $this->data['sub_content']['class_list'] = $dataClasses;
          $this->data['sub_content']['subject_list'] = $dataSubjects;
         
        $this->render('layouts/layout', $this->data);
    }

    public function detail($id='', $slug='') {
        echo 'id san pham: '.$id.'<br/>';
        echo 'slug: '.$slug;
    }

    public function search(){
        $keyword = $_GET['keyword'];
        echo 'tu khoa can tim: '.$keyword;
    }
}
?>