<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class Model
{
    public $db = "";
    function __construct()
    {
        try {
            $this->db = new mysqli("localhost", "root", "", "book_barter");
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    function insert($tbl,$data){
        $sql="INSERT INTO $tbl ";
        $key=implode($data);
        echo $key;
    }
}
$model=new Model;

?>