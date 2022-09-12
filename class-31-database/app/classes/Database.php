<?php


namespace App\classes;


class Database
{
    public $user;
    public $hostName;
    public $password;
    public $databaseName;
    public $dbCon;

    public function __construct()
    {
        $this->user = 'root';
        $this->hostName = 'localhost';
        $this->password = '';
        $this->databaseName = 'class_31';
    }
    public function dbConnect(){
       $this->dbCon =  mysqli_connect($this->hostName, $this->user, $this->password, $this->databaseName);
       return $this->dbCon;
    }
}