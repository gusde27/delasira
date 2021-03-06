<?php 
include 'koneksi.php';
include 'head.php'; 
?> 

<body class="body-login">


<div class="container" style="padding-top:10%">
  <div class="row" align="center">

    <div class="col-sm-12">
		<div class="card">
		  <div class="card-header">
        <img src="foto/penting/logo.png" height="150px" width="300px">
        <h4>Booking Acara Anda</h4>
      </div>
		  <div class="card-body">

		  		<form method="POST" action="" onsubmit="validasi_tamu()">
                   <div class="form-group">
                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="no_tamu" name="no_tamu" placeholder="Masukan Nomer Telp WA">
                  </div>
                  <p><b>Pilih Tanggal Acara</b></p>
                  <div class="form-group">
                    <input type="date" class="form-control" id="hari_booking" name="hari_booking" placeholder="Pesan Tanggal">
                  </div>
                  <div class="form-group">
                    <select name="acara" id="acara" class="form-control">
                      <option>Pilih Acara</option>
                      <option value="Wedding Party" name="acara">Wedding Party</option>
                      <option value="Birthday Party" name="acara">Birthday Party</option>
                      <option value="Meeting" name="acara">Meeting</option>
                      <option value="Reuni" name="acara">Reuni</option>
                      <option value="Family Greeting" name="acara">Family Greeting</option>
                      <option name="acara" value="Dan Acara lainnya">
                          Dan Acara lainnya
                      </option>
                    </select>
                  </div>   
                  <button type="submit" name="post_booking" class="btn btn-success">Booking</button>
                </form>

		  </div>
		  <p>
		  <div class="card-footer">
        <a href="index.php">
          <button type="submit" class="btn btn-danger">Kembali</button>
        </a>
		  </div>
		  </p>
		</div>
	</div>

</div>
</div>

<div style="margin-bottom:75px">

</body>
</html>

<?php 
  if(isset($_POST['post_booking'])){
    $nama_tamu = $_POST['nama_tamu'];
    $no_tamu = $_POST['no_tamu'];
    $acara = $_POST['acara'];
    $hari_booking = $_POST['hari_booking'];

    if ($nama_tamu != "" && $no_tamu != "" && $acara != "" && $hari_booking != ""){
      mysqli_query($koneksi, "INSERT INTO tamu (NAMA_T, NO_T, TANGGAL_T, ACARA_T) VALUES ('$nama_tamu','$no_tamu','$hari_booking','$acara')");
    } 
  
  }

?>


<script type="text/javascript">
  function pemberitahuan() {
      alert('Hibungi Admin');
  }

  function validasi_tamu() {
    var nama_tamu = document.getElementById("nama_tamu").value;
    var no_tamu = document.getElementById("no_tamu").value;
    var acara = document.getElementById("acara").value;
    var hari_booking = document.getElementById("hari_booking").value;
    
    if (nama_tamu != "" && no_tamu != "" && acara != "" && hari_booking != "") {
      
      alert('Acara Berhasil Di Booking');
      return true;
    }else{
      alert('Lengkapi Data Booking Anda');
      return false;
    }
  }
</script>
