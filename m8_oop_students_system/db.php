<?php 
class DB
{
    public $connection;
     
    public function __construct()
    {
        $servername="localhost";
        $username="root";
        $password="";
        $database="m8_oop_students_system";

        //ceat connection
        $this->connection=new mysqli($servername , $username , $password ,$database);
        //echo var_dump($this);
        //check connection
        if($this->connection->connect_errno)
        {
            die(" connection faild:".$this->connection->error);
        }
      
    }
    public function __destruct()
    {
        $this->connection->close();
    }
    public function submit_query($sql)
    {
        return $this->connection->query($sql);
    }
}