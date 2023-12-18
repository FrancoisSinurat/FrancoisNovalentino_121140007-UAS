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
        <a href="presensi.html">Presensi</a>
        <a href="proses.php">Data</a>
      </div>
    </nav>
    <form id="myForm" action="proses.php" method="post">
      <h2>Form Presensi Mahasiswa</h1>
      <label for="nama">Nama Lengkap :</label>
      <input type="text" id="nama" name="nama" required/><br /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required/><br /><br />

      <label for="umur">Umur:</label>
      <input type="number" id="umur" name="umur" required/><br /><br />

      <label for="nim">NIM:</label>
      <input type="number" id="nim" name="nim" required/><br /><br />

      <label for="presensi">Presensi:</label>
      <input type="checkbox" id="presensi" name="presensi" /><br /><br />

      <label for="gender">Gender:</label>
      <input type="radio" id="pria" name="gender" value="pria" />
      <label for="pria">Laki - Laki</label>
      <input type="radio" id="perempuan" name="gender" value="perempuan" />
      <label for="perempuan">Perempuan</label><br /><br />

      <input type="submit" value="Submit" />
    </form>

    <table id="dataDisplay">
      <!-- Table for displaying server data -->
    </table>
        
    
    <script src="script.js">
    </script>
  </body>
</html>
