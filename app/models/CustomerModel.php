<?php

class CustomerModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Fungsi untuk signup
    public function signup($data)
    {
        $query = "INSERT INTO customer (username, email, password) VALUES (:username, :email, :password)";
        
        // Binding data
        $this->db->query($query);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', password_hash($data['password'], PASSWORD_DEFAULT));

        // Eksekusi dan cek apakah data berhasil dimasukkan
        return $this->db->execute();
    }

    // Fungsi untuk cek apakah email sudah terdaftar
    public function getCustomerByEmail($email)
    {
        $query = "SELECT * FROM customer WHERE email = :email";
        $this->db->query($query);
        $this->db->bind(':email', $email);
        return $this->db->single(); // Mengembalikan satu baris jika ada
    }
}
