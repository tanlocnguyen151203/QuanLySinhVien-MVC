<?php
class Connection{
    private static $instance = null, $conn = null;

    private function __construct($config){
        try {

            $con = new mysqli($config['host'], $config['user'], '', $config['db'], $config['port']);

            if ($con->connect_error) {
                die("Could not connect to mysql: " . $this->con->connect_error);
            }

            self::$conn = $con;
        //     $dsn = 'mysql:dbname='.$config['db'].';host'.$config['host'];

        // $options=[
        //     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        // ];

        // // function stop connect
        // $con = new PDO($dsn, $config['user'], $config['pass'], $options);
        } catch (Exception $exception) {
            $mess = $exception->getMessage();

            die($mess);

            // if(preg_match('/Access denied for user/', $mess)){
            //     die('Lỗi kết nối cơ sở dữ liệu');
            // }

            // if(preg_match('/Unknown database/', $mess)){
            //     die('Không tìm thấy cơ sở dữ liệu');
            // }
        }
    }

    public static function getInstance($config){
        if(self::$instance == null){
            $connection = new Connection($config);
            self::$instance = self::$conn;
        }

        return self::$instance;
    }
}
?>