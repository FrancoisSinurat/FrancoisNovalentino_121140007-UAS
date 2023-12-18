<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Form Handling</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-nav">
        <a href="index.html">Presensi</a>
        <a href="data.html">Data</a>
      </div>
    </nav>
    <table id="dataDisplay">
      <!-- Table for displaying server data -->
    </table>

    <h2>Operasi MySQL</h2>
    <form action="proses.php" method="POST">
        <input type="submit" name="tambah" value="Tambah Data">
        <input type="submit" name="hapus" value="Hapus Data">
        <input type="submit" name="tampilkan" value="Tampilkan Data">
    </form>
    
    <script src="script.js">
    </script>
  </body>
</html>

<?php
class Database {
   public $host = "localhost"; // Ganti dengan nama host MySQL Anda
   public $username = "root"; // Ganti dengan username MySQL Anda
   public $password = ""; // Ganti dengan password MySQL Anda
   public $database = "mahasiswa"; // Ganti dengan nama basis data Anda
   public $conn;

    // Method untuk membuat koneksi ke database
    public function connect() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
    }

    // Method untuk menambahkan data ke tabel mahasiswa
    public function tambahDataMahasiswa($nama, $email, $umur, $nim, $presensi, $gender) {
        $sql = "INSERT INTO mahasiswa (nama, email, umur, nim, presensi, gender) VALUES ('$nama', '$email', $umur, $nim, '$presensi', '$gender')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Data berhasil ditambahkan!<br>";
        } 
    }

    // Method untuk mengambil semua data dari tabel mahasiswa
    public function ambilDataMahasiswa() {
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Nama: " . $row["nama"]. " - Email: " . $row["email"]. "<br>";
            }
        } 
    }
}

?>
