<?php

class Mahasiswa extends Model {
    protected $tableName = 'mahasiswa';

    public function insertData($mhs)
    {
        $this->queryResult = $this->db->query('INSERT INTO ' . $this->tableName . 
            " (nama, jurusan, fakultas, nim) VALUES(:nama, :jurusan, :fakultas, :nim)");
        
        $this->db->bind('nama', $mhs['nama']);
        $this->db->bind('jurusan', $mhs['jurusan']);
        $this->db->bind('fakultas', $mhs['fakultas']);
        $this->db->bind('nim', $mhs['nim']);

        $this->db->execute();
    }
}