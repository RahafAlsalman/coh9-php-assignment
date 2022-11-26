<?php
    require_once './student.php';
    require_once './db.php';
    
    $student = new Student();
    $student->creat($_POST);
    
    header("Location: ./");