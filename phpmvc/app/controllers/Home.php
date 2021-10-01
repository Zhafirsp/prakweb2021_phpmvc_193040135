<?php
/*
Muhammad Zhafir Sunandy Pramana
193040135
https://github.com/Zhafirsp/prakweb2021_phpmvc_193040135
Pertemuan 4 - 30 September 2021
Mempelajari tentang membuat aplikasi MVC dari mulai Pendahuluan episode 1 hingga pembuatan model episode 7
*/
?>

<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = " Home";
    $data['nama'] = $this->model('User_model')->getUser();

    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}
