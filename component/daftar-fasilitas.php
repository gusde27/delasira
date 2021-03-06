<!-- awal -->
<?php if ($ex!=""){

echo '
<div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseFour">
                Daftar Postingan
              </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
              <div class="card-body">
<!-- awal -->
';
    $data_fasilitas = mysqli_query($koneksi,"SELECT * FROM fasilitas");                  
        while($fas = mysqli_fetch_array($data_fasilitas)){
            echo'
                <img src="foto/fasilitas/'; echo $fas['FOTO_F'];  echo ' " class="rounded" height="15%" width="100%"> 
            
            ';
        }
echo '
<!-- akhir -->
              </div>
            </div>
         
<!-- akhir card -->
';
}
?>