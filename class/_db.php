<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 6/30/2017
 * Time: 5:43 PM
 */
class Db
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'pickup';
    public $connection;

    public function __construct($host, $username, $password, $db_name)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;

    }

    public function connect()
    {
        if(isset($this->connection)){
            return $this->connection;
        } else if ($this->connection = mysqli_connect($this->host,$this->username,$this->password,$this->db_name)) {
            return $this->connection;
        }
        return mysqli_connect_error();
    }

    public function query($sql)
    {
        $conn = $this->connect();
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function redirect($url)
    {
        header('Location: '.$url);
    }
}