<?php 
include_once("blogCtrl.php");
if(!isset($_GET['act'])){
//jika tidak ditemukan pengiriman variabel "act"
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Document</title>
		</head>
		<body>
			<a href="?modul=mod_blog&act=add" class="btn btn-primary">Tambah</a>
			<br><br>
			<table class="table table-bordered">
				<tr class="text-center">
					<th>ID Blog</th>
					<th>Judul</th>
					<th>Kategori</th>
					<th>Isi</th>
					<th>Author</th>
					<th>Date Input</th>
					<th>Gambar</th>
					<th>Action</th>
				</tr>
				<?php
				$qry_listmenu = mysqli_query($connect_db,"SELECT * FROM mst_blog")
				or die("gagal akses table mst_kategoriblog ".mysqli_error($connect_db));
				while($row = mysqli_fetch_array($qry_listmenu)){	
					$id=$row['id_kategori'];
					$k1=mysqli_query($connect_db,"SELECT nm_kategori FROM mst_kategoriblog WHERE id_kategori=$id");
					if($k2=mysqli_fetch_array($k1)){
						?>
						<tr>
							<td><center><?php echo $row['id_blog']; ?></center></td>
							<td><center><?= $row['judul']; ?></td></center>
							<td><center><?= $k2['nm_kategori']; ?></center></td>
							<td>
								<?=substr ($row['isi'],0,200); ?></td>
							<td><center><?= $row['author']; ?></td></center>
							<td><?= $row['date_input']; ?></td>
							<td><img src="../assets/img/<?= $row['gambar']; ?>" alt="" width="150px"></td>
							<td>
								<a href="?modul=mod_blog&act=edit&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-primary"> <i class="bi bi-pencil-square" ></i> edit </a>
								<a href="?modul=mod_kategori&act=delete&id=<?= $row['id_kategori']; ?>" class="btn btn-xs btn-danger p-1"><i class="bi bi-trash"></i>Delete</a>
							</td>
						</tr>
						<?php 
					}
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
							<form action="mod_blog/blogCtrl.php?modul=mod_blog&act=save" method="post" enctype="multipart/form-data">
							<div class="row mb-1">
									<label for="" class="col-md-2">judul</label>
									<div class="col-md-6">
										<input type="hidden" name="author" value="<?=$_SESSION['userlogin']; ?>">
										<input type="text" name="judul" id="judul" class="form-control ">
									</div>
								</div>
								<div class="row mb-1">
									<label for="id_kategori" class="col-md-2">kategori</label>
									<div class="col-md-6">
									<select name="id_kategori" id="id_kategori" class="form-select">
										<option selected disabled>-- pilih kategori --</option>
										<?php
										$category=mysqli_query($connect_db,"select * from mst_kategoriblog");
										while($data=mysqli_fetch_array($category)){
											?>
											<option value="<?=$data['id_kategori'];?>"><?=$data['nm_kategori']; ?></option>
											<?php }?>
										</select>
									</div>
								</div>
								<div class="row mb-1">
									<label for="" class="col-md-2">isi</label>
									<div class="col-md-6">
										<textarea name="isi" id="editor" rows="5" cols="10" class="form-control "></textarea>
									</div>
								</div>
								<div class="row mb-1">
									<label for="" class="col-md-2">Tanggal input</label>
									<div class="col-md-6">
										<input type="date" name="date_input" id="date_input" class="form-control ">
									</div>
								</div>
								<div class="row mb-1">
									<label for="" class="col-md-2">Upload gambar</label>
									<div class="col-md-6">
										<input type="file" name="urlfile"  id="urlfile" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-6">
										<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
											<i class="bi bi-x-lg"></i>Batal</a></button>
										<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
											<i class="bi bi-save"></i>Simpan</a></button>
									</div>
								</div>
							</form>
						</div>
						<?php }
						else if(isset($_GET['act']) && ($_GET['act']== "edit")){
							//ini akan ditampilkan saat klik tombol edit
							?>
							<div class="container-fluid">
								<h3><?php echo $judul ?></h3>
								<form action="mod_blog/blogCtrl.php?modul=blog&act=update" method="POST">
								<div class="row mb-1">
										<label for="" class="col-md-2">judul</label>
										<div class="col-md-6">
											<!-- input type hidden ini untuk menyimpan idmenu sebagai key untuk proses update data
											kenapa di hidden, karena field sbg primary key tidak boleh di edit -->
											<input type="hidden" name="id_blog" id="id_blog" class="form-control" value="<?= $data['id_blog']; ?>">
											<input type="text" name="up_judul" id="up_judul" class="form-control" value="<?= $data['judul']; ?>">
										</div>
									</div>
									<div class="row mb-1">
										<label for="" class="col-md-2">kategori</label>
										<div class="col-md-6">
											<select name="up_kategori" id="up_kategori" class="form-select">
												<?php 
												$kat1=mysqli_query($connect_db,"select * from mst_kategoriblog");
												while($updata=mysqli_fetch_array($kat1)){
													if($updata['id_kategori']===$data['id_kategori']){
														$select = "selected";
													} 
													else{
														$select = "";
													}
												?>
												<option value="<?=$updata['id_kategori']; ?>"<?= $select; ?>><?=$updata['nm_kategori']; ?></option> 
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="row mb-1">
										<label for="" class="col-md-2">isi</label>
										<div class="col-md-6">
											<textarea name="isi" id="isi" class="form-control" ><?= $data['isi']; ?></textarea>
										</div>
									</div>
									<div class="row mb-1">
										<label for="" class="col-md-2">author</label>
										<div class="col-md-6">
											<select name="up_author" id="up_author" class="form-select">
												<?php 
												$author1=mysqli_query($connect_db,"select username from mst_user");
												while($auth=mysqli_fetch_array($author1)){
													if($auth['username']===$data['author']){
														$select="selected";
													}else{
														$select="";
													}
												?>
													<option value="<?= $auth['username'];?>"<?= $select; ?>><?= $auth['username']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="row mb-1">
										<label for="" class="col-md-2">date input</label>
										<div class="col-md-6">
											<input type="date" name="date_input" id="date_input" class="form-control " value="<?= $data['date_input'] ?>">
										</div>
									</div>
									<div class="row mb-1">
										<label for="" class="col-md-2">Upload gambar</label>
										<div class="col-md-6">
											<input type="file" name="urlfile"  id="urlfile" class="form-control" value="<?= $data['gambar'] ?>">
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
						}?>
		</body>
		<script src="https://cdn.tiny.cloud/1/ctai2l7ettpdz3uyphr0lz4x23v2z3otpascq7sk3miw64e3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
		<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
			toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
			toolbar_mode: 'floating',
			tinycomments_mode: 'embedded',
			tinycomments_author: 'Author name',
		});
  </script>
</html>