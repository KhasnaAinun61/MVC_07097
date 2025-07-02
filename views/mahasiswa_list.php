<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5"> <h1 class="mb-4">Daftar Mahasiswa</h1>
    <a href="index.php?action=create" class="btn btn-primary mb-3">Tambah Mahasiswa Baru</a> <table class="table table-striped table-bordered"> <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
    </thead>
    </tbody>
        <?php foreach($data as $mhs): ?>
        <tr>
            <td><?= $mhs['id']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td>
                <a href="index.php?action=update&id=<?= $mhs['id']; ?>">Edit</a> |
                <a href="index.php?action=delete&id=<?= $mhs['id']; ?> onclick="return confirm('Apa Anda yakin ingin menghapus data ini?');">Hapus</a>   
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>