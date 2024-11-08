<?php

class Admin extends Controller
{
    public function dashboard()
    {
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('admin/dashboard');
    }
}
