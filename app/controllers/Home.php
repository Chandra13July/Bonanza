<?php

class Home extends Controller
{
    public function home()
    {
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('home/home');
        $this->view('templates/footer');
    }

    public function menu($category = null)
    {
        // Get menu items based on the provided category (if any)
        $MenuItems = $this->model('MenuModel')->getMenu($category);

        // Prepare data for the view
        $data = [
            'MenuItems' => $MenuItems,
            'SelectedCategory' => $category
        ];

        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('home/menu', $data);
        $this->view('templates/footer');
    }

    public function gallery()
    {
        // Mengambil model GalleryModel
        $galleryItems = $this->model('GalleryModel')->getGallery();

        // Menyertakan data galeri ke tampilan
        $data = [
            'galleryItems' => $galleryItems
        ];

        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('home/gallery', $data);
        $this->view('templates/footer');
    }

    public function contact()
    {
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('home/contact');
        $this->view('templates/footer');
    }

    public function about()
    {
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('home/about');
        $this->view('templates/footer');
    }
}
