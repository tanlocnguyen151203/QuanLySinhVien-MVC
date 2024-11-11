<?php
// class Database {
//     private $host = 'localhost';
//     private $user = 'root';
//     private $pass = '';
//     private $dbname = 'osrs_db';
//     private $port = 3308;
//     public $conn;

//     public function __construct() {
//         $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname, $this->port);
//         if ($this->conn->connect_error) {
//             die("Could not connect to mysql: " . $this->conn->connect_error);
//         }
//     }

//     public function getConnection() {
//         return $this->conn;
//     }
// }


$config['database'] = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => ' ',
    'db' => 'osrs_db',
    'port' => '3308',
];
?>