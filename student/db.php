<?php 


class DB
{
    public $connection;

     public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database="student";

        //mack connection
        $this->connection=new mysqli($servername , $username ,$password ,$database);
        //chick connection
        if($this->connection->connect_errno)
        { 
        die("field connection:".$this->connection->connect_errno);
        }
        return $this->connection;
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

