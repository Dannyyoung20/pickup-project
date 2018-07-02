<?php
include '_db.php';

class Auth extends Db
{
    public $error = array();

    public function register($uname, $pass, $email, $phone, $res,$cc,$cvv)
    {
        $smt  = ("INSERT INTO user VALUES ('','".$uname."','".$pass."','".$email."','".$phone."','".$res."',0)");
        $run = $this->query($smt);

        if($run){
            $_SESSION['username'] = $uname;
            $this->redirect('dashboard');
        }



        return true;
    }

    public function login($uname,$pass)
    {
        $sql = "SELECT * FROM user WHERE username = '".$uname."'";
        $run = $this->query($sql);
        if($run){
            if($data = mysqli_fetch_assoc($run)) {
                $verify  = $pass;
                if($verify == $data['password']){
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['username'] = $data['username'];
                    $this->redirect('ride');
                }
            }
        }
        return false;
    }

    public function driver_login($uname,$pass)
    {
        $sql = "SELECT * FROM drivers WHERE username = '".$uname."'";
        $run = $this->query($sql);
        if($run){
            if($data = mysqli_fetch_assoc($run)) {
                $verify  = $pass;
                if($verify == $data['password']){
                    $_SESSION['d_id'] = $data['id'];
                    $_SESSION['d_username'] = $data['username'];
                    $this->redirect('dashboard');
                }
            }
        }
        return false;
    }

    public function logout()
    {

        unset($_SESSION['id']);
        unset($_SESSION['username']);
        session_destroy();
        $this->redirect('../index.php');
    }

    public function isloggedin()
    {
        if(isset($_SESSION['id'])) {
            return true;
        }
        return false;
    }


    public function driver_reg($fname,$lname,$uname, $pass, $email, $phone, $res) {
        $smt  = ("INSERT INTO drivers VALUES ('','".$fname."','".$lname."','".$uname."','".$pass."','".$email."','".$phone."','".$res."',1)");
        $run = $this->query($smt);

        if($run){
            $_SESSION['d_username'] = $uname;
            $this->redirect('dashboard');
        }
    }

}






?>