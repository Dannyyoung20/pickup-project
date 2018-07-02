<?php 

require '../class/_customer.php';
global $msg;
// CHECK IF USER IS LOGGED IN

 if($user->isloggedin() !== true){
    $user->redirect('../index.php');
}

if(isset($_GET['logout']) && $_GET['logout'] == 'true') {
    $user->logout();
}

if(isset($_GET['data'])){
	$data = $user->gettripstatus($_SESSION['id']);
	if($data == 0){
		echo '0';
	}else{
		$details = $user->getdriverdetails($data);
		if($details){
			echo '1';
		}else{
			echo '0';
		}
	}
}

if(isset($_POST['l_long']) || isset($_POST['l_lat']) || isset($_POST['ride'])) {
	if(!empty($_POST['date']) && !empty($_POST['location']) && !empty($_POST['destination'])) {
		$l_long = 2;
		$l_lat = 1;
		$date = $_POST['date'];
		$location = $_POST['location'];
		$destination = $_POST['destination'];
		$time = $_POST['time'];
		$card_no = $_POST['card-no'];
		$cvv = $_POST['cvv'];
		$expiration = $_POST['expire'];
		$u_id = $_SESSION['id'];
		if(is_numeric($cvv) && is_numeric($expiration) && is_numeric($card_no)){
		$status = $user->post_trip($location,$destination,$date,$l_long,$l_lat,$time,$u_id);
			if($status){
				$_SESSION['trip'] = $_SESSION['id'];
				$user->redirect('process.php');
			}
		}else{
			$msg = "<p class='text text-danger'><i>Invalid Payment Details</i></p>";
		}
	}else{
		$msg = '<p class="text text-danger"><i>Please fill all field</i></p>';
	}
}


?>