<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php"><img src="foto/penting/logo.png" height="50px" width="90px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><button class="btn btn-dark">Home</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produk.php"><button class="btn btn-dark">Product</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php"><button class="btn btn-dark">Event</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="us.php"><button class="btn btn-dark">About Us</button></a>
      </li>
      <li>
        <a class="nav-link" href="login.php">
        <button class="btn btn-dark"><!-- <img src="foto/penting/login.png" height="20px" width="20px">&nbsp;&nbsp; -->Login</button>
        </a>
      </li>
    </ul>

<script type="text/javascript">
  function validasi_tamu() {
    var nama = document.getElementById("nama_tamu").value;
    var email = document.getElementById("email").value;
    var js = document.getElementById("js").value;
    var sosial = document.getElementById("sosial").value;
    var negara = document.getElementById("negara").value;
    var datang = document.getElementById("datang").value;
    if (nama_tamu != "" && email!="" && js !="" && sosial !="" && negara !="" && datang !="") {
      
      alert('Thanks for Join With Us, Wait Your Confirmation From us');
      return true;
    }else{
      alert('Please Complate Your Form!');
      return false;
    }
  }
</script>
    

  </div>  
</nav>