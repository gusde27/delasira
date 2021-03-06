<?php 
include 'koneksi.php';
include 'head.php'; 
?> 

<body class="body-login">


<div class="container" style="padding-top:10%">
  <div class="row" align="center">

  	<div class="col-sm-6">
  		
  	</div>	
    <div class="col-sm-6">
		<div class="card">
		  <div class="card-header"><img src="foto/penting/logo.png" height="150px" width="300px"></div>
		  <div class="card-body">

		  		<form method="POST" action="cek_login.php" onsubmit="validasi()">
                   <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                  </div>   
                  <button type="submit" class="btn btn-success">Login</button>
          </form>

		  </div>
		  <p>
		  <div class="card-footer">
		  <a href="#" onclick="pemberitahuan()">Lupa Kata sandi?</a>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
		  <a href="index.php">Kembali</a>
		  </div>
		  </p>
		</div>
	</div>

</div>
</div>

</body>
</html>


<script type="text/javascript">
  function pemberitahuan() {
      alert('Hibungi Admin');
  }

</script>
