<?php
require_once 'controllers/MahasiswaController.php';

$controller = new MahasiswaController();

// Tentukan action berdasarkan parameter GET
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $controller->index(); // Menampilkan daftar mahasiswa (Read)
        break;
    case 'create':
        $controller->create(); // Menampilkan form tambah atau memproses tambah (Create)
        break;
    case 'update':
        $controller->update(); // Menampilkan form edit atau memproses edit (Update)
        break;
    case 'delete':
        $controller->delete(); // Memproses penghapusan (Delete)
        break;
    default:
        $controller->index(); // Default: kembali ke daftar mahasiswa
        break;
}
?>