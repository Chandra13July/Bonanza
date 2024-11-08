<?php

class MenuModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getMenu($category = null)
    {
        // Set the base query
        $query = 'SELECT MenuId, MenuName, Description, Price, ImageUrl FROM menu';
        
        // Add WHERE clause if category filter is provided
        if ($category) {
            $query .= ' WHERE Category = :category';
            $this->db->query($query);
            $this->db->bind(':category', $category);
        } else {
            $this->db->query($query);
        }
        
        return $this->db->resultSet();
    }
}
