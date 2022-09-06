<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $student = new Student();
        $students = $student->allStudents();
        include('pages/home.php');
    }
}

