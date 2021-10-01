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

class About extends Controller
{
  public function index($nama = 'Zhafir', $pekerjaan = 'Mahasiswa', $umur = 20)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = ' About Me';

    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page()
  {
    $data['judul'] = 'Pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
