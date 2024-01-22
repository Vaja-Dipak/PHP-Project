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
            echo `<script>alert("Database connection error...")</script>`;
        }
    }

    function insert($tbl, $data)
    {
        $key = implode(", ", array_keys($data));
        $val = implode("','", $data);

        $sql = "INSERT INTO $tbl($key) VALUES('$val') ";
        $sqlex = $this->db->query($sql);

        if ($sqlex > 0) {
            $Res["code"] = 1;
            $Res["msg"] = "Success";
            $Res["data"] = 1;
        } else {
            $Res["code"] = 0;
            $Res["msg"] = "Try again";
            $Res["data"] = 0;
        }
        return $Res;
    }

    function login($where)
    {
        $sql = "SELECT * FROM userdata WHERE u_email= '".$where['u_email']."' AND u_password= '".$where['u_password']."'";
        $sqlexe = $this->db->query($sql);
        
        if ($sqlexe->num_rows > 0) {
            $data = $sqlexe->fetch_object();

            $Res['code'] = 1;
            $Res['msg'] = "success";
            $Res['data'] = $data;
        } else {
            $Res['code'] = 0;
            $Res['msg'] = "try again";
            $Res['data'] = 0;
        }
        return $Res;
    }

    function select($tbl)
    {
        $sql = "SELECT * FROM $tbl";
        echo $sql;
        $sqlexe = $this->db->query($sql);
        
        if ($sqlexe > 0) {
            while ($data = $sqlexe->fetch_object()) {
                $fetchdata[] = $data;
            }
            $Res['code'] = 1;
            $Res['msg'] = "success";
            $Res['data'] = $fetchdata;
        } else {
            $Res['code'] = 0;
            $Res['msg'] = "try again";
            $Res['data'] = 0;
        }
        return $Res;
    }
}

?>