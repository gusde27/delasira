<?php
include '../koneksi.php';

//tambah pegawai
if(isset($_POST['tambah_pegawai'])){
   $new_user=$_POST['username'];
   $new_pass=$_POST['pass'];

   $tambah_pegawai = "INSERT INTO user (USERNAME, PASSWORD, LEVEL) VALUES ('$new_user','$new_pass', 0)";

   mysqli_query($koneksi, $tambah_pegawai);

   header("location:../admin.php");
}

if(isset($_POST['tambah_manager'])){
   $new_user=$_POST['username'];
   $new_pass=$_POST['pass'];

   $tambah_pegawai = "INSERT INTO user (USERNAME, PASSWORD, LEVEL) VALUES ('$new_user','$new_pass', 2)";

   mysqli_query($koneksi, $tambah_pegawai);

   header("location:../admin.php");
}

//event
if(isset($_POST['post_event'])){
   $nama_e = $_POST['nama_e'];
   $tanggal_e=$_POST['tanggal_e'];

// membaca input dari form
$input = $_POST['des_e'];

// memecah string input berdasarkan karakter '
$pecah = explode("




", $input);

// string kosong inisialisasi
$text = "";

// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $text
for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/event_satu/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
      $tambah_event = "INSERT INTO event (NAMA_E, TANGGAL_E, DES_E, FOTO_E) VALUES ('$nama_e','$tanggal_e','$text','$nama_file')";
      $sql = mysqli_query($koneksi, $tambah_event); // Eksekusi/ Jalankan query dari variabel $query
      
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

header("location:../admin.php");
}
//tutup

if(isset($_POST['update_jabatan'])){
   $user = $_POST['id_user'];
   $jabatan = $_POST['jabatan'];

   $update = "UPDATE user SET JABATAN = '$jabatan' WHERE USERNAME ='$user' ";

   mysqli_query($koneksi, $update);

   header("location:../admin.php");
}

//delete user
if(isset($_POST['del_user'])){
   $user = $_POST['id_user'];

   $del = "DELETE FROM user WHERE USERNAME ='$user' ";

   mysqli_query($koneksi, $del);

   header("location:../admin.php");
}
//tutup

//delete event
if(isset($_POST['del_event'])){
  $event = $_POST['id_event'];

  $del_event = "DELETE FROM event WHERE NAMA_E ='$event' ";
  mysqli_query($koneksi, $del_event);

  header("location:../admin.php");
}
//tutup

//post produk
if(isset($_POST['post_produk'])){
   
   $nama_p=$_POST['nama_p'];
   $jenis_p=$_POST['jenis_p'];
   //$des_p=$_POST['des_p'];

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "../foto/produk/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
      $produk = "INSERT INTO produk (NAMA_P, JENIS_P, /*DES_P,*/ FOTO_P) VALUES ('$nama_p','$jenis_p','$nama_file') ";
      $sql = mysqli_query($koneksi, $produk); // Eksekusi/ Jalankan query dari variabel $query
      
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

header("location:../admin.php");
}
//tutup

//edit produk
if(isset($_POST['update_produk'])){
   
   $nama_p=$_POST['nama_p'];
   $jenis_p=$_POST['jenis_p'];
   $des_p=$_POST['des_p'];
   $id_produk=$_POST['id_produk'];

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/produk/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
      $produk = "UPDATE produk SET NAMA_P='$nama_p',JENIS_P='$jenis_p',DES_P='$des_p',FOTO_P='$nama_file' WHERE FOTO_P = '$id_produk' ";
      $sql = mysqli_query($koneksi, $produk); // Eksekusi/ Jalankan query dari variabel $query
      
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

header("location:../admin.php");
}
//tutup

//delete produk
if(isset($_POST['del_produk'])){
   $id = $_POST['id_produk'];

   $del = "DELETE FROM produk WHERE FOTO_P ='$id' ";

   mysqli_query($koneksi, $del);

   header("location:../admin.php");
}
//tutup

//edit event
if(isset($_POST['update_event'])){
   
   $nama_e=$_POST['nama_e'];
   $tanggal_e=$_POST['tanggal_e'];
   $id_event=$_POST['id_event'];

// membaca input dari form
$input = $_POST['des_e'];

// memecah string input berdasarkan karakter '
$pecah = explode("




", $input);

// string kosong inisialisasi
$text = "";

// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
// lalu menggabungnya menjadi satu string utuh $text
for ($i=0; $i<=count($pecah)-1; $i++)
{
   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
   $text .= $part;
}


// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/event_satu/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
      $event = "UPDATE event SET NAMA_E='$nama_e', TANGGAL_E='$tanggal_e', DES_E='$text',FOTO_E='$nama_file' WHERE NAMA_E = '$id_event' ";
      $sql = mysqli_query($koneksi, $event); // Eksekusi/ Jalankan query dari variabel $query
      
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

header("location:../admin.php");
}
//tutup

//posting foto event
if(isset($_POST['post_foto_e'])){
    
    $nama_e = $_POST['nama_e'];
    $jumlah = count($_FILES['gambar']['name']);
    if ($jumlah > 0) {
      for ($i=0; $i < $jumlah; $i++) { 
        $file_name = $_FILES['gambar']['name'][$i];
        $tmp_name = $_FILES['gambar']['tmp_name'][$i];        
        
        move_uploaded_file($tmp_name, "../foto/event/".$file_name);
        mysqli_query($koneksi," INSERT INTO foto_event (NAMA_E, FOTO_E) 
                                VALUES ('$nama_e','$file_name')");       
      }
    }

    header("location:../admin.php");
  }

//posting foto fasilitas
if(isset($_POST['post_foto_fasilitas'])){
    
  $nama_f = $_POST['nama_f'];
  $jumlah = count($_FILES['gambar']['name']);
  if ($jumlah > 0) {
    for ($i=0; $i < $jumlah; $i++) { 
      $file_name = $_FILES['gambar']['name'][$i];
      $tmp_name = $_FILES['gambar']['tmp_name'][$i];        
      
      move_uploaded_file($tmp_name, "../foto/fasilitas/".$file_name);
      mysqli_query($koneksi," INSERT INTO fasilitas (NAMA_F, FOTO_F) 
                              VALUES ('$nama_f','$file_name')");       
    }
  }

  header("location:../admin.php");
}

//update bio
if(isset($_POST['update_bio'])){

$nama = $_POST['nama'];
$nick = $_POST['nick'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

$user = $_POST['user'];

$query = "UPDATE user SET 
						NAMA='$nama',
						NICKNAME='$nick',
						NO_TELP='$telp',
						JK='$jk',
            ALAMAT='$alamat'
						WHERE USERNAME='$user' AND LEVEL=1";

mysqli_query($koneksi,$query);

header("location:../admin.php");
}

//update foto admin
if(isset($_POST['update_foto'])){

$user = $_POST['user'];

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/penting/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :   
      // Proses simpan ke Database
      $query = "UPDATE user SET FOTO = '$nama_file' WHERE USERNAME='$user' AND LEVEL=1 ";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
    }
  }
}
  
header("location:../admin.php");
}

?>