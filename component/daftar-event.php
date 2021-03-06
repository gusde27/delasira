<!-- awal -->
<?php 
if($ex!=""){
echo '
<div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseThree">
                Daftar Event
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
<table class="table table-bordered">

                <div class="countainer">
                  <div class="row">
                    <div class="col-sm-12">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Tanggal Event</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    ';
                      
                      $no = 1;
                      $data_event = mysqli_query($koneksi,"SELECT * FROM event");
                      
                      while($e = mysqli_fetch_array($data_event)){
                    echo '

                      <tr>
                        <th scope="row">'; echo $no++; echo ' </th>
                            <td>
                                ';
                                  echo $e['NAMA_E'];
                                echo '
                            </td>
                            <td>
                                ';
                                  echo $e['TANGGAL_E'];
                                echo '
                            </td>
                          <td>  
                              ';
                                  echo $e['DES_E'];
                                echo '
                          </td>
                          <td>';
                            
                              echo '
                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal_e">Edit</button>

                              <!-- The Modal -->
                              <div class="modal" id="myModal_e">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <center><h4 class="modal-title">Edit Event</h4></center>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      
                                      <form action="aksi/aksi-admin.php" method="POST" enctype="multipart/form-data">

                                          <input type="text" name="id_event" value="'; echo $e['NAMA_E']; echo '" hidden="true">

                                          <b>Upload Foto</b></br>
                                            <small>Gambar Jpg/png.</small></br>   
                                            <input type="file" name="gambar"></br>
                                            </br>
                                          <input type="text" class="form-control" name="nama_e" id="nama_" value="'; echo $e['NAMA_E']; echo '"></br>
                                          <input type="date" class="form-control" name="tanggal_e" id="jenis_p" value="'; echo $e['TANGGAL_E']; echo '">
                                          </br>
                                          <textarea class="form-control" name="des_e" id="des_e" rows="5" cols="1000" value="'; echo $e['DES_E']; echo '"></textarea>
                                            </br></br></br>
                                            <button type="submit" name="update_event" class="btn btn-primary">Update Event</button></br>
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
                            <input type="text" hidden="true" name="id_event" value="'; echo $e['NAMA_E']; echo '">
                              <button class="btn btn-danger" name="del_event">Delete</button>
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
          </div>
          ';
    }
?>
<!-- akhir card -->