<?php
class student
{
//propartes:
 
//methods:

function connect(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="m8_oop_students_system";
    $conn=mysqli_connect($servername , $username , $password , $database);
    if(!$conn)
    {
        die("connect field". "" .mysqli_connect_errno());
    }
    return $conn;
}
    function get_student(){
        $connection=connect();
        $sql="SELECT * FROM student_form";
        $result=mysqli_query($connection ,$sql);
        $customers = array();
     
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $customers[] = $row;
            }
        }
        mysqli_close($connection);
     
        return $customers;
    }
}

 