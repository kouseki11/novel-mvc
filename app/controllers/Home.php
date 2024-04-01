<?php

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['nama'] = 'Kouseki';
        $data['usia'] = '16';
        $data['hobi'] = 'Membaca Novel';
        $data['pekerjaan'] = 'Siswa';
        $data['gambar'] = 'HugeDomains_com.jpg';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}
?>