<?php
define('_DIR_ROOT', __DIR__);

// Xử lý http root
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on'){
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
}else{
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
}

// $folder = str_replace(strtolower($_SERVER['DOCUMENT_ROOT']), '', strtolower(__DIR__));

// Xóa chuỗi `/xampp/htdocs` khỏi đường dẫn nếu có
$folder = str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__);

// Xóa dấu / ở đầu (nếu có)
$folder = ltrim($folder, '/');
$folder = str_replace("e://xampp//htdocs//", '', $folder);


// Tạo URL đầy đủ
$web_root = "http://localhost/dtmvc/";

define('_WEB_ROOT', $web_root);

$configs_dir = scandir('configs');
if(!empty($configs_dir)){
    foreach($configs_dir as $item){
        if($item!='.' && $item!='..' && file_exists('configs/'.$item)){
            require_once 'configs/'.$item;
        }
    }
}
require_once 'configs/routes.php'; 
require_once 'app/App.php';

if(!empty($config['database'])) {
    $db_config = array_filter($config['database']);

    if(!empty($db_config)){
        require_once 'core/Connection.php';
        require_once 'core/Database.php';
    } 
}

require_once 'core/Model.php';
require_once 'core/Controller.php'; // Load base controller
?>