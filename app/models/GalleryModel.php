<?php

class GalleryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(); // Asumsikan Anda memiliki kelas Database untuk koneksi DB
    }

    // Fungsi untuk menampilkan semua data galeri
    public function getGallery()
    {
        $this->db->query('SELECT GalleryId, ImageUrl, Title, Description FROM gallery');
        return $this->db->resultSet(); // Mengembalikan semua hasil sebagai array
    }
}
