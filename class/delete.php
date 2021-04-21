<?php 
require_once 'config.php';

class delete extends config {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function deleteTask(){
        $con = $this->con();
        $sql = "DELETE FROM `tbl`WHERE `id` = $this->name";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>