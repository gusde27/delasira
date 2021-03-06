<?php
        if($ex!=""){
          echo '
        <div id="accordion">
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseTamu">
                Daftar Tamu
              </a>
            </div>
            <div id="collapseTamu" class="collapse" data-parent="#accordion">
              <div class="card-body">';
                    
            echo '
                <!-- awal -->
<table class="table table-bordered">

                <div class="countainer">
                  <div class="row">
                    <div class="col-sm-12">
                    
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomer Telp</th>
                        <th scope="col">Hari Booking</th>
                        <th scope="col">Nama Event</th>
                      </tr>
                    
                    </thead>
                    <tbody>
                    ';
                      
                      $no = 1;
                      $tamu = mysqli_query($koneksi,"SELECT * FROM tamu");
                      
                      while($t = mysqli_fetch_array($tamu)){
                    
                    echo'
                      <tr>
                        <th scope="row">'; echo $no++;  echo '</th>
                            <td>';
                                  echo $t['NAMA_T'];
                            echo'    
                            </td>
                            <td>';
                                  echo $t['NO_T'];
                            echo'
                            </td>
                          <td>';
                                  echo $t['TANGGAL_T'];
                          echo'
                          </td>
                          <td>';
                                  echo $t['ACARA_T'];
                          echo'
                          </td>
                      </tr>
                      ';
                          }
                  echo'    
                  </div>
                  </div>
                  </div>

                    </tbody>
                  </table>
<!-- akhir -->
              ';

              echo '</div>
            </div>
          </div>


        </div> 
        ';
        }
        ?>