<?php

class GalleryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(); // Ensure the Database class is correctly defined and imported
    }

    // Function to retrieve all gallery data
    public function getGallery()
    {
        $this->db->query('SELECT GalleryId, ImageUrl, Title, Description FROM gallery');
        return $this->db->resultSet(); // Returns all results as an array
    }
}
?>
