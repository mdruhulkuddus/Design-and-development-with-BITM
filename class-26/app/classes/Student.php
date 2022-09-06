<?php
namespace App\classes;

class Student
{

    public $student = [];
    public function __construct()
    {
        $this->student = [
            0 => [
                'id' => '1',
                'name' => 'ruhul',
                'email' => 'mrk@gmail.com',
                'phone' => '5465102501'
            ],
            1 => [
                'id' => '2',
                'name' => 'al',
                'email' => 'al@gmail.com',
                'phone' => '45580554'
            ],        
            11 => [
                'id' => '22',
                'name' => 'link',
                'email' => 'link@gmail.com',
                'phone' => '654980'
            ],        
        ]; 
    }

    public function allStudents(){
        return $this->student;
    }

   
}


?>