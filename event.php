<?php 
include 'koneksi.php';
include 'head.php'; 
?> 

<body>
<?php include 'nav.php'; ?>
<div style="margin-top:100px">


<div class="container" style="margin-top:50px">
  <div class="row">
    <div class="col-sm-9">


<div class="card">
<div class="card bg-primary text-white">
  <div class="card-body">
    <h4>Event</h4>
  </div>
</div>
</div>

<!-- awal -->
<?php 

  $halaman = 6;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi,"SELECT * FROM event");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $data = mysqli_query($koneksi,"SELECT * FROM event LIMIT $mulai, $halaman");
  $no = 1;
?>

<div class="card">
<div class="card-body">

      <div class="row">
<?php
      while($d = mysqli_fetch_array($data)){

$kalimat_lengkap = $d['DES_E'];
$batas_kata=200;
$potong=substr($kalimat_lengkap,0,$batas_kata);
?>
    <div class="col-sm-12">
      <div class="card">
      <div class="card-body">

        <div class="row">
          <div class="col-sm-12">
          <p>
            <button type="button"class="btn btn-outline-primary btn-sm"><?php echo $d['TANGGAL_E']; ?></button>
          </p>
          <div class="row">
            <div class="col-sm-3">
            <b><p class="card-text">
              <img src="foto/event_satu/<?php echo $d['FOTO_E'];?>" width="160px" height="170px">
            </p></b>
            </div>
            <div class="col-sm-9">  
            <b><p class="card-text"><?php echo $d['NAMA_E']; ?></p></b>
            <p class="card-text"><?php echo $potong; echo'...'; ?></p>
            <a href="isi-event.php?nama=<?php echo $d['NAMA_E']; ?>">
            <button type="button" class="btn btn-primary btn-sm">Lihat Selengkapnya</button>
            </a>
            </div>
          </div>

          </div>
        </div>

      </div>
      </div>
    </div>
<?php } ?>

      </div>
</br>    
<ul class="pagination">
 <li class="page-item"><a class="page-link" href="#">Page</a></li>
 <?php for ($i=1; $i<=$pages ; $i++){ ?>
 <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
</ul>

</div>
</div>
<?php } ?>
<!-- tutup -->

</br>
  
    </div>

    <div class="col-sm-3">
      <div class="card">
      <div class="card bg-dark text-white">
        <div class="card-header">
          <h5 align="center">Kolom Komentar</h5>
        </div>
      </div>
      <div class="card-header">
        <form action="" method="POST" onsubmit="validasi_komen()">
            <b><p>Nama</p></b>
            <input type="text" class="form-control" name="nama_k" id="nama_k" placeholder="Masukan Nama"></br>
              <b><p>Pelayanan</p></b>
              <!-- Membuat radio layanan -->
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="layanan" name="layanan" value="Sangat Baik">Sangat baik
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="layanan" name="layanan" value="Baik">Baik
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="layanan" name="layanan" value="Kurang Baik">Kurang Baik
                </label>
              </div> 
              <!-- tutup -->
            </br>
            <b><p>Makanan</p></b>
            <!-- Membuat radio makanan -->
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="makanan" name="makanan" value="Sangat Baik">Sangat baik
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="makanan" name="makanan" value="Baik">Baik
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" id="makanan" name="makanan" value="Kurang Baik">Kurang Baik
                </label>
              </div> 
              <!-- tutup -->
            </br>
            <b><p>Kritik dan Saran</p></b>
            <textarea class="form-control" name="des_k" id="des_k" rows="3" cols="255" placeholder="Masukan Kritik dan Saran"></textarea>
            </br>
            <button type="submit" name="post_komen" class="btn btn-primary btn-sm">Kirim</button></br>
        </form>
      </div>
      </div>
    </div>
 
  </div>

  </br>
    <div class="countainer">
      <div class="row">
        <div class="col-sm-12"> 
          <div class="card">
            <div class="bg-dark text-white">
            <div class="card-header"><h5>Lokasi De La SIRRA Cafe & Resto</h5></div>
            </div>
            <div class="card-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.339360977186!2d116.11552696478327!3d-8.563329793844696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x851c30ac4177c572!2sde%20la%20SIRRA%20Resto!5e0!3m2!1sid!2sid!4v1568217123717!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </br>
            </div>
          </div>
        </div>
      </div>
    </div>


</div>
 
<?php include 'footer.php'; 

if(isset($_POST['post_komen'])){
  $pelayanan =  $_POST['layanan'];
  $makanan = $_POST['makanan'];
  $nama_k = $_POST['nama_k'];
  $des_k = $_POST['des_k'];

  if ($pelayanan !="" && $makanan !="" && $nama_k !="" && $des_k !=""){

  $kirim = "INSERT INTO komentar(NAMA_K, PELAYANAN, MAKANAN, KRITIK) VALUES ('$nama_k','$pelayanan','$makanan','$des_k')";

    mysqli_query($koneksi, $kirim);
  }
}
?>

<script type="text/javascript">
  function validasi_komen() {
    var layanan = document.getElementById("layanan").value;
    var makanan = document.getElementById("makanan").value;
    var nama_k = document.getElementById("nama_k").value;
    var des_k = document.getElementById("des_k").value;
    
    if (layanan !="" && makanan !="" && nama_k !="" && des_k !="") {
      
      alert('Komentar Berhasil Terkirim');
      return true;
    }else{
      alert('Lengkapi Form Komentar');
      return false;
    }
  }
</script>

