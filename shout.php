<?php 
include_once "database.php";

class shout{
    private $db;

    public function __construct()
    {
        $this->db= new database();
    }

    public function getData(){
        $query = "SELECT * FROM tbl_shout ORDER BY id DEC";
        $result = $this->db->select($query);
        return $result;
    }
}

?>