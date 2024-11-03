<?php

class CustomerModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database(); // Assuming you have a Database class for DB connection
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM customer WHERE Email = :email');
        $this->db->bind(':email', $email);
        return $this->db->single();
    }

    public function signup($data)
    {
        $this->db->query('INSERT INTO customer (Username, Email, Password) VALUES (:username, :email, :password)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        // Hash the password before storing it
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->bind(':password', $hashedPassword);
        return $this->db->execute();
    }
}
