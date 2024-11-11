<?php
class Database{
    private $__conn;

    function __construct(){
        global $db_config;

        $this->__conn = Connection::getInstance($db_config);
    }

    function insert($table, $data){
        global $con;

        if(!empty($data)){
            $fieldStr = '';
            $valueStr = '';
            foreach ($data as $key=>$value){
                $fieldStr.=$key.',';
                $valueStr.="'".$value."',";
            }
            $fieldStr = rtrim($fieldStr, ',');
            $valueStr = rtrim($valueStr, ',');

            $sql = "INSERT INTO $table($fieldStr) VALUES ($valueStr)";

            $status = $thís->query($sql);

            if($status){
                return true;
            }
        }

        return false;
    }

    function update($table, $data, $condition=''){
        if(!empty($data)){
            $uppdateStr='';
            foreach($data as $key=>$value){
                $uppdateStr.="$key='$value',";
            }

            $uppdateStr = rtrim($uppdateStr, ',');

            if(!empty($condition)){
                $sql = "UPDATE $table SET $uppdateStr WHERE $condition";
            }else{
                $sql = "UPDATE $table SET $uppdateStr";
            }

            $status = $this->query($sql);

            if($status){
                return true;
            }
        }

        return false;
    }

    function query($sql){
        // $statement = $this->__conn->prepare($sql);

        // $statement->execute();
        // return $statement;

        $statement = $this->__conn->query($sql);
       return $statement;
    }

    function lastInsertId(){
        return $this->__conn->lastInsertId();
    }
}
?>