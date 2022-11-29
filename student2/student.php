<?php
require_once './db.php';

class Student
{

    protected $db;
    public function __construct()
    {
        $this->db=new DB();
        
    }

    public function creat($student_info)
    {
    
        $validation = $this->validate_student_information($student_info);
        if ($validation != true)
        {
            return $validation;
        }
        $name=$student_info['name'];
        $email=$student_info['email'];
        $phone=$student_info['phone'];
        
        $this->db->submit_query("INSERT INTO students(name ,email,phone)VALUES('$name','$email','$phone') ");

    }
    
    public function get_student(): array
    {
        $students=array();
        $result= $this->db->submit_query("SELECT* FROM students");
        if($result->num_rows>0)
        {
            while ($rows=$result->fetch_object())
            {
                $students[]=$rows;
                
                
            }
        }
        
        return $students;
        
    }
    protected function validate_student_information($student_info)
    {
    // Validation
        if (empty($student_info))
        {
            return "Empty student information";
        }
        
        if (!isset($student_info['name']))
        {
            return "Name is required";
        }
        
        return true;
    }
}
