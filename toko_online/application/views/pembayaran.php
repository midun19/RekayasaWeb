<div class="container-fluid">
	<div class="row">
		<div class="cold-md-2"></div>
		<div class="cold-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

					echo "<h4>Total belanja Anda: Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>

			<h3>Input Alamat Pengiriman dan Pembayaran</h3> 

			<form  action="<?php echo base_url('dashboard/proses_pesanan');?>"method="post">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<i><div class="text-danger small">*HARUS DIISI</div></i>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
					</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<i><div class="text-danger small">*HARUS DIISI</div></i>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<i><div class="text-danger small">*HARUS DIISI</div></i>
					<input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label><br>
					<i><div class="text-danger small">*HARUS DIISI</div></i>
					<select class="form-control">
						<option>  </option>
						<option>JNE</option>
						<option>JNT</option>
						<option>TIKI</option>
						<option>Ninja Express</option>
						<option>POS INDONESIA</option>
						<option>GOSEND</option>
						<option>GRAB</option>
					</select>
				</div>

				<div class="form-group">
					<label>Provinsi</label><br>
					<i><div class="text-danger small">*HARUS DIISI</div></i>
					<select class="form-control">
						<option>  </option>
						<option>DKI Jakarta</option>
						<option>Banten</option>
						<option>Jawa Barat</option>
						<option>Jawa Tengah</option>
						<option>Jawa Timur</option>
					</select>
				</div>

				<div class="form-group">
					<label>Kota/Kabupaten</label><br>
					<i><div class="text-danger small">*HARUS DIISI</div></i>
					<select class="form-control">
						<option>  </option>
						<option>Tanggerang<M/option>
						<option>Kab. Lebak</option>
						<option>Pandeglang</option>
						<option>Serang</option>
						<option>Cilegon</option>
						<option>Jakarta Barat</option>
						<option>Jakarta Timur</option>
						<option>Jakarta Pusat</option>
						<option>jakarta Utara</option>
						<option>Jakarta Selatan</option>
						<option>Bandung</option>
						<option>Cimahi</option>
						<option>Bekasi</option>
						<option>Depok</option>
						<option>Cirebon</option>
						<option>Bogor</option>
						<option>Tasikmalaya</option>
						<option>Subang</option>
						<option>Banjar</option>
						<option>Semarang</option>
						<option>Pekalongan</option>
						<option>Magelang</option>
						<option>Kudus</option>
						<option>Tegal</option>
						<option>Jepara</option>
						<option>Yogyakarta</option>
						<option>Surabaya</option>
						<option>Malang</option>
						<option>Kediri</option>
						<option>Blitar</option>
						<option>Tulungagung</option>

					</select>
				</div>

				<div class="form-group">
					<label>Pilih BANK</label><br>
					<i><div class="text-danger small">*HARUS DIISI</div></i>
					<select class="form-control">
						<option>   </option>
						<option>BCA - 28298568710 a.n Zaena Arif</option>
						<option>BNI - 2836481028372812 a.n Zaenal Arif</option>
						<option>BRI - 28298568710 a.n Zaenal Arif</option>
						<option>MANDIRI - 4567569864458 a.n Zaenal Arif</option>
						<option>OVO - 087825675766 a.n Zaenal Arif</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
				
			</form>

			<?php 
		} else 
		{
			echo " <h5>Keranjang Belanja Anda Masih Kosong";
		}
			 ?>
		</div>


		<div class="cold-md-2"></div>
	</div>
</div>