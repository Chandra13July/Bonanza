<?php

class MenuModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(); // Pastikan kelas Database diinisialisasi dengan benar
    }

    // Fungsi untuk menampilkan semua data menu atau berdasarkan kategori
    public function getMenu($categoryId = null)
    {
        if ($categoryId) {
            $this->db->query('SELECT MenuId, MenuName, Description, Price, ImageUrl FROM menu WHERE CategoryId = :categoryId');
            $this->db->bind(':categoryId', $categoryId);
        } else {
            $this->db->query('SELECT MenuId, MenuName, Description, Price, ImageUrl FROM menu');
        }
        return $this->db->resultSet(); // Mengembalikan semua hasil sebagai array
    }
}
