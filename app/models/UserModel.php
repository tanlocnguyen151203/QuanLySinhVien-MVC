<?php
class UserModel extends Model{
    protected $_table = 'classes';

    public function getList(){
        $data = $this->db->query("SELECT * FROM $this->_table")->fetch_all();

        return $data;
    }

    public function getDetail($id){

    }
}
?>