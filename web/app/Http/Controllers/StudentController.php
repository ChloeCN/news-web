<?php
namespace App\Http\Controllers;
use App\Student;
class StudentController {
    public function index () {
        // echo '我是student控制器的index()方法';
        $model = new Student();
        $data = $model->getAll();
        require VIEW_PATH.'student.php';
    }
    public function say(){
        return "hello php";
    }
}
?>