<?php

class Book_model
{
    private $table = 'novel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBooks()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getBook()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = 51');
        return $this->db->resultSet();
    }

    public function getBukuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . 'WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBuku($data)
    {
        $query = "INSERT INTO novel
                       VALUES
                    ('', :judul, :penulis, :selesai, :rilis)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('selesai', $data['selesai']);
        $this->db->bind('rilis', $data['rilis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataBuku($data)
    {
        $query = "UPDATE novel SET judul = :judul, penulis = :penulis, selesai = :selesai, rilis = :rilis WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(':judul', $data['judul']);
        $this->db->bind(':penulis', $data['penulis']);
        $this->db->bind(':selesai', $data['selesai']);
        $this->db->bind(':rilis', $data['rilis']);
        $this->db->bind(':id', $data['id']); // assuming $data['id'] contains the id value

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function hapusDataBuku($id)
    {
        $query = "DELETE FROM novel WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
