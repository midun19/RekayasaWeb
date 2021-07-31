<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stock</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach($barang as $brg)  : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $brg->nama_ikan ?></td>
				<td><?php echo $brg->keterangan ?></td>
				<td><?php echo $brg->kategori ?></td>
				<td><?php echo $brg->harga ?></td>
				<td><?php echo $brg->stock ?></td>
        <td><div class="btn btn-succes btn-sm"><i class="fas fa-search-plus"></i></div></td>
				<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_ikan, '<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_ikan, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

			</tr> 

		<?php endforeach; ?>
		
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data" >

      		<div class="form-group">
      			<label>Nama Barang</label>
      			<input type="text" name="nama_ikan" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="text" name="keterangan" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Kategori</label>
      			<select class="form-control" name="kategori">
            <option>Betta Plakat</option>
            <option>Betta Halfmoon</option>
            <option>Betta Crown Tail</option>
            <option>Betta Big Ear</option> 
            <option>Betta Double Tail</option>   
            <option>Betta Paradise</option>              
            </select>
      		</div>

      		<div class="form-group">
      			<label>harga</label>
      			<input type="text" name="harga" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Stock</label>
      			<input type="text" name="stock" class="form-control">
      		</div>

      		<div class="form-group">
      			<label>Gambar Produk</label><br>
      			<input type="file" name="gambar" class="form-control">
      		</div>
      		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
    </div>
  </div>
</div>