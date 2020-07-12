<?php
namespace parking;
class DatabaseActions{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "login";

    private function connect_to_db(){
        $link = mysqli_connect($this->host, $this->username, $this->password, $this->database) or die($link);
        mysqli_select_db($link, $this->database);
        return $link;
    }

    private function closeConnection($link){
        mysqli_close($link); 
    }

    public function selectData($sql){
        $result = mysqli_query($this->connect_to_db(), $sql)
        or die("Field to query database".mysqli_error($link));
        return $result;
    }

    public function insertData($sql){
       $link = $this->connect_to_db();
       if ($link->query($sql)===TRUE){
             header("Location: index7.php");
            } else {
                 echo "Error: " . $sql . "<br>" . $link->error;
        }
    
    }

}
?>