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

    public function menu()
    {
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('home/menu');
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

    public function btnContact()
    {
        if ($this->model('ContactModel')->addContact($_POST) > 0) {
            $_SESSION['flash'] = 'Pesan berhasil dikirim!';
            header('Location: ' . BASEURL . '/home/contact');
            exit;
        } else {
            $_SESSION['flash'] = 'Pesan gagal dikirim, coba lagi.';
            header('Location: ' . BASEURL . '/home/contact');
            exit;
        }
    }
}
