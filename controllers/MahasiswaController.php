<?php
require_once 'models/Mahasiswa.php';

class MahasiswaController {
    public function index() {
        $model = new Mahasiswa();
        $data = $model->getAll();
        require 'views/mahasiswa_list.php';
    }
    //Penambahan fungsi create()
    public function create(){
        $model = new Mahasiswa();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Apabila request merupakan POST (submit), maka proses data
            $nama = $_POST['nama'];
            $nim  = $_POST['nim'];

            if($model->insert($nama, $nim)) {
                header("Location: index.php"); //diarahkan ke daftar mahasiswa apabila berhasil
                exit();
            }else {
                echo "Gagal menambahkan data mahasiswa";
            }
        } else {
            require 'views/mahasiswa_create.php';
        } 
    }

    //penambahan fungsi update()
    public function update(){
        $model = new Mahasiswa();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id   = $_POST['id'];
            $nama = $_POST['nama'];
            $nim  = $_POST['nim'];

            if ($model->update($id, $nama, $nim)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal Memperbarui Data Mahasiswa";
            }
        } elseif (isset($_GET['id'])) {
            //jika request dengan id, menampilkan form dengan data sebelumnya
            $id = $_GET['id'];
            $mhs = $model->getById($id);
            if ($mhs) {
                require 'views/mahasiswa_update.php';
            } else {
                echo "Mahasiswa tidak ditemukan";
            }
        } else {
            //jika akses tanpa id
            header("Location: index.php");
            exit();
        }
    }

    //Penambahan fungsi delete()
    public function delete(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model = new Mahasiswa();
            if ($model->delete($id)) {
                header("Location: index.php");
                exit();
            }else {
                echo "Gagal Menghapus Data";
            }
        } else {
            header("Location: index.php");
            exit();
        }
    }
}
?>