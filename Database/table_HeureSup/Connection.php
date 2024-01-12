<?php
class Connection{

    private $dbhost = "localhost";
    private  $dbuser = "user";
    private $dbpass = "user";
    private $dbname = "Scolarite";
    private $con;

    public function __construct(){
        $this->con = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        if ($this->con->connect_error) {
            die("Failed to connect: ");
        }
    }

    public function getConnection(){
        return $this->con;
    }
}

?>