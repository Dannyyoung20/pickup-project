<?php

include '../class/_driver.php';

// CHECK IF DRIVER IS LOGGED IN
 if($driver->driver_loggedin() !== true){
    $driver->redirect('../index.php');
}

if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
    $user->logout();
}

if(isset($_POST['id']) && isset($_POST['status'])){
    $data = $driver->getdstatus($_POST['id']);
    $send = json_encode($data);
    echo $send;
}

$data = $driver->getuserdetails();
if($data){
    $fname = $data['firstname'];
    $lname = $data['lastname'];
}

if(isset($_GET['job'])){
    $id = $_GET['job'];
    $status = $driver->takejob($id);
    if($status) {
        $driver->redirect('process.php');
    }else{
        echo 0;
    }
}

?>