<?php
include "layouts/header.php";
?>



    <div class="content-wrapper">
        <div class="container" id="wadah">
            <div class="row">
        <div class="col-md-12">
            <h4><font color="#3498db">DATA PENGUMUMAN</h4></font>
            <br>
        </div>
    </div>

<!-- Code BERANDA PENGUMUMAN -->
<!-- <script>
function showResult(str) {
//   if (str.length==0) {
//     document.getElementById("livesearch").innerHTML="";
//     document.getElementById("livesearch").style.border="0px";
//     return;
//   }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
    //   document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","dataSiswa.php?nama="+str,true);
//   document.write(str);
  xmlhttp.send();
}
</script> -->
<script type="text/javascript">

  $(document).ready(function(){

   $('#carinama').on('keyup', function(){

    $('table').load('search.php?nama=' + $('#carinama').val());

   });

  });

 </script>

        <div class="table-responsive">
            <div class="form-group">
                <form action="dataSiswa.php" method="GET">
                    <input type="text" name="nama" placeholder="Cari Nama ..."  id="carinama" onkeyup="showResult(this.value)">
                    
                    <button class="btn btn-primary" type="submit" name="cari">Cari</button>
                </form>
                <div id="livesearch"></div>
                <br>
                <button class="btn btn-primary">Tambah Data</button>
            </div>
                    <table id="dtBasicExample" class="table table-striped table-bordered table-hover">
                        <tr>
                            <th class="th-sm">No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Sekolah</th>
                            <th>Pemilihan Jurusan</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                            $no = 1;
                            if(isset($_GET['cari'])){
                                $cari = $_GET['nama'];
                                $result = mysqli_query($conn,"SELECT * FROM datapengumuman WHERE nama LIKE '%".$cari."%'");
                            }else{
                                $result = mysqli_query($conn,"SELECT * FROM datapengumuman");
                                // echo "Data tidak ditemukan";
                            }
                            
                            while($datasiswa=mysqli_fetch_assoc($result)){
                         ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                          
                            <td><?php echo $datasiswa ['nama'] ?></td>
                             <td><?php echo $datasiswa ['jenis_kelamin'] ?></td>
                              <td><?php echo $datasiswa ['asal_sekolah'] ?></td>
                               <td><?php echo $datasiswa ['jurusan'] ?></td>
                             <td><?php echo $datasiswa ['keterangan'] ?></td>
                              <td><?php echo $datasiswa ['tanggal'] ?></td>
                            <td><button class="btn btn-default btn-danger btn-xs">  <a href="hapusDataSiswa.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;" onclick="return confirm('Apakah yakin data akan dihapus?')"><i class="fa fa-trash-o"></i>Hapus</a> </center></button> 
                                <button class="btn btn-default btn-warning btn-xs">  <a href="editProfil.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;"><i class="fa fa-edit"></i>Edit</a> </center></button> </td>
                            
                        </tr>
                    <?php } ?>


                    </table>
                </div>
            </div>
    </div>
</tr>
</table>
</div>
</div>


<?php include "layouts/footer.php"; ?>