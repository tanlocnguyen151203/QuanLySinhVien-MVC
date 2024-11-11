<?php
class StudentModel extends Model{
    protected $_table = 'students';

    public function getAllStudent(){
        $sql = $this->db->query("SELECT * FROM $this->_table");
    return $sql;
    }
    
}
?>