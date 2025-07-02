<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
        <h1 class="mb-4">Edit Mahasiswa</h1>
        <?php if (isset($mhs) && $mhs): ?>
        <form action="index.php?action=update" method="POST">
            <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM:</label><br>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $mhs['nim']; ?>" required>
            </div>
            <button type="submit">Update</button>
        </form>

        <?php else: ?>
            <p class="alert alert-warning">Data Mahasiswa Tidak Ditemukan</p>
            <?php endif; ?>
            <br>
            <a href="index.php">Kembali ke Daftar Mahasiswa</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>