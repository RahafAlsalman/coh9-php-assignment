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
        $name=$student_info['name'];
        $email=$student_info['email'];
        $phone=$student_info['phone'];
       

        $this->db->submit_query("INSERT INTO students (name, email, phone) VALUES ('$name','$email' , '$phone')");
    }
    

        public function get_students()
        {
                $students = array();
                $result = $this->db->submit_query("SELECT * FROM students");
        
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_object()) {
                        $students[] = $row;
                    }
                }
        
                return $students;
            }
        
}