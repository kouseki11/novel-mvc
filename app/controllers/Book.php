<?php

class Book extends Controller {
    public function index($pengguna = 'Kouseki')
    {
        $data['judul'] = 'Daftar Novel';
        $data['buku'] = $this->model('Book_model')->getAllBooks();
        $data['nama'] = $pengguna;
        $this->view('templates/header', $data);
        $this->view('book/index', $data);
        $this->view('templates/footer');
    }
    public function ubah($pengguna = 'Kouseki')
    {
        $data['judul'] = 'Daftar Novel';
        $data['buku'] = $this->model('Book_model')->getBook();
        $data['nama'] = $pengguna;
        $this->view('templates/header', $data);
        $this->view('book/ubah', $data);
        $this->view('templates/footer');
    }

    public function update(){
        // $id = $_POST['id'];
        // $judul = $_POST['judul'];
        // $penulis = $_POST['penulis'];
        // $selesai = $_POST['selesai'];
        // $rilis = $_POST['rilis'];
        // $conn = mysqli_connect('localhost', 'root', '', 'buku_saya');
        // $query = "UPDATE novel SET judul = '$judul', penulis = '$penulis', selesai = '$selesai', rilis = '$rilis' WHERE id = $id";
        // mysqli_query($conn, $query);
        // mysqli_close($conn);
        $this->model('Book_model')->updateDataBuku($_POST);
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASE_URL . '/book');
        exit;
    }

    public function tambah()
    {
        if( $this->model('Book_model')->tambahDataBuku($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/book');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/book');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Book_model')->hapusDataBuku($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/book');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/book');
            exit;
        }
    }

    public function getUbah()
    {
       echo json_encode($this->model('Book_model')->getBukuById($_POST['id']));
    }
}

?>