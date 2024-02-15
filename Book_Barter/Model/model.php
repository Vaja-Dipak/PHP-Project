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

    function select($tbl,$whr="")
    {
        $sql = "SELECT * FROM $tbl";
        if ($whr != "") {
            $sql .= " WHERE ";
            foreach ($whr as $key => $value) {
                $sql .= "$key = '$value'";
            }
            $sql = rtrim($sql, "AND");
        }
        // echo $sql;
        $sqlexe = $this->db->query($sql);
        
        if ($sqlexe->num_rows > 0) {
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

    function update($tbl, $data, $whr)
    {
        $sql = "UPDATE $tbl SET";
        foreach ($data as $dkey => $dvalue) {
            $sql .= " $dkey = '$dvalue',";
        }
        $sql = rtrim($sql, ",");
        $sql .= " WHERE ";
        foreach ($whr as $key => $value) {
            $sql .= " $key = '$value' AND";
        }
        $sql = rtrim($sql, "AND");
        // echo $sql;
        // exit;
        $sqlEx = $this->db->query($sql);
        // echo "<pre>";
        // print_r($sqlEx);
        if ($sqlEx > 0) {
            $Res['Code'] = 1;
            $Res['Data'] = 1;
            $Res['Msg'] = "Success";
        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;
        
    }
    function delete($tbl, $whr = "")
    {
        $sql = "DELETE FROM $tbl";
        if ($whr != "") {
            $sql .= " WHERE ";
            foreach ($whr as $key => $value) {
                $sql .= "$key = '$value'";
            }
            $sql = rtrim($sql, "AND");
            // echo $sql;
        }
        $sqlEx = $this->db->query($sql);
        if ($sqlEx > 0) {
            $Res['Code'] = 1;
            $Res['Data'] = 1;   
            $Res['Msg'] = "Success";
        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;
    }
}

?>