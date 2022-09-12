<?php


namespace App\classes;


class Database
{
    public $hostname, $user, $password, $databaseName, $dbCon;
    public function __construct()
    {
        $this->hostName = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->databaseName = 'class_32';
    }
    public function dbConnect(){
        $this->dbCon = mysqli_connect($this->hostName, $this->user, $this->password, $this->databaseName);
        return $this->dbCon;
    }

}