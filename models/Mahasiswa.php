<?php
require_once 'config.php';

class Mahasiswa {
    public function getAll() {
        global $conn;
        $sql = "SELECT * FROM mahasiswa";
        $result = $conn->query($sql);
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    //Menambahkan fungsi insert()
    public function insert($nama, $nim) {
        global $conn;

        if(!$conn) {
            die("Koneksi database tidak tersedia, periksa config.php dan koneksi");
        }

        //Menambahkan prepare statement untuk keamanan
        $stmt = $conn->prepare("INSERT INTO mahasiswa (nama, nim) VALUES (?, ?)");

        //periksa apakah prepare berhasil
        if ($stmt === false){
            die("Eksekusi query gagal: " . $stmt->error);
        }
        
        $stmt->bind_param("ss", $nama, $nim);
        
        if (!$stmt->execute()) {
            die("Eksekusi gagal: " . $stmt->error);
        }

        $success = $stmt->affected_rows >0;
        $stmt->close();
        return $success;
    }

    //Menambahkan fungsi getById()
    public function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->bind_param("i", $id); // "i" untuk menujukan tipe data integer
        $stmt->execute();
        $result =$stmt->get_result();
        $mhs = $result->fetch_assoc(); //mengambil satu baris data
        $stmt->close();
        return $mhs;
    }

    //Menambahkan fungsi update()
    public function update($id, $nama, $nim){
        global $conn;
        $stmt = $conn->prepare("UPDATE mahasiswa SET nama = ?, nim = ? WHERE id = ?");
        $stmt->bind_param("ssi", $nama, $nim, $id); // "ssi" adalah string, string, integer
        $stmt->execute();
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    }

    //Menambahkan fungsi delete()
    public function delete($id) {
        global $conn;
        $stmt =$conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $success = $stmt->affected_rows > 0;
        $stmt->close();
        return $success;
    } 
}
?>