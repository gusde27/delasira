<?php 
session_start();
$ex = $_SESSION['USERNAME'];

include 'koneksi.php';
include 'head.php'; 
?>

<body>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="logout.php"><img src="foto/penting/logo.png" height="50px" width="90px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <?php if ($ex!=""){
        echo '
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Tambah Pegawai</button>
        &nbsp;

        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Tambah Pegawai</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form method="POST" action="aksi/aksi-admin.php">
                   <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                  </div>   
                  <button type="submit" name="tambah_pegawai" class="btn btn-success">Tambah</button>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      ';
      }
      ?>
            <?php if ($ex!=""){
        echo '
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal2">Tambah Manager</button>

        <!-- The Modal -->
        <div class="modal" id="myModal2">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Tambah Manager</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form method="POST" action="aksi/aksi-admin.php">
                   <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                  </div>   
                  <button type="submit" name="tambah_manager" class="btn btn-success">Tambah</button>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      ';
      }
      ?>
            &nbsp;
            <?php if ($ex!=""){
        echo '
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal3">Posting Event</button>

        <!-- The Modal -->
        <div class="modal" id="myModal3">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Posting Event</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form action="aksi/aksi-admin.php" method="POST" enctype="multipart/form-data">

                    <b>Upload Foto</b></br>
                      <small>Gambar Jpg/png.</small></br>   
                      <input type="file" name="gambar"></br>
                      </br>

                    <input type="text" class="form-control form-control-sm" name="nama_e" id="nama_e" placeholder="Masukan Nama Event"></br>
                    <input type="date" class="form-control form-control-sm" name="tanggal_e" id="tanggal_e" placeholder="Masukan Tanggal Event">
                    </br>
                      <div class="form-group">
                        <textarea class="form-control" name="des_e" id="des_e" rows="4" cols="2500" placeholder="Masukan Deskripsi"></textarea>
                      </div>

                    <button type="submit" name="post_event" class="btn btn-primary">Posting Event</button></br>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      ';
      }
      ?>
            &nbsp;
            <?php if ($ex!=""){
        echo '
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal4">Posting Produk</button>

        <!-- The Modal -->
        <div class="modal" id="myModal4">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Posting Produk</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form action="aksi/aksi-admin.php" method="POST" enctype="multipart/form-data">

                    <b>Upload Foto</b></br>
                      <small>Gambar Jpg/png.</small></br>   
                      <input type="file" name="gambar"></br>
                      </br>
                    <input type="text" class="form-control" name="nama_p" id="nama_" placeholder="Masukan Nama Produk"></br>
                    <input type="text" class="form-control" name="jenis_p" id="jenis_p" placeholder="Masukan Jenis Produk">
                    </br>
                    <textarea class="form-control" name="des_p" id="des_p" rows="3" cols="255" placeholder="Masukan Deskripsi"></textarea>
                      </br></br></br>
                      <button type="submit" name="post_produk" class="btn btn-primary">Posting Produk</button></br>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      ';
      }
      ?>
            &nbsp;
            <?php if ($ex!=""){
        echo '
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal5">Posting Foto Event</button>

        <!-- The Modal -->
        <div class="modal" id="myModal5">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Posting Foto Event</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form action="aksi/aksi-admin.php" method="POST" enctype="multipart/form-data">
                  <input type="text" class="form-control form-control-sm" name="nama_e" id="nama_e" placeholder="Masukan Nama Event"></br>
                  <input type="file" name="gambar[]" multiple>
                  </br>
                  <button type="submit" name="post_foto_e" class="btn btn-primary">Posting</button>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      ';
      }
      ?>
            &nbsp;
            <?php if ($ex!=""){
        echo '
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal6">Posting Foto Fasilitas</button>

        <!-- The Modal -->
        <div class="modal" id="myModal6">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <center><h4 class="modal-title">Posting Foto Fasilitas</h4></center>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                <form action="aksi/aksi-admin.php" method="POST" enctype="multipart/form-data">
                  <input type="text" class="form-control form-control-sm" name="nama_f" id="nama_f" placeholder="Masukan Nama Fasilias"></br>
                  <input type="file" name="gambar[]" multiple>
                  </br>
                  <button type="submit" name="post_foto_fasilitas" class="btn btn-primary">Posting</button>
                </form>

              </div>

            </div>
          </div>
        </div>
      <!-- Tutup Modal-->
      ';
      }
      ?>
            &nbsp;
            <a href="logout.php">
                <button type="button" class="btn btn-danger btn-sm">Logout</button>
            </a>
            &nbsp;

        </div>
    </nav>

    <?php

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE USERNAME = '$ex' and LEVEL = 1");
$isi = mysqli_fetch_array($data);

?>

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
                        <form action="aksi/aksi-admin.php" method="POST">

                            <div class="row">
                                <div class="col-md-6">
                                    <b>Full Name</b>
                                    <input type="text" class="form-control form-control-sm" name="nama" id="nama"
                                        placeholder="<?php echo $isi['NAME'] ?>"
                                        value="<?php echo $isi['NAMA'] ?>"></br>
                                    <b>Nick Name</b>
                                    <input type="text" class="form-control form-control-sm" name="nick" id="nick"
                                        placeholder="<?php echo $isi['NICKNAME'] ?>"
                                        value="<?php echo $isi['NICKNAME'] ?>">
                                    <b>Address</b>
                                    <div class="form-group">
                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" cols="100"
                                            value="<?php echo $isi['ALAMAT']; ?>"
                                            placeholder="<?php echo $isi['ALAMAT']; ?>"></textarea>
                                    </div>
                                    <b>Genre</b>
                                    <div class="form-group">
                                        <select name="jk" id="jk" class="form-control">
                                            <option value="<?php echo $isi['JK'] ?>"><?php echo $isi['JK'] ?></option>
                                            <option value="Male" name="jk">Male</option>
                                            <option value="Female" name="jk">Female</option>
                                        </select>
                                    </div>
                                    <b>Telp/WA Number</b>
                                    <input type="text" class="form-control form-control-sm" name="telp" id="telp"
                                        placeholder="<?php echo $isi['NO_TELP'] ?>"
                                        value="<?php echo $isi['NO_TELP'] ?>"></br>
                                    <input type="text" name="user" id="user" value="<?php echo $ex; ?>" hidden="true">

                                    <button type="submit" name="update_bio"
                                        class="btn btn-primary btn-sm">Save</button></br>
                        </form>
                    </div> <!-- row tutup -->

                    <div class="row">
                        <div class="col-md-6">
                            <img src="foto/penting/<?php echo $isi['FOTO'] ?>" height="300px" widht="300px">
                            <form method="POST" action="aksi/aksi-admin.php" enctype="multipart/form-data">
                                <b>Upload Foto</b></br>
                                <small>Gambar Jpg/png.</small></br>
                                <input type="file" name="gambar"></br>
                                <input type="text" name="user" id="user" value="<?php echo $ex; ?>" hidden="true">
                                <button type="submit" name="update_foto"
                                    class="btn btn-primary btn-sm">Upload</button></br>
                            </form>
                        </div>
                    </div> <!-- row tutup -->
                </div><!-- tutup -->

                <!-- tutup biodata -->

            </div>
        </div>

        <!-- awal -->
        <div id="accordion">
            <?php include 'component/daftar-tamu.php' ?>
            <?php include 'component/daftar-akun.php' ?>
            <?php include 'component/daftar-postingan.php' ?>
            <?php include 'component/daftar-event.php' ?>
            <?php include 'component/daftar-fasilitas.php' ?>
        </div>

    </div>
    </div>
    </div>

    <?php include 'footer.php'; ?>