<?php 

session_start();
$ex = $_SESSION['USERNAME'];

include 'koneksi.php';
include 'head.php'; 
?> 

<body>

<?php

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE USERNAME = '$ex' and LEVEL = 0");
$isi = mysqli_fetch_array($data);

?> 

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="logout.php"><img src="foto/penting/logo.png" height="50px" width="90px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
      
      <a href="logout.php">
        <button type="button" class="btn btn-danger btn-sm">Logout</button>
      </a>
    
  </div>  
</nav>


<div class="container" style="margin-top:25px">
  <div class="row">
    <div class="alert alert-success">
      Selamat Datang <strong><?php echo $isi['NAMA']; ?> </strong>
    </div>
    <div class="col-sm-12">
       
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Biodata</h4>
      
      <!-- form biodata -->      
      <form action="" method="POST">
        
        <div class="row">
          <div class="col-md-6">
          <b>Full Name</b>
          <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="<?php echo $isi['NAMA'] ?>" value="<?php echo $isi['NAMA'] ?>"></br>
          <b>Nick Name</b>
          <input type="text" class="form-control form-control-sm" name="nick" id="nick" placeholder="<?php echo $isi['NICKNAME'] ?>" value="<?php echo $isi['NICKNAME'] ?>">
          <b>Address</b>
              <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $isi['ALAMAT']; ?>" placeholder="<?php echo $isi['ALAMAT']; ?>">
          <b>Genre</b>
            <div class="form-group">
              <select name="jk" id="jk" class="form-control">
                <option value="<?php echo $isi['JK'] ?>"><?php echo $isi['JK'] ?></option>
                <option value="Perempuan" name="jk">Perempuan</option>
                <option value="Laki-Laki" name="jk">Laki-Laki</option>
              </select>
            </div>   
          <b>Telp/WA Number</b>
          <input type="text" class="form-control form-control-sm" name="telp" id="telp" placeholder="<?php echo $isi['NO_TELP'] ?>" value="<?php echo $isi['NO_TELP'] ?>"></br>

          <button type="submit" name="update_bio" class="btn btn-primary btn-sm">Save</button></br>
      </form>
          </div> <!-- row tutup -->

          <div class="row">
              <div class="col-md-6">
                
                <form action="" method="POST" enctype="multipart/form-data">
                  <img src="foto/pegawai/<?php echo $isi['FOTO']; ?>" height="300" widht="300">
                  <b>Uploud Foto</b></br>   
                  <small>Gambar Jpg/png.</small></br>
                  <input type="file" name="gambar">
                  <button type="submit" name="upload" class="btn btn-primary btn-sm">Upload</button></br>
                </form>

              </div>
          </div> <!-- row tutup -->  
        </div><!-- tutup -->
          
    <!-- tutup biodata -->

          </div>
        </div>


        <?php
        if($ex!=""){
          echo '
        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Update Password
              </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
              <div class="card-body">';

                      $id = mysqli_query($koneksi,"SELECT * FROM user WHERE USERNAME = '$ex'");
                      
                      $t = mysqli_fetch_array($id);
                    
            echo '
                <form method="POST" action="" onsubmit="validasi_tamu()">
                   <input type="text" id="pas1" name="pas1" value="'; echo $t['PASSWORD']; echo '" hidden="true">
                   <div class="form-group">
                    <input type="text" class="form-control" id="pas2" name="pas2" placeholder="Masukan Password Lama">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukan Password Baru">
                  </div>   
                  <button type="submit" name="ubah_pass" class="btn btn-success">Update Password</button>
                </form>


              </div>
            </div>
          </div>

        </div> 
        ';}
        ?>

    </div>
  </div>
</div>

<?php 

if(isset($_POST['ubah_pass'])){
   $pas1=$_POST['pas1'];
   $pas2=$_POST['pas2'];
   $new_pass=$_POST['pass'];

   if($pas1==$pas2){
      $ubah = "UPDATE user SET PASSWORD ='$new_pass' WHERE USERNAME='$ex' ";
      mysqli_query($koneksi, $ubah);
   }
}

if(isset($_POST['update_bio'])){
$nama = $_POST['nama'];
$nick = $_POST['nick'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

$query = "UPDATE user SET 
            NAMA='$nama',
            NICKNAME='$nick',
            NO_TELP='$telp',
            ALAMAT='$alamat',
            JK='$jk'
            WHERE USERNAME='$ex' AND LEVEL = 0 ";

mysqli_query($koneksi,$query);
}

if(isset($_POST['upload'])){
// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/pegawai/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
      $query = "UPDATE user SET FOTO = '$nama_file' WHERE LEVEL = 0 AND USERNAME='$ex' ";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo "Update Foto Berhasil"; // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      }
    }
  }
}
}

?>

</body>
</html>

<script type="text/javascript">
  function validasi_tamu() {
    var pas1 = document.getElementById("pas1").value;
    var pas2 = document.getElementById("pas2").value;
    var pass = document.getElementById("pass").value;
    
    if (pass !="" && pas1==pas2) {
      
      alert('Password Berhasil Diganti');
      return true;
    }else{
      alert('Tolong periksa Password Lama anda');
      return false;
    }
  }
</script>