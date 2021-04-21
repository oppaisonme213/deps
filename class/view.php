<?php 
require_once 'config.php';

class view extends config{

    public function viewData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl` WHERE `status` = 'PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo "<h3>Pending Feedbacks</h3>";
        echo "<table class=' table table-dark'>";
        echo "<thead>";
        echo "<th>name</th>";
        echo "<th>feedback</th>";
        echo "<th>date</th>";
        echo "<th>status</th>";
        echo "</thead>";
        foreach ($result as $data){
        echo "<tr>";     
        echo "<td>$data[name]</td>";
        echo "<td>$data[comms]</td>";
        echo "<td>$data[date]</td>";
        echo "<td>$data[status]</td>";
         
        echo "<td>
             <a class='btn btn-info' href='testimonial.php?edit=$data[id]'>Accept</a>
             <a class='btn btn1 danger' href='testimonial.php?delete=$data[id]'>Deny</a>
             </td>";
        echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
    }

    public function viewCompletedData(){
        $con = $this->con();
        $sql = "SELECT * FROM `tbl` WHERE `status` = 'APPROVED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        echo "<h3>FEEDBACK</h3>";
        echo "<table class=' table table-light shadow'>";
        echo "<thead>";
        echo "<th>name</th>";
        echo "<th>feedback</th>";
        echo "<th>date posted</th>";
        echo "<th>status</th>";
        echo "</thead>";
        foreach ($result as $data){
        echo "<tr>";     
        echo "<td>$data[name]</td>";
        echo "<td>$data[comms]</td>";
        echo "<td>$data[date]</td>";
        echo "<td>$data[status]</td>";
        echo "</tr>";
        }
        echo "</table>";
    }

}
?>