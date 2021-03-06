<?php 
include 'koneksi.php';
include 'head.php'; 
?>

<body>
    <?php include 'nav.php'; ?>
    <div style="margin-top:75px">
        <?php include 'slide.php'; ?>

        <div class="container" style="margin-top:30px">

            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">

                            <!-- bagian slidenya -->
                            <div id="demo1" class="carousel slide" data-ride="carousel">

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo1" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo1" data-slide-to="1"></li>
                                </ul>

                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a href="foto/penting/paket2.jpeg" class="perbesar">
                                            <img src="foto/penting/paket2.jpeg" width="100%" height="400px">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="foto/penting/paket1.jpeg" class="perbesar">
                                            <img src="foto/penting/paket1.jpeg" width="100%" height="400px">
                                        </a>
                                    </div>

                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo1" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>
                            <!-- tutup slidenya -->

                        </div>
                    </div>

                </div>
            </div>

            </br>

            <div class="row" align="center">

                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-4">

                            <div class="card">
                                <div class="card-body">
                                    <a href="produk.php" class="text-black">
                                        <img src="foto/penting/makanan.jpg" class="rounded" height="200" width="90%">

                                </div>
                                <div class="card-footer">
                                    <h5><b>Product</b></h5>
                                </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-4">

                            <div class="card">
                                <div class="card-body">
                                    <a href="event.php" class="text-black">
                                        <img src="foto/penting/kotak1.jpg" class="rounded" height="200" width="90%">

                                </div>
                                <div class="card-footer">
                                    <h5><b>Event</b></h5>
                                </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-4">

                            <div class="card">
                                <div class="card-body">
                                    <a href="us.php" class="text-black">
                                        <img src="foto/penting/sirra5.jpg" class="rounded" height="200" width="90%">

                                </div>
                                <div class="card-footer">
                                    <h5><b>Facilities</b></h5>
                                </div>
                                </a>
                            </div>

                        </div>
                    </div>

                </div> <!-- tutup col sm 12 -->

            </div>
        </div>

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
$batas_kata=35;
$potong=substr($kalimat_lengkap,0,$batas_kata);
?>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <b>
                                                        <p class="card-text">
                                                            <img src="foto/event_satu/<?php echo $d['FOTO_E'];?>"
                                                                width="100%" height="140px" class="rounded">
                                                        </p>
                                                    </b>
                                                </div>
                                                <div class="col-sm-7">
                                                    <b>
                                                        <p class="card-text"><?php echo $d['NAMA_E']; ?></p>
                                                    </b>
                                                    <p class="card-text"><?php echo $potong; echo'...'; ?></p>
                                                    <a href="isi-event.php?nama=<?php echo $d['NAMA_E']; ?>">
                                                        <button type="button" class="btn btn-primary btn-sm">Lihat
                                                            Selengkapnya</button>
                                                    </a>
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
                                <li class="page-item"><a class="page-link"
                                        href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            </ul>

                        </div>
                    </div>
                    <?php } ?>
                    <!-- tutup -->

                    </br>

                    <!-- pegawai -->
                    <div class="card">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5>Daftar Produk</h5>
                            </div>
                        </div>
                    </div>

                    <!-- awal -->
                    <?php 
  $halaman1 = 3;
  $page1 = isset($_GET["halaman1"]) ? (int)$_GET["halaman1"] : 1;
  $mulai1 = ($page1>1) ? ($page1 * $halaman1) - $halaman1 : 0;
  $result1 = mysqli_query($koneksi,"SELECT * FROM produk");
  $total1 = mysqli_num_rows($result1);
  $pages1 = ceil($total1/$halaman1);            
  $data1 = mysqli_query($koneksi,"SELECT * FROM produk LIMIT $mulai1, $halaman1");
?>

                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <?php
      while($da = mysqli_fetch_array($data1)){
?>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                <button type="button"
                                                    class="btn btn-outline-success btn-sm"><?php echo $da['JENIS_P']; ?></button>
                                            </p>
                                            <center>
                                                <img src="foto/produk/<?php echo $da['FOTO_P'];?>" width="100%"
                                                    height="150px" class="rounded">
                                            </center>
                                            </b>
                                            <center>
                                                <h5 class="card-text"><b><?php echo $da['NAMA_P']; ?></b></h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                            </br>
                            <center><a href="produk.php"><button type="button" class="btn  btn-success">Lihat
                                        Selengkapnya</button></a></center>
                        </div>
                    </div>
                    <!-- tutup -->

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
                                <b>
                                    <p>Nama</p>
                                </b>
                                <input type="text" class="form-control" name="nama_k" id="nama_k"
                                    placeholder="Masukan Nama"></br>
                                <b>
                                    <p>Pelayanan</p>
                                </b>
                                <!-- Membuat radio layanan -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="layanan" name="layanan"
                                            value="Sangat Baik">Sangat baik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="layanan" name="layanan"
                                            value="Baik">Baik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="layanan" name="layanan"
                                            value="Kurang Baik">Kurang Baik
                                    </label>
                                </div>
                                <!-- tutup -->
                                </br>
                                <b>
                                    <p>Makanan</p>
                                </b>
                                <!-- Membuat radio makanan -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="makanan" name="makanan"
                                            value="Sangat Baik">Sangat baik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="makanan" name="makanan"
                                            value="Baik">Baik
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="makanan" name="makanan"
                                            value="Kurang Baik">Kurang Baik
                                    </label>
                                </div>
                                <!-- tutup -->
                                </br>
                                <b>
                                    <p>Kritik dan Saran</p>
                                </b>
                                <textarea class="form-control" name="des_k" id="des_k" rows="3" cols="255"
                                    placeholder="Masukan Kritik dan Saran"></textarea>
                                </br>
                                <button type="submit" name="post_komen"
                                    class="btn btn-primary btn-sm">Kirim</button></br>
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
                                <div class="card-header">
                                    <h5>Lokasi De La SIRRA Cafe & Resto</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.339360977186!2d116.11552696478327!3d-8.563329793844696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x851c30ac4177c572!2sde%20la%20SIRRA%20Resto!5e0!3m2!1sid!2sid!4v1568217123717!5m2!1sid!2sid"
                                    width="100%" height="400" frameborder="0" style="border:0;"
                                    allowfullscreen=""></iframe>
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

            if (layanan != "" && makanan != "" && nama_k != "" && des_k != "") {

                alert('Komentar Berhasil Terkirim');
                return true;
            } else {
                alert('Lengkapi Form Komentar');
                return false;
            }
        }
        </script>