<?php 
include_once("kategoriCtrl.php");
if(!isset($_GET['act'])){
//jika tidak ditemukan pengiriman variabel "act"
?>
<a href="?modul=mod_kategori&act=add" class="btn btn-primary">Tambah</a>
<br><br>
<table class="table table-bordered">
    <tr>
        <th>ID kategori</th>
        <th>Nama kategori</th>
		<th>Is active</th>
        <th>Action</th>
    </tr>
    <?php
	$qry_listmenu = mysqli_query($connect_db,"select * from mst_kategoriblog order by id_kategori DESC")or die("gagal akses table mst_kategoriblog ".mysqli_error($connect_db));
	while($row = mysqli_fetch_array($qry_listmenu)){		
	?>
	<tr>
		<td><?php echo $row['id_kategori']; ?></td>
		<td><?= $row['nm_kategori']; ?></td>
		<td><?= $row['is_active']; ?></td>
        <td>
			<a href="?modul=mod_kategori&act=edit&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" > </i> edit </a>
			<a href="?modul=mod_kategori&act=delete&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-danger p-1"><i class="bi bi-trash"></i>Delete</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
<?php 
} //ini penutup if(!isset($_GET['act']))
else if(isset($_GET['act']) && ($_GET['act']== "add")){
//ketika di add
?>
<div class="container-fluid">
	<h3><?php echo $judul; ?></h3>
	<form action="mod_kategori/kategoriCtrl.php?modul=mod_kategori&act=save" method="post">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama kategori</label>
			<div class="col-md-6">
				<input type="text" name="nm_kategori" id="nm_kategori" class="form-control ">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<input type="checkbox" name="isactive" id="isactive"> Aktif
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
		</div>
	</form>
</div>
<?php 
 }
 else if(isset($_GET['act']) && ($_GET['act']== "edit")){
	 //ini akan ditampilkan saat klik tombol edit
?>
<div class="container-fluid">
	<h3><?php echo $judul ?></h3>
	<form action="mod_kategori/kategoriCtrl.php?modul=mod_menu&act=update" method="POST">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Kategori</label>
			<div class="col-md-6">
				<input type="hidden" class="form-control" name="id_kategori" id="id_kategori" value="<?= $data['id_kategori']; ?>">
				<input type="text" class="form-control" name="nm_kategori" id="nm_kategori" value="<?php echo $data['nm_kategori']; ?>">
			</div>
		</div>
		<div class="row">>
			<div class="col-md-2"></div>
			<div class="col-md-6">
			<input class="form-check-input" type="checkbox" name="isactive" id="isactive" <?= $data['is_active'] == 1 ? "checked" : "" ?>> Aktif
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
		</div>
	</form>
</div>
<?php } ?>