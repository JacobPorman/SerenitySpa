<?php

class db
{
    public $connect;
    protected $servername = "localhost:3306";
    protected $username = "root";
    protected $password = "Admin@123";
    protected $dbname = "spa_database";

    function __construct()
    {
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->connect, $this->dbname);
        mysqli_query($this->connect, "SET NAMES 'utf8'");
    }
}
