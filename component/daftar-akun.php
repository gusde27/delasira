<!-- awal -->
<?php 
          if ($ex!=""){
          echo '
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Daftar Akun
              </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
<table class="table table-bordered">

                <div class="countainer">
                  <div class="row">
                    <div class="col-sm-12">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telp/WA</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    ';
                      
                      $no = 1;
                      $data = mysqli_query($koneksi,"SELECT * FROM user");
                      
                      while($d = mysqli_fetch_array($data)){
                    
                      echo '
                      <tr>
                        <th scope="row">'; echo $no++; echo ' </th>
                            <td>
                                ';
                                  echo $d['USERNAME'];
                                echo '
                            </td>
                            <td>
                                ';
                                  echo $d['PASSWORD'];
                                echo '
                            </td>
                          <td>  
                              ';
                                  echo $d['NAMA'];
                                echo '
                          </td>
                          <td>  
                              ';
                                  echo $d['ALAMAT'];
                                echo '
                          </td>
                          <td>  
                              ';
                                  echo $d['NO_TELP'];
                                echo '
                          </td>
                          <td>  
                              ';
                                  echo $d['JK'];
                                echo'
                          </td>
                          <td>  
                              <form action="aksi/aksi-admin.php" method="POST">
                              <div class="form-group">
                                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="'; echo $d['JABATAN']; echo '" value="'; echo $d['JABATAN']; echo '">
                              </div>
                          </td>

                          <td>
                            
                              <input type="text" name="id_user" value="'; echo $d['USERNAME']; echo '" hidden="true">
                              <button class="btn btn-success" name="update_jabatan">Update</button>
                            </form>
                          </td>
                          <td>
                            <form action="aksi/aksi-admin.php" method="POST">
                            <input type="text" name="id_user" value="'; echo $d['USERNAME']; echo ' " hidden="true">
                              <button class="btn btn-danger" name="del_user">Delete</button>
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
          </div>';
            }
          ?>
<!-- akhir card -->