<?php

/**
 * 
 */
class Home extends Controller
{
    public function index()
    {
        // die(!isset($_SESSION['nama']));
        // if (!isset($_SESSION['nama'])) {
        //     $this->view('home/index');
        // } else {
        //     if ($_SESSION['type'] == 'blog' &&  ($_SESSION['type'] == 'blog') != null) {
        //         // die('blog');
        //         $this->redirect('/User/blog');
        //     } else if ($_SESSION['type'] == 'diary' &&  ($_SESSION['type'] == 'diary') != null) {
        //         // die('diary');
        //         $this->redirect('/User/diary');
        //     }
        // }
        $this->view('welcome');
    }
    public function login()
    {
        $data['judul'] = 'Login';

        $this->view('templates/headerH', $data);
        $this->view('home/login');
        $this->view('templates/footer');
    }
    public function register()
    {
        $data['judul'] = 'Register';

        $this->view('templates/headerH', $data);
        $this->view('home/register');
        $this->view('templates/footer');
    }
}
