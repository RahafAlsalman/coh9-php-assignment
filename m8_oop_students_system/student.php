<?php require_once './db.php';

class Student
{
    protected $db;
    public function __construct()
    {
        $this->db=new DB();
    }
    public function creat($student_information)
    { 
        $validation=$this->validat_student_information($student_information);
        if($validation=!true);
        return $validation;

        $name=$student_information['name'];
        $email=$student_information['email'];
        $phone=$student_information['phone'];
        $gender=$student_information['gender'];
        

        $this->db->submit_query("INSERT INTO student (name,email,phone,gender.colo )
        VALUE('$name','$email','$phone','$gender',)");
    }

    public function get_student():array
    {
        $students=array();
        $result=$this->db->submit_query("SELECT * FROM student");
        if($result ->num_rows>0)
        {
            while($row=$result->fetch_object())
            {
                $students[]=$row;
             //var_dump($students);
            }
        }
        return $students;

    }



    protected function validat_student_information()
    {
        if(empty($student_information));
        return "Empty student information";
        if (!isset($student_information['name']))
            return "Name is required";
        if (!isset($student_information['gender']))
            return "Gender is required";
        if ($student_information['gender'] != "male" && $student_information['gender'] != "female")
            return "Gender should be male or female";

        return true;
    }
}