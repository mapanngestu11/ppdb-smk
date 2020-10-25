<?php include "layouts/headerAwal.php"?>
<!-- Halaman Pendaftaran-->
<section class="contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<br>
				<br>
				<h2>Hasil Pengumuman PPDB</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-xs-offset-2">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama Lengkap</th>
							<th scope="col">Asal Sekolah</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">Jurusan yang diminati</th>
							<th scope="col">Keterangan</th>
							<th scope="col">Tanggal</th>

						</tr>
					</thead>
					<tbody>
					<tr>
						<?php 
						   include 'koneksi.php';
						   $no = 1 ;
						  $result = mysqli_query($conn,"SELECT * FROM datapengumuman");
						  while($datasiswa=mysqli_fetch_assoc($result)){

						  ?>
						  <td><?php echo$no++ ?></td>
						<td><?php echo $datasiswa ['nama'] ?></td>
                             <td><?php echo $datasiswa ['jenis_kelamin'] ?></td>
                              <td><?php echo $datasiswa ['asal_sekolah'] ?></td>
                               <td><?php echo $datasiswa ['jurusan'] ?></td>
                             <td><?php echo $datasiswa ['keterangan'] ?></td>
                              <td><?php echo $datasiswa ['tanggal'] ?></td>
					</tr>

					<?php 

				}
				?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<!--Akhir Kontak-->
<!-- Footer-->
<br>
<br>
<br>
<br>
<br>
<br>
<footer>
	<?php include "layouts/footer.php"; ?>
</footer>
<!-- Akhir Footer-->
</body>

</html>