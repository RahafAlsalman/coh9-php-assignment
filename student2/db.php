<?php
class DB
{
    public $connection;
    //==============creat connection==============

    public function __construct()
    {
        $servername="localhost";
        $username="root";
        $password="";
        $database="student";

        //creat connection
        $this->connection=new mysqli($servername ,$username ,$password ,$database);

        //chick connection
        if($this->connection->connect_error){
            die("field connection:".$this->connection->connect_error);
        }
        
        return $this->connection;
    }
    //===========close connection===========

    public function __destruct()
    {
        $this->connection->close();
    }

    //============submit query===========
    public function submit_query($sql)
    {
        return $this->connection->query($sql);
         var_dump($sql);
    }
}
