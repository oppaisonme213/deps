<?php 
require_once 'config.php';

class insert extends config {
    public $name;
    public $comms;

    public function __construct($name,$comms){
        $this->name = $name;
        $this->comms = $comms;
    }

    public function insertTask(){
        $con = $this->con();
        $sql = "INSERT INTO `tbl`(`name`,`comms`)VALUES('$this->name','$this->comms')";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>