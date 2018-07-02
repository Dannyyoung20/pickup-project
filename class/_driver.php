<?php
include '_auth.php';
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 6/30/2017
 * Time: 5:43 PM
 */
class Driver extends Db
{

    private $startTime;
    private $workEnds;

    public function getjobs()
    {
        $sql = $this->query("SELECT * FROM trips WHERE status = 'pending' LIMIT 2");
        if($num = mysqli_num_rows($sql) > 0) {
                for($i = 0; $i<=$num;$i++){
                    while ($data = $sql->fetch_assoc()) {
                    $result = '
                        <div class="job-desc-body">
                        <div class="notify-container">
                        <i class="fa fa-bell"></i>
                        </div>
                            <ul class="customer-desc">
                                <li class="customer-location"><i class="now-ui-icons location_pin"></i> 23 Akpan Street</li>
                                <li class="customer-destination"><i class="now-ui-icons location_map-big"></i> 50 Kogi road</li>
                                <li class="take-job"><a href="../dashboard/index.php?job" class="job-button">Take Job</a></li>
                            </ul>
                        </div>
                    ';
                    return $result;
                }
            }
        }
        return false;
    }

    public function driver_loggedin() {
        if(isset($_SESSION['d_username'])) {
            return true;
        }
        return false;

    }

    public function driver_id(){
        if(isset($_SESSION['d_id'])){
            $id = $_SESSION['d_id'];
            return $id;
        }
        return false;
    }

    public function updatepro($email, $phone, $age, $sex, $res)
    {
        $conn = $this->connection;
        $sql = mysqli_query($conn,"UPDATE drivers SET email = $email, phone = $phone, age = $age, sex = $sex, residence = $res WHERE id = '".$_SESSION['id']."'");
        
        if($sql){
            return true;
        }

        return false;
    }

    public function takejob($id) {
        $sql = $this->query("UPDATE trips SET status = 'taken',driver_id='".$this->driver_id()."' WHERE id = '".$id."'");
        if($sql){
            return true;
        }else{
            return false;
        }
    }

    public function resumework($id){
        $conn = $this->$this->connection;
        $sql = mysqli_query($conn, "UPDATE driver SET status = 1 WHERE id = '".$id."'");

        if($sql) {
            return true;
        }else{
            return false;
        }
    }

    public function getpaid($id) {
        $conn = $this->connection;
        $sql = mysqli_query($conn, "SELECT * FROM trips WHERE driver_id = '".$id."'");
        while($result = mysqli_fetch_assoc($sql)) {

        }
    }

    public function beginwork($id) {
        $this->getTime();
        $conn = $this->connection;
        $sql = mysqli_query($conn, "UPDATE drivers SET status = 1 AND time = '".$this->startTime."' WHERE id = '".$id."'");
        if($sql){


            return true;
        }

        return false;
    }

    public function getdstatus($id){
        $sql = "SELECT status FROM drivers WHERE id = '".$id."'";
        $query = $this->query($sql);
        while($result = mysqli_fetch_assoc($query)){
            return $result;
        }
        return false;
    }

    public function getuserdetails(){
        if(isset($_SESSION['d_username'])){

            $sql = "SELECT * FROM drivers WHERE username = '".$_SESSION['d_username']."'";
            $query = $this->query($sql);

            while($row  = mysqli_fetch_assoc($query)){
                $data = $row;
                return $data;
            }
    
            return false;

        }
    }

    public function getdriverdetails($d_id){
        $sql = "SELECT * FROM drivers WHERE id='".$d_id."'";
        $run = $this->query($sql);
        if($run){
            return $run;
        }

        return false;
    }


}

$driver = new Driver('localhost','root','','pickup');
