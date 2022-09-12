<?php


namespace App\classes;
use App\classes\Database;

class Student
{
    public $name, $phone, $email, $seip_id, $database, $sql;

    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];
        $this->seip_id = $_POST['seip_id'];

    }
    public function newStudent(){
        $this->sql = "INSERT INTO `studets`(`name`, `phone`, `email`, `seip_id`) VALUES('$this->name','$this->phone','$this->email','$this->seip_id')";
        $this->database = new Database();
        mysqli_query($this->database->dbConnect(), $this->sql);
        echo 'success';
    }
}