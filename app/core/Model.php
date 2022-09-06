<?php
class Model {

    protected $tableName;
    protected $queryResult;
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData()
    {
        $this->queryResult = $this->db->query('SELECT * FROM ' . $this->tableName);
        $this->queryResult = $this->db->getResultObject();
        return $this->queryResult;
    }

    public function getDataById($id)
    {
        $this->queryResult = $this->db->query('SELECT * FROM ' . $this->tableName . ' WHERE id=' . $id);
        $this->queryResult = $this->db->getResultArray();
        return $this->queryResult;
    }
}