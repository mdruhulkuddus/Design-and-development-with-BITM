<?php


namespace App\classes;
use App\classes\Database;


class Student
{
    public $name, $roll, $phone, $email, $department, $session, $address, $sql, $database, $allInfo;
    public function __construct($data)
    {

            $this->name = isset($data['name']) ? $_POST['name'] : '';
            $this->roll =  isset($data['roll']) ? $_POST['roll'] : '';
            $this->phone = isset($data['phone']) ? $_POST['phone'] : '';
            $this->email =  isset($data['email']) ? $_POST['email'] : '';
            $this->department = isset($data['department']) ? $_POST['department'] : '';
            $this->session = isset($data['session']) ? $_POST['session'] : '';
            $this->address = isset($data['address']) ? $_POST['address'] : '';

    }

    public function newStudent(){
      $this->sql =  "INSERT INTO `students`(`name`, `roll`, `phone`, `email`, `department`, `session`, `address`) VALUES ('$this->name','$this->roll', '$this->phone', '$this->email', '$this->department', '$this->session', '$this->address')";
      $this->database = new Database();
      mysqli_query($this->database->dbConnect(), $this->sql);
      return 'success';
    }
    public function getAllStudentInfo(){
        $this->sql= "SELECT * FROM `students`";
        $this->database = new Database();
        $this->allInfo = mysqli_query($this->database->dbConnect(), $this->sql);
        return $this->allInfo;
    }
    public function deleteStudentInfo($delId){
        $this->sql= "DELETE FROM `students` WHERE id = $delId";
        $this->database = new Database();
        $this->stdInfo = mysqli_query($this->database->dbConnect(), $this->sql);
        return 'successfully deleted one row';
    }
    public function getStudentInfoById($id){
        $this->sql= "SELECT * FROM `students` WHERE id = $id";
        $this->database = new Database();
        $this->stdInfo = mysqli_query($this->database->dbConnect(), $this->sql);
        return $this->stdInfo;
    }
    public function editStudentInfoById($id){
        $this->sql= "UPDATE `students` SET `name`='$this->name',`roll`='$this->roll',`phone`='$this->phone',`email`='$this->email',`department`='$this->department',`session`='$this->session',`address`='$this->address' WHERE id = $id";
        $this->database = new Database();
        $this->stdInfo = mysqli_query($this->database->dbConnect(), $this->sql);
        return 'Updated successfully';
    }
}