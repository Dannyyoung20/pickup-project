<?php
include '_auth.php';

class Customer extends Auth
{
    public function post_trip($location,$destination,$date,$l_long,$l_lat,$time,$u_id) {
	    $sql = "INSERT INTO trips VALUES('','','".$u_id."','".$location."','".$destination."','pending','".$l_long."','".$l_lat."','".$date."','".$time."')";
	    $run = $this->query($sql);
	    if($run) {
	        return true;
	    }
	    return false;
    }

    public function trip_auth() {
        if(isset($_SESSION['trip'])) {
            return true;
        }
        return false;
    }

    public function gettripstatus($id){
        $sql = "SELECT driver_id FROM trips WHERE user_id='".$id."' AND status='pending'";
        $run = $this->query($sql);
        while($data = mysqli_fetch_assoc($run)) {
            return $data['driver_id'];
        }

        return false;
    }
}

$user = new Customer('localhost','root','','pickup');