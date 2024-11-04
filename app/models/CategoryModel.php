<?php

class CategoryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(); // Pastikan kelas Database diinisialisasi dengan benar
    }

    // Fungsi untuk menampilkan semua kategori
    public function getCategories()
    {
        $this->db->query('SELECT CategoryId, CategoryName, Description FROM category');
        return $this->db->resultSet(); // Mengembalikan semua hasil sebagai array
    }
}
