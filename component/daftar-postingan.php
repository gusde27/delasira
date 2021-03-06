<!-- awal -->
<?php if ($ex!=""){

echo '
<div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                Daftar Postingan
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
<table class="table table-bordered">

                <div class="countainer">
                  <div class="row">
                    <div class="col-sm-12">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Jenis Produk</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    ';
                      
                      $no = 1;
                      $data_produk = mysqli_query($koneksi,"SELECT * FROM produk");
                      
                      while($p = mysqli_fetch_array($data_produk)){
                    echo '

                      <tr>
                        <th scope="row"> '; echo $no++; echo ' </th>
                            <td>
                                ';
                                  echo $p['NAMA_P'];
                                echo '
                            </td>
                            <td>
                                ';
                                  echo $p['JENIS_P'];
                                echo '
                            </td>
                          <td>
                            
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal_p">Edit</button>

                              <!-- The Modal -->
                              <div class="modal" id="myModal_p">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <center><h4 class="modal-title">Edit Produk</h4></center>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      
                                      <form action="aksi/aksi-admin.php" method="POST" enctype="multipart/form-data">

                                          <input type="text" name="id_produk" value="'; echo $p['FOTO_P']; echo '" hidden="true">

                                          <b>Upload Foto</b></br>
                                            <small>Gambar Jpg/png.</small></br>   
                                            <input type="file" name="gambar"></br>
                                            </br>
                                          <input type="text" class="form-control" name="nama_p" id="nama_" placeholder="'; echo $p['NAMA_P']; echo '"></br>
                                          <input type="text" class="form-control" name="jenis_p" id="jenis_p" placeholder="'; echo $p['JENIS_P']; echo '">
                                          </br></br>
                                            <button type="submit" name="update_produk" class="btn btn-primary">Update Produk</button></br>
                                      </form>

                                    </div>

                                  </div>
                                </div>
                              </div>
                            <!-- Tutup Modal-->
                            ';
                            
                            
                            echo '
                          </td>
                          <td>
                            <form action="aksi/aksi-admin.php" method="POST">
                            <input type="text" name="id_produk" value="'; echo $p['FOTO_P']; echo '" hidden="true">
                            <button class="btn btn-danger" name="del_produk">Delete</button>
                            </form>
                          </td>
                      </tr>
                    ';
                      }
                    echo '

                  </div>
                  </div>
                  </div>

                    </tbody>
                  </table>
<!-- akhir -->
              </div>
            </div>
         
<!-- akhir card -->
';
}
?>