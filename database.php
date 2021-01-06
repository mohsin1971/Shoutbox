<?php 
class database{

    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;


    public $link;
    public $error;
    public function __construct(){
        $this->connectDB();
      
    }
     private function connectDB(){
     $this->link=   new mysqli($this->host, $this->user, $this->pass, $this->dbname);
     if(!$this->link){
        $this->error = "Connection fail".$this->link->connection_error;
        return false;
     }

    }

    public function select($query){
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($result->num_rows >0){
            return $result;
        }else {
            return false;
        }
    }

    public function insert($query){
        $inser_row = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($inser_row){
            echo "data create su";
        }
    }

    public function update($query){
        $update = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($update){
            echo "update data";
        }
    }

    public function delete($query){
        $delete = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($delete){
            echo "delete data";
        }
    }
}
?>