# Projek CRUD Mahasiswa dengan MVC

Projek ini merupakan contoh aplikasi dasar untuk mengelola data mahasiswa yang dibuat dengan pola MVC (Model-View_Controller) dengan PHP.

# Alur Program ini (Alur MVC)

Program ini dirancang dengan pola MVC agar bagian pada logika, tampilan, dan data terpisah. Berikut merupakan penjelasan alurnya:

1.  Pengguna membuka aplikasi:
    Ketika membuka index.php pada browser misalnya localhost/mvc_crud/index.php. Itu merupakan awal dari permintaan.

2.  Controller menerima permintaan ('MahasiswaController.php):
    -File index.php akan mengarahkan semua permintaan pada MahasiswaController.php.
    -Controller bertugas untuk menerima apa yang diminta oleh pengguna (misalnya tampilkan daftar, create data, atau update data).
    -Controller memutuskan yang harus dilakukan selanjutnya :
        -Jika diminta menampilkan daftar, controller akan meminta data dari Model.
        -Jika diminta menambah/mengedit data, Controller akan menampilkan form, atau memproses data yang dikirim melalui form.
        -Jika diminta menghapus data, Controller akan meminta Model untuk menghapus data.

3.  Model berbicara dengan database (Mahasiswa.php) :
    -Model (Mahasiswa.php) adalah bagian yang terhubung dengan database.
    -Ketika Controller butuh data seperti data mahasiswa, atau ingin menyimpan dan mengubah ataupun mengapus data, maka Controller akan menyuruh Model untuk melakukannya.
    -Model akan menjalankan perintah SQL seperti SELECT, INSERT, UPDATE, dan DELETE ke dalam database.
    -Setelah selesai, Model akan memberikan hasil (misalnya data mahasiswa atau konfirmasi tindakan sukses) kembali ke Controller.

4.  View untuk menampilkan hasil :
    -Setelah Controller mendapatkan semua informasi yang diperlukan dari Model,Controller akan memuat salah satu file View (seperti mahasiswa_create.php dan yang lain nya).
    -File view berisi kode html dan sedikit php untuk menampilkan data kepada pengguna. View tidak berinteraksi langsung dengan database, ia hanya menampilkan apa yang diberikan oleh Controller.

Singkatnya :
Pengguna (browser) ->index.php -> Controller -> Model (ke database) -> Controller -> view -> Tampilan di Browser.