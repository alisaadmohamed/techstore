<?php

namespace TechStore\Classes;

abstract class Db
{
    protected $conn;
    protected $table;

    public function connect()
    {

        $this->conn = mysqli_connect(SERVER, USER, PASS, DB);

    }

    public function selectAll($col = "*")
    {
        $sql = "SELECT $col FROM $this->table";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    public function selectId($id, $col = "*")
    {
        $sql = "SELECT $col FROM $this->table WHERE id =$id";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($res);
    }

    public function selectWhere($cond, $col = "*")
    {

        $sql = "SELECT $col FROM $this->table WHERE $cond";
        $res = mysqli_query($this->conn, $sql);
        return \mysqli_fetch_all($res, MYSQLI_ASSOC);

        //  return mysqli_fetch_assoc($res);

    }

    public function getCount()
    {
        $sql = "SELECT COUNT(*) as cnt FROM $this->table";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($res);

    }

    public function insert($col, $values)
    {
        $sql = "INSERT INTO $this->table ($col) VALUES ($values)";
        return mysqli_query($this->conn, $sql);

    }


    public function insertAndGetId($col, $values)
    {
        $sql = "INSERT INTO $this->table ($col) VALUES ($values)";
         mysqli_query($this->conn, $sql);
         return mysqli_insert_id($this->conn);

    }

  

    public function update($set, $id)
    {

        $sql = "UPDATE $this->table SET $set WHERE id = $id";
        return mysqli_query($this->conn, $sql);

    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return mysqli_query($this->conn, $sql);

    }

}
