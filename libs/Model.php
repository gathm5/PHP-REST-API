<?php

class Model
{

    function __construct()
    {
        try {
            $this->db = new Database();
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "$e->getMessage()";
            //file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
    }

    public function select($query, $params = null)
    {

    }

}