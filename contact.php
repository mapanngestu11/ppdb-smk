<?php include "layouts/headerAwal.php";

?>
<!-- Halaman Pendaftaran-->
<section class="contact" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<br>
				<br>
				<h2>KONTAK KAMI</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-xs-offset-2">
				
				<br>
				<br>
               <form action="kirim-pesan.php" method="POST">
               		<div class="form-group">
               		<label>Nama</label>
               		<input type="text" name="nama" class="form-control">
               		</div>
               		<div class="form-group">
               		<label>Nomor Handphone</label>
               		<input type="number" name="no_hp" class="form-control">
               		</div>
               		<div class="form-group">
               		<label>Perihal</label>
               		<input type="text" name="hal" class="form-control">
               		</div>
               			<div class="form-group">
               		<label>Pesan</label>
               	<textarea name="pesan" class="form-control"></textarea>
               		</div>
               		<center>
               		<button type="submit" class="btn btn-primary">Kirim</button>
               		</center>
               </form>
				<br>
				<br>
			</div>
		</div>
	</div>
</section>
<!--Akhir Kontak-->
<!-- Footer-->
<br>
<br>
<footer>
	<?php include "layouts/footer.php"; ?>
</footer>
<!-- Akhir Footer-->
</body>

</html>