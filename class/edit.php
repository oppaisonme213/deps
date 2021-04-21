<?php 
require_once 'config.php';

class edit extends config {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function editTask(){
        $con = $this->con();
        $sql = "UPDATE `tbl` SET `status` = 'APPROVED' where `id` =$this->name";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>